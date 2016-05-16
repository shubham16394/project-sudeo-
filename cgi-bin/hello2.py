#!/usr/bin/env python
# -*- coding: UTF-8 -*-

# enable debugging
import cgitb
cgitb.enable()
import nltk
import MySQLdb
from nltk.corpus import brown
y="this is text"
x=brown.categories()
print "Content-Type: text/plain;charset=utf-8"
print

print "<H1>Hello World!</H1>"
print y
for word in x:
	print word,