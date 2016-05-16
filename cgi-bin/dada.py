#!/usr/bin/env python
# -*- coding: UTF-8 -*-

# enable debugging
import cgi, cgitb 
cgitb.enable()

form = cgi.FieldStorage()

qu = form.getvalue('question')
from json import dumps
import nltk
from nltk import load_parser
cp=load_parser('grammars/book_grammars/cinema1.fcfg')
query=qu.lower()
#import capital_question
#from capital_question import check
#query=check(query)
import quedada 
from quedada import match
w=match(query)
if w==None:
	print """
		<script type="text/javascript">
		alert("Entered Question is wrong, Please enter a valid Question");
		window.location="../shubham/AwesomeGames/QAhtml/dada_saheb.html"
		</script>
	"""
	

else:
	trees = list(cp.parse(['which','person','was','winner','of','dada_saheb_falke_award','in',w]))
	answer = trees[0].label()['SEM']
	answer = [s for s in answer if s]
	q=' '.join(answer)
	import MySQLdb
	db=MySQLdb.connect(host="localhost",
					user="root",
					passwd="shubham",
					db="nation")
	cur=db.cursor()
	cur.execute(q)
	x=cur.fetchone()
	y=x[0]
	y=y.upper()
	kk="The winner of dada saheb falke award in "+ w +" was " + y
	db.close()
	

	print "Content-Type: text/html;charset=utf-8"
	print

	print """<html>
<head>
<title>QAEngine</title>
<style>
.main{max-height: 600px;max-width: 1300px;border: 2px solid green:margin:0 auto}
.mid{height: 650px;width: 1280px;border: 2px solid black; margin:0 auto;margin-top:0;margin-left:0}
.mid2{height:200px;width:800px;margin:0 auto;border:5px solid #06F;position:relative; top:-400px;border-radius:20px;background:white }
.mid3{height:100px;width:700px;margin:0 auto;border:2px solid white;position:relative;top:50px}
#pri{color:white;position:relative;top:15px;margin:0 auto;color:#06F;font-size:50px;text-align:center}
.home{height: 40px;width: 100px;border: 2px solid white;font-size: 30px;border-radius: 20px ;color: #06F;background-color: white;margin: 0 auto;text-align: center;font-family:Microsoft Sans;border-color: #06F;position: relative;top:-580px}
</style>


</head>
<body style="margin:0;background:black" onload="call()">
<div class="main"><img src="../shubham/AwesomeGames/QAhtml/337442-film-700.jpg" style="height:650px;width:1365px">

<div class="home"><a  href="../shubham/AwesomeGames/AwesomeGames.php" style="text-decoration:none;color:#06F">Home</a></div>
<div class="mid2">
<div class="mid3" onmouseover="call()">
"""
print """<h1 id="pri">ANSWER : %s</h1>""" % (y)
print """<div id="tts" style="display:None"></div>"""
print """</div>
</div>

</div>

<script>
function call(){
 x=document.getElementById("tts").textContent=""" +dumps(kk)

print"""
	var msg = new SpeechSynthesisUtterance(x);
    window.speechSynthesis.speak(msg);
}
</script>
</body>

</html>
	""" 
	


