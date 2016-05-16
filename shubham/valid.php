<?php
session_start();
$host="localhost";
	$user="root";
	$password="";
	$db="studenttable";
	mysql_connect($host,$user,$password);
	mysql_select_db($db);
	$name=$_GET["uname"];
	$pass=$_GET["pass"];
	$sql="select * from stable where sname='$name' and spass='$pass'";
	$result=mysql_query($sql);
	if($row=mysql_fetch_assoc($result)){
	$_SESSION["uname"]=$row["sname"];
	echo $_SESSION["uname"];
	
	
	
	}
	?>