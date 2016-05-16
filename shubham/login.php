<!doctype html>
<html>
<head>
<?php if(isset($_GET["valid"])){?>
<script>
alert("User name Or Password is Wrong...");
</script>
<?php }
?>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="get" action="valid.php">
<input type="text" name="uname"/>
<input type="password" name="pass"/>
<input type="submit" name="search"/>
</form>
<?php
if(isset($_COOKIE["mycookie"]))
{   
	header("Location: Home.php");}

?>


</body>
</html>