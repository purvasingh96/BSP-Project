<?php  
include("../conf.php");
define('DATABASE','signup');
$remarks=rand(1000,2000);
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$username=$_POST['user'];
	$password=$_POST['pwd'];
	$email=$_POST['email'];
	$type=$_POST['type'];
	$confirmPassword=$_POST['confirmpass'];
	  $sql="INSERT INTO  signup(name,pwd,email,remarks,type) VALUES ('$username', '$password', '$email','$remarks','$type')";
	  $result = mysqli_query($db,$sql);
	  if($result){
	  	header("location: homepage.php");
	  }
}
?>
<!DOCTYPE html>
<html>
<head><style>

	<title>Sign Up</title>
	<script type="text/javascript">
		function validateform(){  
			var name=document.Sign_UP.user.value;  
			var password=document.Sign_UP.pwd.value; 
			var repass = document.Sign_UP.confirmpass.value;
			//var re-pass = document.Sign_UP.repassword.value; 
		if(password==repass){  
			return true;  
			}  
			else{  
			alert("password must be same!");  
			return false;  
}
 
} 
	</script>
</head>
/*<!-- style for the nav bar  -->*/
<style>
body {margin:0;
 background-color: grey;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 5;
    width: 100%;
}

table{
   position:absolute;
   left: 5%;
   top:48%;
   background-color: #f6f6f6;
   width: 25%;
   text-align: center;
   font-size: 26px;
   border-spacing: 1px;
   padding: 2px;
}



li {
    float: left;
}
input{
	height: 22px;
	width: 175px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 24px 26px;
    text-decoration: none;
}
button{
	height: 20px;
	width: 150px;
	font-size: 14px;


}img{
   position: relative;
   height: 20%;
   width: 35%;
   left: 35%;
   top:5%;
}
</style>
<!-- style for navbar end here -->
<body>
<!-- basic navbar template -->
<img src="../BSP.jpg">
<center><h1>Sign Up</h1></center>


<ul>
  <li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
    <li><a href="create_LOG.php">Create Log</a></li>
       <li><a href="changePWD.php">Change Password</a></li>
    <li><a href="../unset.php"> Sign Out </a></li>
   
</ul>
<!-- end for nav bar -->

<form name="Sign_UP" onsubmit="return validateform()" method="POST" >
	<table border="1"> 
		<tr>
			<td>Username</td>
			<td><input type="text" name="user" required></td>
			
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="pwd" required></td>
		</tr>

		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name= "confirmpass" required></td>
		</tr>

		<tr>
			<td>Email-Id</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr><td>
			Type of User
		</td>
		<td><select value="user" name="type">
				<option>User</option>
				<option>Admin</option>
		</option></td></tr>

		<tr>
			<td colspan="2"><button type="submit" value="submit"> Sign Up</button></td>
		</tr>
	</table>
</form>
</body>
</html>