<?php
session_start();
include('connection.php');
if(isset($_POST['iddelete']))
{
$customerid=$_POST['customerid'];
$conn->query("delete from customer where custid='$customerid'")or
die(mysqli_error());
}
if(isset($_POST['namedelete']))
{
$username=$_POST['username'];
$conn->query("delete from customer where username='$username'")or
die(mysqli_error());
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}
* {
  box-sizing: border-box;
}
/* Add padding to containers */
.container {
  padding: 16px;
  width: 50%;
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;  
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
.cancelbtn {
  width: 65px;
  height: 43px;
  padding: 10px 18px;
  background-color: #f44336;
}
  .cancelbtn {
     width: 100%;
  }
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
<center>
<br><br><br><br><br><br>
<form method="post" autocomplete="off">
  <div class="container">
   <center> <h1>DELETE CLIENT</h1></center> 
    <hr>
 <input type="text" placeholder="Enter CustomerID" name="customerid" >
<input type="submit" class="registerbtn" name="iddelete" value="DELETE">
<br><br><br>
 <input type="text" placeholder="Enter Username" name="username">
<input type="submit" class="registerbtn" name="namedelete" value="DELETE"><br><br>
<input type="button" style="color:white;" onclick="goBack()" class="cancelbtn" name="cancel" value="CANCEL">
  <script>
function goBack() {
  location.assign("adminpage.php");
}
</script>  
</div>
 </form>
</center>
</body>
</html>