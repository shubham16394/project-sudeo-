<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="9to11Class";
	mysql_connect($host,$user,$password);
	mysql_select_db($db);
	$name=$_POST["txt"];
	$pass=$_POST["pass"];
	$sql="select * from abc where uid=$name and u_Password=$pass";
	$result=mysql_query($sql);
	if($row=mysql_fetch_assoc($result)){
		header("Location: Homepage.php?name=".$row["u_name"]);
	}else{
		header("Location: loginPage.php?valid=NotValid");
	}
?>