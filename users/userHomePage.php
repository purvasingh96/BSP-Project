<!DOCTYPE html>
<html>
<head><style>
	<title>Homepage</title>
</head>
<style>
body {
    margin:0;
    background-color: grey;
 }

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 5;
    width: 100%;
}

li {
    float: left;
}
h1{
    font-size: 50px;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 24px 26px;
    text-decoration: none;
}
img{
   position: relative;
   height: 20%;
   width: 35%;
   left: 35%;
   top:5%;
}
</style>
<body>
<img src="../BSP.jpg">
<center><h1>Home Page</h1></center>


<ul>
  <li><a href="userHomePage.php">Home Page</a></li>
    <li><a href="userCreateLog.php">Create Log</a></li>
    <li><a href="update_log.php">Display logs</a></li>
    <li><a href="changepwd.php">Change Password</a></li>
    <li><a href="../unset.php"> Sign Out </a></li>

</ul>
</body>
</html>