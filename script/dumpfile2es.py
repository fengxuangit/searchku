#!/usr/bin/python
# encoding=utf-8
import sys
import os
import time
from elasticsearch import Elasticsearch
from optparse import OptionParser
from ConfigParser import ConfigParser

configfile = './conf/dump.conf'
#读取配置文件
class ReadConfig:

    @staticmethod 
    def getconfig(section, key):
        config = ConfigParser()
        config.read(configfile)
        return config.get(section, key) 

class Pyes:
    conn = None
    def __init__(self):
        eshost = ReadConfig.getconfig("elasticsearch", "ESHOST")
        self.conn = Elasticsearch(eshost)

    def index(self, data):
        result = self.conn.index(index="searchku", doc_type="info", body={
                    'username':data['username'] ,
                    'password':data['password'] ,
                    'email':data['email'],
                    'qq':data['qq'] ,
                    'other':data['other'] ,
                    'time': int(time.time())
                })
        if result['_shards']['successful'] ==1:
            print "[*] index es ok!"
        else:
            print "[*] something error! please check!"
            sys.exit()

class analysis:
    datatype = {}
    def __init__(self):
        for line in options.column.split(','):
            self.datatype[line] = []
        self.analysisfile(options.file)
        self.data2es()
    #核心函数
    def analysisfile(self, files):
        with open(files, 'rb') as f:
            for fs in f.readlines():#.split(options.splits):
                i = 0
                other = ""
                #将文件以指定的列名分开，注意如果是other的话，需要多个分隔
                for line in options.column.split(','):
                    if line != 'other':
                        self.datatype[line].append(fs.split(',')[i])
                    else:
                        other += fs.split(',')[i].replace("\n","") + " "
                    i += 1
                self.datatype['other'].append(other)
        print "[!] analysis file ok!"

    def data2es(self):
        es = Pyes()
        length = len(self.datatype['username'])   
        data = {}
        #固定列名存入es,如果没有的话留空
        for num in xrange(length):
            data['username'] =  self.datatype['username'][num] if self.datatype.has_key('username') else ''
            data['password'] =  self.datatype['password'][num] if self.datatype.has_key('password') else ''
            data['email'] =  self.datatype['email'][num] if self.datatype.has_key('email') else ''
            data['qq'] =  self.datatype['qq'][num] if self.datatype.has_key('qq') else ''
            data['other'] =  self.datatype['other'][num] if self.datatype.has_key('other') else ''
            es.index(data)

def usage():
    parser = OptionParser()
    parser.add_option("-f", "--file", dest="file",  
                      help="main file")
    parser.add_option("-c", "--column", dest="column",  
                      help="the column to sign")
    parser.add_option("-s", "--split", dest="splits",  
                      help="the split character")
    global options
    (options, args) = parser.parse_args()
    if not options.file:
        parser.print_help()
        sys.exit()

def main():
    usage()
    analysis() 

if __name__ == '__main__':
#/Users/apple/Downloads/people_info.txt
    main()
