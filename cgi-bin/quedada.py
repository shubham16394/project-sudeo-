import cgi, cgitb 
cgitb.enable()
l=['1969','1970','1971','1972','1973','1974','1975','1976','1977','1978','1979','1980','1981','1982','1983','1984','1985','1986','1987','1988','1989','1990','1991',
  '1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002', '2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
def match(ques):
	#import capital_question
	#from capital_question import check
	#ques=check(ques)
	#ques=ques.split()
	i=0
	le=0
	
	x=ques.find("dsfa")
	z=ques.find("dada saheb falke award")
	y=ques.find("dada saheb phalke award")
	p=ques.find("dadasaheb phalke award")
	if x!=-1 or z!=-1 or y!=-1 or p!=-1:
		while i<len(l):
			y=ques.find(l[i])
			if y!=-1:
				return l[i]
			else:
				i=i+1	


		