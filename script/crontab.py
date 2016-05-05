#!/usr/bin/python
# encoding=utf-8
import random
import sys
import MySQLdb
import os
import subprocess
from ConfigParser import ConfigParser

configfile = os.path.dirname(os.path.abspath(__file__)) + '/conf/searchku.conf'
class ReadConfig:
    @staticmethod 
    def getconfig(section, key):
        config = ConfigParser()
        config.read(configfile)
        return config.get(section, key) 

class DownFile:
    def __init__(self, line):
        self.DownLoad(line)

    def DownLoad(self, data):
        downname = "/tmp/{0}.{1}".format(data[1], int(random.random() * 100))
        cmd = "python py-wget.py -u {0} -o {1}".format(data[5], downname)
        result = subprocess.Popen(cmd, shell=True, stdout=subprocess.PIPE,stderr=subprocess.STDOUT)
        result.wait()
        if result.communicate()[0].find('Done'):
            update = {'id':data[0], 'downpath':downname}
            Mysql().updatetask(update)
            print "[!] sche {0} has done!".format(data[1])

class DumpFile:
    def __init__(self):
        self.dump(line)

    def dump(self, data):
        cmd = "python dumpfile2es.py -f {0} -c {1} -s {2}".format(data[1], data[2], data[3])
        result = subprocess.Popen(cmd, shell=True, stdout=subprocess.PIPE,stderr=subprocess.STDOUT)
        if result.communicate()[0].find('Done'):
            Mysql().deltask(data[0])
            print "[!] sche {0} has done!".format(data[1])

class Mysql:
    cursor = None
    conn = None
    def __init__(self):
        host        = ReadConfig.getconfig('mysql', 'HOST')    
        username    = ReadConfig.getconfig('mysql', 'USERNAME')
        password    = ReadConfig.getconfig('mysql', 'PASSWORD')
        dbname      = ReadConfig.getconfig('mysql', 'DBNAME')
        dbcharset   = ReadConfig.getconfig('mysql', 'dbcharset')
        self.conn   = MySQLdb.connect(host=host, user=username, passwd=password,db=dbname)
        self.cursor = self.conn.cursor()

    def execute(self, sql):
        result = self.cursor.execute(sql)
        return self.cursor.fetchall()

    def gettask(self):
        sql = "select id,name,downpath,filecolumns,split,link from sk_data"
        result = self.execute(sql)
        count = []
        for line in result:
            count.append(line)
        return count

    def updatetask(self, update):
        sql = "update sk_data set downsche=100,downpath=\"{0}\" where id={1}".format(update['downpath'], update['id'])
        result = self.execute(sql)
        self.conn.commit()
        print result
    

    def __del__(self):
        self.conn.close()
        self.cursor.close()

def main():
    result = Mysql().gettask()
    for line in result:
        DownFile(line)
        # DumpFile(line)

if __name__ == '__main__':
    main()
