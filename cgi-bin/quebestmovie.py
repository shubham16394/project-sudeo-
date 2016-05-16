import cgi, cgitb 
cgitb.enable()
l=['1953','1954','1955','1956','1957','1958','1959','1960','1961','1962','1963','1964','1965','1966','1967','1968','1969','1970','1971','1972','1973','1974','1975','1976','1977','1978','1979','1980','1981','1982','1983','1984','1985','1986','1987','1988','1989','1990','1991',
  '1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002', '2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
def match(ques):
	#import capital_question
	#from capital_question import check
	#ques=check(ques)
	#ques=ques.split()
	i=0
	le=0
	
	x=ques.find("best movie")
	y=ques.find("best actor")
	z=ques.find("best actress")
	p=ques.find("best director")
	if x!=-1 or y!=-1 or z!=-1 or p!=-1:
		while i<len(l):
			y=ques.find(l[i])
			if y!=-1:
				return l[i]
			else:
				i=i+1	


		 