<html>
<head>

</head>


<body>
<div style="height:200px;width:100px;overflow:scroll;border:1px solid black;position:relative;top:100px;left:300px">
<?php 
$host="localhost";
	$user="root";
	$password="";
	$db="studenttable";
	mysql_connect($host,$user,$password);
	mysql_select_db($db);
	$sql="select * from scommenttable";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
        {
			echo $row[0]."<br/>"."<hr style='width:100px;position:relative;left:-200px;border:1px solid red'/>";
			echo $row[1]."<br/>"."<hr style='width:100px;position:relative;left:-200px;border:1px solid red'/>";
			}

?></div>
</body>