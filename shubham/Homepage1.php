<html>
<head>
<title>Untitled Document</title>
</head>
<?php session_start();
	if(isset($_POST["logOut"])){
		session_destroy();
		header("Location: loginPage1.php");
	}
	/*Here we are using !isset to check whether value is entered in login or not */
	if(!isset($_SESSION["uname"])){
		header("Location: loginPage1.php");
	}
?>

<body>
<h1>WelCome <?php echo $_SESSION["uname"];?> </h1>
<form action="" method="post">
<input type="submit" name="logOut" Value="LogOut">
</form>
</body>
</html>