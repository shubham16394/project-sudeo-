#!/usr/bin/env python
# -*- coding: UTF-8 -*-
import cgi,cgitb
cgitb.enable()

print "Content-Type: text/html;charset=utf-8"
print

import pyttsx
engine = pyttsx.init()
engine.say('Greetings!')
engine.say('How are you today?')
engine.runAndWait()