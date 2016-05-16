#!/usr/bin/env python
# -*- coding: UTF-8 -*-

# enable debugging
import cgi, cgitb 
cgitb.enable()

print "Content-Type: text/html;charset=utf-8"
print

x="shubham tiwari is becoming a good developer"
from json import dumps
print """
<!DOCTYPE html>
		<html>
		<head>
		</head>

		<body>
		<div id="st">WHat the fuck</div>
		<input type="button" onclick="fn()"/>
		"""
print"""	<script> 

function fn(){

y=document.getElementById("st").textContent=""" +dumps(x)

print"""

var msg = new SpeechSynthesisUtterance(y);
window.speechSynthesis.speak(msg);
}
</script>
		</body>


		</html>
		"""