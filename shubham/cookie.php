<?php
    $name="mycookie";
	$content="This is cookie";
	setcookie($name,$content,time()-3600);
	header("Location: login.php");	
?>