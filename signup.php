<?php
session_start();
include('connection.php');
if(isset($_POST['dsignup']))
{
$username=$_POST['username'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contactno=$_POST['contactnumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$aadhar=$_POST['aadhar'];
$reference=$_POST['reference'];
$vmodel=$_POST['vmodel'];
$licenseno=$_POST['licenseno'];
$seatno=$_POST['seatno'];
$ac=$_POST['ac'];
$standname=$_POST['standname'];
$location=$_POST['location'];
$locality=$_POST['locality'];
$fname=$_POST['fname'];
$accountno=$_POST['accountno'];
$ifsc=$_POST['ifsc'];
$query=mysqli_query($conn,"select * from driver where username='$username'");
$fetch=$query->fetch_array();
$row=$query->num_rows;
if($row>0)
{
echo '<script type="text/javascript">';
echo 'alert<"USERNAME ALREADY EXIST!!">';
echo '</script>';
}
else
{
$result=mysqli_query($conn,"insert into driver (username,gender,address,contactno,email,aadharno,password,reference,vehiclemodel,licenseno,seatno,ac,standname,location,locality,fullname,accountno,ifsccode) values('$username','$gender','$address','$contactno','$email','$aadhar','$password','$reference','$vmodel','$licenseno','$seatno','$ac','$standname','$location','$locality','$fname','$accountno','$ifsc')");
//or die(mysqli_error());
if($result==TRUE)
{
echo '<script type="text/javascript">';
echo 'alert("SIGNUP SUCCESSFUL")';
echo '</script>';
}
else
	echo "Error: " . $result . "<br>" . $conn->error;
	//echo "<script>alert('Something went wrong...try again');</script>";

}
}

if(isset($_POST['usignup']))
{
$username=$_POST['username'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contactno=$_POST['contactnumber'];
$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($conn,"select * from customer where username='$username'");
$fetch=$query->fetch_array();
$row=$query->num_rows;
if($row>0)
{
echo '<script type="text/javascript">';
echo 'alert<"USERNAME ALREADY EXIST!!">';
echo '</script>';
}
else
{
$result=mysqli_query($conn,"insert into customer (username,gender,address,contactno,email,password) values('$username','$gender','$address','$contactno','$email','$password')");
//or die(mysqli_error());
if($result==TRUE)
{
echo '<script type="text/javascript">';
echo 'alert("SIGNUP SUCCESSFUL")';
echo '</script>';
}
else
	echo "Error: " . $result . "<br>" . $conn->error;
	//echo "<script>alert('Something went wrong...try again');</script>";

}
}



?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body {
      background-image:
      url('image.png');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
.container {
  width: 50%;
background-color: white;
  padding:20px;
}
.content {
  width: 95%;
background-color: white;
  padding:20px;
overflow:hidden;
  display:none;
}

.loginbutton {
  background-color: #275929;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:100%;
}

.loginbutton:hover {
  opacity: 0.8;
}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email]{
  width: 100%;
   padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
   background: #f1f1f1;
  box-sizing: border-box;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
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
.cancelbutton {
  width: 100%;
  height: 43px;
  padding: 10px 18px;
  background-color: #f44336;
}
/* Overwrite default styles of hr */
hr {
  border: 2px solid #ddd;
  margin-bottom: 25px;
}
button:hover {
  opacity: 0.8;
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
  .cancelbutton {
     width: 100%;
  }
}
.collapsible {
  background-color:#275929;
  color: white;
  cursor: pointer;
 padding: 14px 20px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 13px;
  margin: 8px 0;
 }

.active, .collapsible:hover {
  background-color: #555;
}
</style>
</head>
<body>
<center><br>
 <form name="home" method="post" autocomplete="off">
    <div class="container">
      <h1><center>SIGN UP</center></h1>
      <hr>
       <br>

     <input type="text" placeholder="Enter User Name" name="username" required><br>
<p></p>

 <select style="width:100%; height:35px;" id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="default">Default</option>
    </select><br><br>

      <input type="text" placeholder="Enter Address" name="address" required><br>

      <input type="text" placeholder="Enter Contact Number" name="contactnumber"  pattern="[0-9]{10}" title="Must contain 10 numbers" required><br>

      <input type="email" placeholder="Enter Email" name="email" title="Should be in the right format" required><br>
      

      <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain atleast one number and one uppercase and lowercase letter, and exactly 6 characters" required><br>

      <div class="clearfix">
 <button type="button" onclick="goBack()" class="cancelbutton"><center>CANCEL</center></button>


   <input type="submit" class="loginbutton" name="usignup" value="SIGNUP AS USER">
<button type="button" class="collapsible"><center>SIGNUP AS DRIVER</button>      
  <div class="content">
 <h3>PERSONAL DETAILS</h3>
    <input type="text" placeholder="Aadhar Number" pattern="[0-9]{12,16}" name="aadhar" required>
    <input type="text" placeholder="Reference Details" name="reference" title="Details of a local official or distinguished personality who could authenticate you." required>
<hr>
   <h3>VEHICLE DETAILS</h3>
    <input type="text" placeholder="Vehicle Model" name="vmodel" required>
    <input type="text" placeholder="License Number" name="licenseno" required>
    <input type="text" placeholder="Number Of Seats" name="seatno" patter=[0-9]{1}" required>
 <select style="width:100%; height:35px;" id="ac" name="ac" >
      <option value=""></option>
      <option value="ac">AC</option>
      <option value="nonac">NON-AC</option>
    </select><br><br>    
<hr>
 <h3>STAND DETAILS</h3>
    <input type="text" placeholder="Stand Name" name="standname" required>
    <input type="text" placeholder="Location" name="location" required>
    <input type="text" placeholder="Locality" name="locality" required>
<hr>
 <h3>BANK DETAILS</h3>
    <input type="text" placeholder="Full Name" name="fname" required>
    <input type="text" placeholder="Account Number" name="accountno" pattern="[0-9]{9,18}" required>
    <input type="text" placeholder="IFSC Code" name="ifsc" required>

  <input type="submit" class="loginbutton" name="dsignup" value="SIGNUP AS DRIVER">
    <button type="button" onclick="goBack()" class="cancelbutton"><font color="white">CANCEL</a></button></center>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
function goBack() {
  window.history.back();
}
</script>
      </div></center>
    </div>
  </form>
</center>
</body>
</html>