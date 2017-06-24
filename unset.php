<?php session_start();?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<?php 
unset($_SESSION['login_user']);

	header("location:LoginPage.php");
?>

</body>
</html>