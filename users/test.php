<?php 
include("../conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

$sqlcount="SELECT * FROM logdata";
	$r = mysqli_query($db,$sqlcount);
	$count=mysqli_num_rows($r);
	echo $count;
	?>
