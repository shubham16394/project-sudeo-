import cgi, cgitb 
cgitb.enable()
l=['india','pakistan','bhutan','paraguay','nepal','afghanistan','albania','algeria','andorra','angola','argentina','armenia','australia','austria','azerbaijan','bahamas','bahrain','bangladesh','barbados','belarus','belgium','belize','benin','botswana','brazil','brunei','bulgaria','burundi','cambodia','canada','chad','chile','china','colombia',
'comoros','congo','croatia','cuba','cyprus','denmark','djibouti','dominica','ecuador','egypt','eritera','estonia','ethiopia','fiji','finland','france','gabon','gambia','georgia','germany','ghana','greece','grenada','guatemala','guinea','guyana','haiti','honduras','hungary','iceland','indonesia','iran','iraq','ireland','israel','italy','jamaica','japan','jordan','kazakhstan','kenya','kiribati','kosovo','kuwait',
'kyrgyzstan','laos','latvia','lebanon','lesotho','liberia','libya','liechtenstein','lithuania','luxembourg','macedonia','madagascar','malawi','malaysia','maldives','mali','malta','mauritania','mauritius','mexico','micronesia','moldova','monaco','mongolia','montenegro','morocco','mozambique','myanmar','namibia','nauru','netherlands','nicaragua','niger','nigeria','norway','oman','palau','palestine','panama','paraguay','peru','philippines','poland',
'portugal','qatar','romania','russia','rwanda','samoa','senegal','serbia','seychelles','singapore','slovakia','slovenia','somalia','spain','sudan','suriname','swaziland','switzerland','syria','taiwan','tajikistan','tanzania','thailand','timor-leste','togo','tonga','tunisia','turkey','turkmenistan','tuvalu','uganda','ukraine','uruguay','uzbekistan','vanuatu','venezuela',
'vietnam','yemen','zambia','zimbabwe','lybia','greenland','south africa','south sudan','solomon islands','saudi arabia','san marino','saint lucia','equatorial guinea','el salvador','dominican republic','czech republic','cote dlvoire','costa rica','sri lanka','united states of america','united kingdom','antigua and barbuda','bolivia','bosnia and herzegovina','burkina faso',
'cabo verde','central african republic','marshall islands','new zealand','north korea','papua new guinea','south korea','vatican city','united arab emirates','trinidad and tobago']
def match(ques):
	#import capital_question
	#from capital_question import check
	#ques=check(ques)
	#ques=ques.split()
	i=0
	le=0
	
	x=ques.find("pm")
	z=ques.find("prime minister")
	p=ques.find("capital")
	q=ques.find("president")
	if x!=-1 or z!=-1 or p!=-1 or q!=-1:
		while i<len(l):
			y=ques.find(l[i])
			if y!=-1:
				return l[i]
			else:
				i=i+1	


		