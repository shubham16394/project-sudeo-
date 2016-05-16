<html>
<head>
<title>Registration confirmed</title>
<link rel="icon" 
      type="image/png" 
      href="gamesfolder/assassin_s_creed_unity_icon_v1__256x256__by_youknowwho77-d81o1aw.png">
<style>
.sign{height:40px;width:100px;border:2px solid #06F;position:relative;top:20px;left:1180px;border-radius:20px;background:white;text-align:center;font-family:Microsoft Sans Serif;color:#06F;font-size:18px;line-height:40px}
</style>
</head>
<?php
$host="localhost";
	$user="root";
	$password="shubham";
	$db="awesomegames";
	$conn=mysqli_connect($host,$user,$password,$db);
	//mysql_select_db($db);
	$uname=$_POST["fname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$age=$_POST["age"];
    $sql="insert into signup values('$uname','$email','$pass','$age')";
	mysqli_query($conn,$sql);
	
?>
<body bgcolor="#000000">
<div class="sign"><a href="login.php" style="text-decoration:none;color:#06F">Log In</a></div>
<div style="height:100px;width:1000px;position:relative;top:100px;left:180px"><h2 style="color:white;font-family:Microsoft Sans Serif">You are successfully registered. Now Log In with your registered Email Id and Password.</h2></div>

</body>
</html>