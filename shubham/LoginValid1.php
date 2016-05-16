<?php
	session_start();
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
		$_SESSION["uname"]=$row["u_name"];
		header("Location: Homepage1.php");
	}else{
		$_SESSION["error"]="not Valid";
		header("Location: loginPage1.php");
	}
?>