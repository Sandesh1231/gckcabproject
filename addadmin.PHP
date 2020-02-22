<?php
session_start();
include('connection.php');
if(isset($_POST['cancel']))
{
header('location:adminpage.php');
}
if(isset($_POST['register']))
{
$username=$_POST['username'];
$contactno1=$_POST['contactno1'];
$contactno2=$_POST['contactno2'];
$email=$_POST['email'];
$password=$_POST['password'];
$query=$conn->query("select * from admin where username='$username'");
$fetch=$query->fetch_array();
$row=$query->num_rows;
 if($row>0)
{
echo '<script type="text/javascript">';
echo 'alert(" USERNAME ALREADY EXISTS ! TRY AGAIN")';
echo '</script>';
}
else
{
$conn->query("insert into admin (username,contactno1,contactno2,email,password) values('$username','$contactno1','$contactno2','$email','$password')")or
die(mysqli_error());
echo '<script type="text/javascript">';
echo 'alert("SIGNUP SUCCESSFUL")';
echo '</script>';
}
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

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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
<body><center>
<br><br><br><br>
<form method="post" autocomplete="off">
  <div class="container">
   <center> <h1>ADD ADMIN</h1></center>
    
    <hr>
    
    <input type="text" placeholder="Enter Username" name="username" required>
  <input type="text" placeholder="Enter Contact Number 1" name="contactno1"  pattern="[0-9]{10}" title="Must contain 10 numbers" required><br>
  <input type="text" placeholder="Enter Contact Number 2" name="contactno2"  pattern="[0-9]{10}" title="Must contain 10 numbers" required><br>
   <input type="email" placeholder="Enter Email" name="email"  title="Should be in the right format" required><br>
  <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain atleast one number and one uppercase and lowercase letter, and exactly 6 characters" required><br>

<hr>
<input type="submit" class="registerbtn" name="register" value="ADD">
<input type="button" style="color:white;" onclick="goBack()" class="cancelbtn" name="cancel" value="CANCEL">
  <script>
function goBack() {
  location.assign("adminpage.php");
}
</script>
  </div>
</form>
</body>
</html>
