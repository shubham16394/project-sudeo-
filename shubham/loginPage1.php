<html>
<head>
<title>Untitled Document</title>
<?php
	session_start();
	if(isset($_SESSION["uname"])){
		header("Location: Homepage1.php");
	}
	if(isset($_SESSION["error"])){
		echo "Not Valid";
	}

?>
</head>
<body>
<form name="form1" method="post" action="LoginValid1.php">
<table width="443" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" align="center">Login Page</td>
  </tr>
  <tr>
    <td width="156">User Name</td>
    <td width="281">
      <input type="text" name="txt" id="txt">
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit"></td>
  </tr>
</table>
</form>
</body>
</html>
