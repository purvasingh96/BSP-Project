<?php  
include("../conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

$append="UPDATE history SET activity=CONCAT(activity,' :you')";
$r = mysqli_query($db,$append);

?>