<?php
session_start();
include('connection.php');
if(isset($_POST['driverlogin']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$query=$conn->query("select * from driver where username='$uname' and password='$password' and status=1");
$_SESSION['name']=$uname;
$fetch=$query->fetch_array();
$row=$query->num_rows;
if($row>0)
{
header("location:driverpage.php");
}
else
{
echo '<script type="text/javascript">';
echo 'alert("ACCOUNT DOES NOT EXIST")';
echo '</script>';
}
}

if(isset($_POST['userlogin']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$query=$conn->query("select * from customer where username='$uname' and password='$password'");
$_SESSION['name']=$uname;
$fetch=$query->fetch_array();
$row=$query->num_rows;
if($row>0)
{
header("location:sample.html");
}
else
{
echo '<script type="text/javascript">';
echo 'alert("ACCOUNT DOES NOT EXIST")';
echo '</script>';
}
}


?>




<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: .valid {
  color: green;
}
}


.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&Xopf;";
}


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}



.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #275929;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: 65px;
  height: 43px;
  padding: 10px 18px;
  background-color: #f44336;
}




.container {
  padding-left:20px;
  padding-right:20px;
  padding-top:20px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }

}

.loginbutton {
  background-color: #275929;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 49%;
}

.loginbutton:hover {
  opacity: 0.8;
}

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

<table  style="background-color:rgba(0,0,0,0)" align="center">
<tr><td>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.html">About Us</a>
  <a href="contactus.html">Contact Us</a>
 <a href="admin.php">Admin</a>
</div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span>

<font  face="Bahnschrift" size="10" color="#ff9900"> 
<img src="logo.png" height="2%" width="3.5%" align="center">
<b>YUGENKSD.COM</b>
</font>
</td></tr></table>
<p></p><br>
<table style="background-color:rgba(0,0,0,0)" align="center" height="80%" width="20%" >
<tr></tr>
<tr><td><b><font color="#000" size="4"><center>want to book?</center></font></b><br>
<button type=button onclick="search()"  style="width:300px;">SEARCH</button></td></tr>

<tr><td><b><font color="#000" size="4"><center>New here?</center></b><br></font>
<button onclick="signup()" style="width:300px;">SIGN UP</button></td></tr>

<tr><td><b><font color="#000" size="4"><center>Already have an account?</center></font></b><br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:300px;">LOGIN</button></td></tr>

<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr></table>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" method="post" autocomplete="off">
 
    <div class="container">

      <input type="text" placeholder="Enter Username" name="username" required></center><br>

      <input type="password" placeholder="Enter Password" name="password"  required></center><br>
 
   <center>  <input type="submit" class="loginbutton" name="driverlogin" value="DRIVER LOGIN">&nbsp;<input type="submit" class="loginbutton" name="userlogin" value="USER LOGIN"><br>
 </center> 
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">&Xopf;</button>
      <span class="psw">Forgot <a href="changepass.php">password?</a></span>
    </div>
  </form>
</div>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid"><b>6 characters</b></p>
</div>

<script>
// Get the modal
var modal1 = document.getElementById('id01');
 
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  }else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  } 

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  }else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length == 6) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function search() {
  location.assign("search.php");
}
function signup() {
  location.assign("signup.php");
}
</script>

</body>
</html>
