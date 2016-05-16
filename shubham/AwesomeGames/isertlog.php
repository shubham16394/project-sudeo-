<?php
session_start();
$host="localhost";
	$user="root";
	$password="shubham";
	$db="awesomegames";
	$conn= new mysqli($host,$user,$password,$db);
	echo $conn->host_info . "\n";
	//mysql_select_db($db);
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$sql="select * from signup where email='$email' and pass='$pass'";
	$result=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_assoc($result)){
		$_SESSION["myname"]=$row["uname"];
		header("Location: AwesomeGames.php");}
	//else{ $_SESSION["error"]="Email or Password is not valid";
		 // header("Location: login.php");
		//}
	
	?>