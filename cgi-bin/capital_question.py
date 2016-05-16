def check(xyz):
	q=xyz.lower()
	q=q.split()
	l=len(q)
	i=0
	while i<l:
		if q[i]=="capital":
			j=i
			i=i+1
			j=j+1
			if q[j]=="of":
				j=j+1
			else:
				j=j*1
		else:
			i=i+1
	i=j
	y=''
	while i<l:
		y=y+q[i]+'*'
		i=i+1
	z=y.replace('*',' ')
	k=0
	v=''
	while k<len(z)-1:
		v=v+z[k]
		k=k+1			
	i=0
	while i<=j:		
		if i==j:
			q[j]=v
			i=j+1
			while i<l:
				q[i]=''
				i=i+1
		else:
			i=i+1
	j=j+1		
	u=[''] * j
	w=0
	while w<j:
		u[w]=q[w]
		w=w+1
	return u	
				
