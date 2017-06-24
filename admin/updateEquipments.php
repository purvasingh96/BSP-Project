<?php  
include("../conf.php");
define('DATABASE','signup');
session_start();
$userID=$_SESSION['login_user'];
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$equipID=$_POST['equipID'];
$equiptype=$_POST['equiptype'];
$equipmake=$_POST['equipmake'];
$equipmodl=$_POST['equipmodl'];
$location=$_POST['location'];
$enabled=$_POST['enabled'];

		  $sql1 = "UPDATE equipments set equiptyp='$equiptype', equipmake='$equipmake', equipmodl='$equipmodl', location='$location' where equipID='$equipID'";

	  $result1 = mysqli_query($db, $sql1);
	  if(!$result1){
	  	echo "failed";
	  }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="updateEquipments.php" method="POST">
	<table border="1"> 
	<!-- <tr><td>User Id</td>
	<td><?php echo $userID; ?></td></tr>
	 --><tr><td>equipID</td>
		<td><input type="text" name="equipID"></td>
		</tr>
		
		<tr><td>equip type
		</td>
		<td><input type="text" name="equiptype"></td>
		</tr>
		<tr><td>equipmake</td>
		<td><input type="text" name="equipmake"></td></tr>
		<tr><td>equipmodl</td>
		<td><input type="text" name="equipmodl"></td></tr>
		<tr><td>location</td>
		<td><input type="text" name="location"></td></tr>
		<tr><td>enabled:</td>
		<td><input type="text" name="enabled"></td></tr>
			<td colspan="2"><button type="submit" value="submit"> UPDATE equipments </button></td>
		</tr>

	</table>
	</form>	</body>
</html>