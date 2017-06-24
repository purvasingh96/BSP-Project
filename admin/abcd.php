<?php 
include("../conf.php");
define('DATABASE','signup');
session_start();

$userID=$_SESSION['login_user'];
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$log=$_POST["log"];
	$sql2="SELECT * FROM history WHERE log = $log";
	$r = mysqli_query($db,$sql2);
      $count = intval(mysqli_num_rows($r));
      if($count > 1) {
      echo $count+1;}     
      }?>

      <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="abcd.php" name="abcd">
   <table>
      <tr>
         <td>User-Id</td>
         <td><?php echo $userID; ?></td>
      </tr>
      <tr>
      	<td>log-ID</td>
      	<td><input type="log" name="log"></td>
      </tr>
      <tr><td></td>
         <td><button type="submit" name="submit" >ENTER</button></td>
      </tr>
   </table>
</form>
</body>
</html>