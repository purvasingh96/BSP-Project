<?php
   include("conf.php");
   define('DATABASE', 'signup');
   $db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $username = $_POST['user'];
      $password = $_POST['pwd']; 
      $userID=$_POST['userID'];
      $sql = "SELECT * FROM signup WHERE name = '$username' and remarks=$userID and pwd = '$password'and type='User'";
      $sql2="SELECT * FROM signup WHERE name = '$username' and remarks=$userID and  pwd = '$password'and type='Admin'";
      $result = mysqli_query($db,$sql);
      $result2=mysqli_query($db,$sql2);
      $count = mysqli_num_rows($result);
      $count2=mysqli_num_rows($result2);
        $_SESSION['login_user'] = $userID;
      if($count == 1) {
    
         
         header("location: users/userHomePage.php");}
         elseif ($count2==1) {
            header("location: admin/homepage.php");
         }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
</head>
<!--   <script type = "text/javascript">
         
            function WriteCookie()
            {
               if( document.loginForm.user.value == "" ){
                  alert("Enter some value!");
                  return;
               }
               cookievalue= escape(document.loginForm.user.value) + ";";
               document.cookie="name=" + cookievalue;
            }
         
      </script> -->
      <style type="text/css">
        
table{
   position:absolute;
   left: 5%;
   top:35%;
   background-color: #f6f6f6;
   width: 25%;
   text-align: center;
   font-size: 26px;
   border-spacing: 1px;
   padding: 2px;
}
input{
   height: 24px;
   width: 200px;
}button{
   height: 20px;
   width: 200px;
   font-size: 14px;
}
img{
   position: absolute;
   height: 30%;
   width: 45%;
   left: 45%;
   top:30%;
}
body{
   background-color: grey;
}
      </style>
<body>
<form method="POST" action="LoginPage.php" name="loginForm">
   <table>
      <tr>
         <td>Username</td>
         <td><input type="text" name="user"></td>
      </tr>
      <tr>
         <td>User-Id</td>
         <td><input type="text" name="userID"></td>
      </tr>
      <tr>
         <td>Password</td>
         <td><input type="password" name="pwd"></td>
      </tr>
      <tr><td></td>
         <td><button type="submit" name="submit" >Login</button></td>
      </tr>
   </table>
</form>
<img src="BSP.jpg">
</body>
</html>