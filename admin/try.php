<?php  
include("../conf.php");
define('DATABASE','signup');
session_start();
$userID=$_SESSION['login_user'];
  $sqldisp = "SELECT * FROM logdata    WHERE userID = '$userID'";	
$resultDisp=mysql_query($db,$sqldisp);

$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$userID=$_POST['user'];
	// $t=date("y/m/d");
	//$searchByDate = $_POST['input_date'];
	$status=$_POST['status'];
	$Agency=$_POST['Agency'];
	$pdesc=$_POST['pdesc'];
	$priorty=$_POST['priorty'];
	$equipID=$_POST['equipID'];
	
		  $sql1 = "UPDATE logdata set status='$status', Agency='$Agency', pID='$equipID', pdesc='$pdesc' where userID='$userID'";
		  $sql2 = "SELECT * FROM equipments WHERE equipid= '$equipID'";
		  $sql4 = "SELECT * FROM logdata    WHERE userID = '$userID'";	//chagned here
	  
	  $result1 = mysqli_query($db, $sql1);
	  if(!$result1){
	  	echo "failed";
	  }
	  $result3 = mysqli_query($db, $sql4);
	  $result4 = mysqli_query($db, $sql2);
	  
	  	 // echo "<table width=\"50%\" border=\"1\" cellspacing=\"10\" align=\"center\" style=\"border: 1px solid black,padding: 4px;\" >";  
					// 		 echo "<th>equipid</th><th>equiptyp</th><th>equipmake</th><th>equipmodl</th><th>location</th><th>enabled</th>";
					// 		while ($row2 = mysqli_fetch_array($result4)){
					// 			echo "<tr height=\"20\" style=\"border: 1px solid black,padding: 4px;\">";
					// 			echo 
					// 			"<td width=\"30\" style=\"border: 1px solid black;\">".$row2["equipid"]."</td>
					// 			<td style=\"border: 1px solid black;\">".$row2["equiptyp"]."</td>
					// 			<td width=\"30\" style=\"border: 1px solid black;\">".$row2["equipmake"]."</td>
					// 			<td width=\"0\" style=\"border: 1px solid black;\">".$row2["equipmodl"]."</td>
					// 			<td width=\"0\" style=\"border: 1px solid black;\">".$row2["location"]."</td>
					// 			<td width=\"0\" style=\"border: 1px solid black;\">".$row2["enabled"]."</td>";
					// 	        echo "</tr>";
					// 		 }
	  
	  $row1 = array();
	  if(!$result3 && !$result1){
	  	die("Database query 3 failed:");
	  // }
	  // echo "<table width=\"50%\" border=\"1\" cellspacing=\"10\" align=\"center\" style=\"border: 1px solid black,padding: 4px;\" >";  
			// 				 echo "<th>Date</th><th>User ID</th><th>Log ID</th><th>Status</th><th>Agency</th><th>P id</th><th>Product Description</th>";
			// 				while ($row1 = mysqli_fetch_array($result3)){
			// 					echo "<tr height=\"20\" style=\"border: 1px solid black,padding: 4px;\">";
			// 					echo 
			// 					"<td width=\"30\" style=\"border: 1px solid black;\">".$row1["t"]."</td>
			// 					<td style=\"border: 1px solid black;\">".$row1["userID"]."</td>
			// 					<td width=\"30\" style=\"border: 1px solid black;\">".$row1["logID"]."</td>
			// 					<td width=\"0\" style=\"border: 1px solid black;\">".$row1["status"]."</td>
			// 					<td width=\"0\" style=\"border: 1px solid black;\">".$row1["Agency"]."</td>
			// 					<td width=\"0\" style=\"border: 1px solid black;\">".$row1["pID"]."</td>
			// 					<td width=\"0\" style=\"border: 1px solid black;\">".$row1["pdesc"]."</td>";

			// 			        echo "</tr>";
			// 				 }


} 
// UPDATE table_name SET id ='".$id."', title = '".$title."',now() WHERE id = '".$id."' "
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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

.display{
	float: left;
}

table{
	position:left;
	left: 35%;
	top:30%;
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
<center><h1>BHILAI STEEL PLANT</h1></center>
<center><h2>Home Page</h2></center>

<ul>
  <li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
  <li><a href="display_Report.php">Display Reports</a></li>
  <li><a href="update_log.php">Update Log</a></li>
  <li><a href="create_LOG.php">Create Log</a></li>
</ul>
<!-- end for nav bar -->

<table>
	<tr><td>
		
	</td></tr>
</table>

<form name="update_log" action="update_log.php" method="POST" >

	<table border="1"> <tr><td>user Id</td>
		<td><?php echo $userID; ?></td>
	</tr>

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
			<td>Priorty</td>
			<td><select value="low" name="priorty">
				<option>low</option>
				<option>medium</option>
				<option>high</option>
			</select></td>
		</tr>
		<tr>
			<td>equipID</td>
			<td><select name="equipID">
				<?php
					$sql5 = "SELECT equipid FROM equipments";
					$result5 = mysqli_query($db, $sql5);
					$row3 = array();
					if(!$result5){
						die("datbase option select query failed");
					}
					while($row3 = mysqli_fetch_array($result5)){
						echo "<option>{$row3["equipid"]}</option>";
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td>problem Description</td>
			<td><input type="text" name="pdesc"></td>
		</tr>
	
			<td colspan="2"><button type="submit" value="submit"> UPDATE</button></td>
		</tr>

	</table>
</form>
</body>
</html>