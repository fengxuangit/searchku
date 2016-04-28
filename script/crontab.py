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
    def __init__(self):
        result = Mysql().getlink() 
        for line in result:
            if line[4] != None:
                DownLoad(line)

    def DownLoad(self, data):
        downname = "{0}.{1}".format(data[3], int(random.random() * 100))
        cmd = "python py-wget.py -u {0} -s /tmp/{1}".format(data[4], downname)
        result = subprocess.Popen(cmd, shell=True, stdout=subprocess.PIPE,stderr=subprocess.STDOUT)
        if result.communicate()[0].find('Done'):
            Mysql().updatetask(data[0])
            print "[!] sche {0} has done!".format(data[1])

class DumpFile:
    def __init__(self):
        result = Mysql().gettask()
        for line in result:
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
        #try:
        result = self.cursor.execute(sql)
        return self.cursor.fetchall()
        #except Exception as e:
        #    print "Mysql execute error"

    def gettask(self):
        sql = "select id,downpath,filecolumns,split from sk_task"
        result = self.execute(sql)
        count = []
        for line in result:
          if line[2] != None and line[3] != None:
                count.append(line)
        return count 

    def deltask(self, tid):
        sql = "delete from sk_task where id={0}".format(tid)
        result = self.cursor.execute(sql)
        sql2 = "update sk_data set done=1 where id={0}".format(tid)
        result = self.cursor.execute(sql2)
        self.conn.commit()
        print result

    def updatetask(self, data):
        sql = "update task set sche ={0} where id={1}".format(data['sche'],data['sche'])
        result = self.cursor(sql)
        self.conn.commit()
        print result
    
    def getlink(self):
        sql = "select * from sk_data where done = 0"
        result = self.cursor.execute(sql)
        return self.cursor.fetchall()

    def __del__(self):
        self.conn.close()
        self.cursor.close()

def main():
    #DumpFile()
    DownFile()

if __name__ == '__main__':
    main()
