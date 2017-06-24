<?php  
include("../conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $email=$_POST['email'];
  $user=$_POST['user'];
      $sql="DELETE FROM signup WHERE email='$email' and name='$user'";
    $result = mysqli_query($db,$sql);
}
?>
 <!DOCTYPE html>
 <html> 
 <head>
  <title>Delete User</title>
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
 <body>
 <img src="../BSP.jpg">
 
<center><h2>Delete User</h2></center>


<ul>

  <li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
    <li><a href="create_LOG.php">Create Log</a></li>
       <li><a href="changePWD.php">Change Password</a></li>
    <li><a href="../unset.php"> Sign Out </a></li></ul>


 <form action="deleteUser.php" method="POST">
  <TABLE border="1" align="center">
    <tr>
     <td>Username</td>
     <td><input type="text" name="user"></td> 
    </tr>
    <tr>
    <td>email-ID</td>
    <td><input type="text" name="email"></td>
    </tr>
    <tr><td colspan="2" align="center">
      <button type="submit" name="submit">delete User</button>
    </td></tr>
  </TABLE> 
 </form>
 </body>
 </html>