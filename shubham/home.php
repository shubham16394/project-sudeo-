<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<h1>WelCome <?php 

	
if(isset($_COOKIE["mycookie"]))
{
	}	
else
{
	header("Location: login.php");

}



echo $myname ?> </h1>
<form  method="get">
<input type="submit"  value="Logout" name="sub" />
</form>
<?php

if (isset($_GET["sub"]))
{
	header("Location: cookie.php");
	
	}

	
?>


</body>
</html>