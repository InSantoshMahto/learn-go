<!DOCTYPE html>
<html>
<head>
	<title>password</title>
</head>
<body>
<div align="center">
	<form>
		<input type="password" name="password">
		<input type="submit" name="submit" generate password>
	</form>
</div>
</body>
</html>
<?php
extract($_REQUEST);
if (isset($submit)) 
{
	$newPassword=base64_encode($password);
	echo "$newPassword<br>";
}
?>