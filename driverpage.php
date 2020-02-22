<?php
session_start();
include('connection.php'); 
if(isset($_POST['logout']))
{
header("location:logout.php");
}
if(isset($_POST['service']))
{
header("location:driverservice.php");
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.btn {
  font-size: 30px;
  font-weight: bold;
  font-style: Bernard MT;
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 30px ; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
}

.view {background-color: rgba(0,0,0,0)}
.view:hover {background-color: rgba(128, 128, 128,0.5);}

body {
      background-image:
      url('aaaa.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
</style>
</head>

<body>
<form name="adminpage" method="post">
<font face="georgia" size="4" >
<table align="right" height="80%" width="10%" >
<font  face="Bahnschrift" size="10" color="#ff9900"> 
<img src="logo.png" height="5%" width="3%" align="center">
<b>YUGENKSD.COM</b>
</font>
<tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td><input type="submit" class="btn view" name="addadmin"  style="width:400px;" value="PROFILE"></td></tr>
<tr><td><input type="submit" class="btn view" name="service" style="width:400px;" value="SERVICE"></td></tr>
<tr><td><input type="submit" class="btn view" name="res" style="width:400px;" value="WALLET"></td></tr>
<tr><td><input type="submit" class="btn view" name="logout" style="width:400px;" value="LOGOUT"></td></tr>

</table>
</form>
</body>
</html>