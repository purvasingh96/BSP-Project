<?php
session_start();
$userID=$_SESSION['login_user']; 
$emailmsg=$userID+" hello"+"<br>";
echo $emailmsg;
?>