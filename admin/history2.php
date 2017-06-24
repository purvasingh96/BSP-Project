<?php  

include("../conf.php");
define('DATABASE','signup');
session_start();

$userID=$_SESSION['login_user'];
$conn= new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$log=$_POST["log"];
$t=date("y/m/d");
$logup=$_POST["logup"];
$sql="SELECT * FROM history WHERE logID=$log";
	$r = mysqli_query($db,$sql);
$count = mysqli_num_rows($r);
 $count=$count+1;
      $sql1="INSERT INTO  history(t,userID,logID,logSerial,pdesc) VALUES ('$t','$userID','$log','$count','$logup')";
      $r2 = mysqli_query($db,$sql1);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="history.php" name="History">
   <table>
      <tr>
         <td>User-Id</td>
         <td><?php echo $userID; ?></td>
      </tr>
      <tr>
      	<td>log-ID</td>
      	<td><input type="text" name="log"></td>
      </tr>
      <tr><td>Log Update</td>
      <td><input type="text" name="logup"></td>
      </tr>
      <tr><td></td>
         <td><button type="submit" name="submit" >ENTER</button></td>
      </tr>
   </table>
</form>
</body>
</html>