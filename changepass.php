<?php
session_start();
include('connection.php'); 
if(isset($_POST['user']))
{
header("location:userchange.php");
}
if(isset($_POST['driver']))
{
header("location:driverchange.php");
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.dropbtn {
  background-color: #00802b;
  color: white;
  padding: 16px;
  font-size: 13px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
 width: 500px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:#ccccb3}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#004d1a;}



.btn {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
}

.view {background-color: #00802b;} /* Green */
.view:hover {background-color: #004d1a;}

body {
      background-image:
      url('image.png');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
</style>
</head>

<body>
<form name="adminpage" method="post">
<font face="georgia" size="4" >
<table align="center" height="30%" width="30%" >
<caption color=><h1><b><font face="Constantia" size="7" color="#ffffff">CHANGE PASSWORD</font></b></h1></caption>
<tr><td><div class="dropdown">

<tr><td><input type="submit" class="btn view" name="user"  style="width:500px;" value="USER"></td></tr>

<tr><td><input type="submit" class="btn view" name="driver"style="width:500px;" value="DRIVER"></td></tr>

</table>
</form>
</body>
</html>