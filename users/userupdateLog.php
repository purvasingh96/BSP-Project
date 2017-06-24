<?php  
include("../conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$userID=$_POST['user'];
	// $t=date("y/m/d");
	$status=$_POST['status'];
	$Agency=$_POST['Agency'];
	$prodID=$_POST['pID'];
	$pdesc=$_POST['pdesc'];
	$priorty=$_POST['priorty'];
	$equipID=$_POST['equipID'];
	$equipType=$_POST['equipType'];
	$equipMake=$_POST['equipMake'];
	$equipModel=$_POST['equipModel'];
	$location=$_POST['location'];
	$enabled=$_POST['enabled'];
	
		  $sql="UPDATE logdata SET status='".$status."',Agency='".$Agency."',pID='".$prodID."',pdesc='".$pdesc."',priority='".$priorty."' WHERE userID='".$userID."'";
	  $result = mysqli_query($db,$sql);
if(! $result ) {
               die(mysql_error());
            }
} 
// UPDATE table_name SET id ='".$id."', title = '".$title."',now() WHERE id = '".$id."' "
?>
<!DOCTYPE html>
<html>
<head>	<title>Update</title>
</head>
<!-- style for the nav bar  -->	
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: relative;
    top: 5;
    width: 100%;
}

table{
	position:absolute;
	left: 5%;
	top:60%;
	width: 25%;
	text-align: center;
	font-size: 22px;
	border-spacing: 5px;
}

li {
    float: left;
}
input{
	height: 20px;
	width: 175px;
}
select{
	height: 20px;
	width: 170px;
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


}
</style>
<!-- style for navbar end here -->
<body>
<!-- basic navbar template -->

<center><h1>Home Page</h1></center>


<ul>
  <li><a href="userHomePage.php">Home Page</a></li>
  <li><a href="userDisplayReport.php">Display Reports</a></li>
  <li><a href="userupdateLog.php">Update Log</a></li>
    <li><a href="userCreateLog.php">Create Log</a></li>
</ul>
<!-- end for nav bar -->

<form name="update_log" action="userupdateLog.php" method="POST" >
	<table border="1"> 
		<tr>
			<td>UserID</td>
			<td><input type="text" name="user" required></td>
		</tr>
<!-- 
		<tr>
			<td>LogID</td>
			<td><input type="text" name="logID" required></td>
		</tr> -->


		<tr>
			<td>Status</td>
			<td><select  name="status">
				<option value="I">I</option>
				<option value="P">P</option>
				<option value="C">C</option>
				<option value="X">X</option>
			</select></td>
		</tr>

		<tr>
			<td>Agency</td>
			<td><input type="text" name="Agency"></td>
		</tr>

		<tr>
			<td>ProductID</td>
			<td><input type="text" name="pID"></td>
		</tr>
		<tr>
			<td>Product Description</td>
			<td><input type="text" name="pdesc"></td>
		</tr>

		<tr>
			<td>Priorty</td>
			<td><select value="low" name="priorty">
				<option>low</option>
				<option>medium</option>
				<option>high</option>
			</select></td>
		</tr>

		<tr>
			<td>equipID</td>
			<td><input type="text" name="equipID"></td>
		</tr>
		<tr>
			<td>equipType</td>
			<td><input type="text" name="equipType"></td>
		</tr>
		<tr><td>equipMake</td>
		<td><input type="text" name="equipMake"></td></tr>
		<tr><td>equip Model</td>
		<td><input type="text" name="equipModel"></td></tr>
		<tr><td>location</td>
		<td><input type="text" name="location"></td></tr>
		<tr><td>enabled</td>
		<td><input type="text" name="enabled"></td></tr>
		<tr>
		<tr>
			<td colspan="2"><button type="submit" value="submit"> UPDATE</button></td>
		</tr>

	</table>
</form>
</body>
</html>