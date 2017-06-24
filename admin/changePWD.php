<?php  
include("../conf.php");
define('DATABASE','signup');
session_start();
$userID=$_SESSION['login_user'];
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $userID=$_POST['userID'];
    $password=$_POST['password'];

          $sql="UPDATE signup SET pwd='".$password."'WHERE remarks='".$userID."'";
      $result = mysqli_query($db,$sql);
if(! $result ) {
               die(mysql_error());
            }


}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

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
   width: 35%;
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
<body>
<img src="../BSP.jpg">
<center><h1>Change Password</h1></center>

<ul>
<li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
    <li><a href="create_LOG.php">Create Log</a></li>
       <li><a href="changePWD.php">Change Password</a></li>
    <li><a href="../unset.php"> Sign Out </a></li>
   
</ul>

<form name="changePassword" action="changePWD.php" method="POST">
<table>
    <tr><td>user id</td>
    <td><?php echo $userID; ?></td></tr>
    <tr><td>enter new password</td>
    <td><input type="password" name="password"></td></tr>
    <tr><td><input type="submit" name="submit"></td></tr>
</table>
    
</form>
</body>
</html>