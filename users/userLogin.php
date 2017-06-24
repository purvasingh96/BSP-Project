<?php
   include("../conf.php");
   define('DATABASE', 'signup');
   $db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
   // session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $username = $_POST['user'];
      $password = $_POST['pwd']; 
      
      $sql = "SELECT * FROM signup WHERE name = '$username' and pwd = '$password'";
      $result = mysqli_query($db,$sql);
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
         // $_SESSION['login_user'] = $username;
         
         header("location: ../homepage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
</head>
<body>
<form method="POST" action="userLogin.php">
   <table border="1" align="center">
      <tr>
         <td>Username</td>
         <td><input type="text" name="user"></td>
      </tr>

      <tr>
         <td>password</td>
         <td><input type="password" name="pwd"></td>
      </tr>
      <tr>
         <td colspan="2" align="center"><button type="submit" name="submit">Login</button></td>
      </tr>
   </table>
</form>
</body>
</html>