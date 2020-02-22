<?php
session_start();
include('connection.php'); 
if(isset($_POST['addadmin']))
{
header("location:addadmin.php");
}
if(isset($_POST['res']))
{
header("location:resview.php");
}
if(isset($_POST['logout']))
{
header("location:logout.php");
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
      url('bg5.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
</style>
</head>

<body>
<form name="adminpage" method="post">
<font face="georgia" size="4" >
<table align="center" height="80%" width="30%" >
<caption color=><h1><b><font face="Castellar" size="7">ADMIN</font></b></h1></caption>
<tr><td><div class="dropdown">

<tr><td><input type="submit" class="btn view" name="addadmin"  style="width:500px;" value="ADD ADMIN"></td></tr>

<tr><td><div class="dropdown">
  <button class="dropbtn" style=" width:500px; height: 43px;">DELETE USER</button>
  <div class="dropdown-content">
    <a href="deleteadmin.php"><center>ADMIN</center></a>
    <a href="deletedriver.php"><center>DRIVER</center></a>
    <a href="deletecustomer.php"><center>CLIENT</center></a>
  </div>
</div></td</tr>

<tr><td><div class="dropdown">
  <button class="dropbtn" style=" width:500px; height: 43px;">VIEW USERLIST</button>
  <div class="dropdown-content">
    <a href="adminlist.php"><center>ADMIN</center></a>
    <a href="driverlist.php"><center>DRIVER</center></a>
    <a href="customerlist.php"><center>CLIENT</center></a>
  </div>
</div></td</tr>
<tr><td><div class="dropdown">
  <button class="dropbtn" style=" width:500px; height: 43px;">LOCATION</button>
  <div class="dropdown-content">
    <a href="locadd.php"><center>ADD</center></a>
    <a href="locview.php"><center>VIEW</center></a>
  </div>
</div></td</tr>
<tr><td><input type="submit" class="btn view" name="res"style="width:500px;" value="RESERVATION"></td></tr>

<tr><td><input type="submit" class="btn view" name="logout"  style="width:500px;" value="LOGOUT"></td></tr>

</table>
</form>
</body>
</html>