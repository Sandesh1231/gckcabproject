<?php
session_start();
include('connection.php');
if(isset($_POST['add']))
{
$locationname=$_POST['locationname'];
$localityname=$_POST['localityname'];
$query=$conn->query("select * from location where locationname='$locationname'");
$fetch=$query->fetch_array();
$row=$query->num_rows;
 if($row>0)
{
echo '<script type="text/javascript">';
echo 'alert(" LOCATION ALREADY EXISTS !")';
echo '</script>';
}
else
{
$conn->query("insert into location (locationname,localityname) values('$locationname','$localityname')")or
die(mysqli_error());
echo '<script type="text/javascript">';
echo 'alert("LOCATION INSERTED SUCCESSFULLY")';
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
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
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
/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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
   <center> <h1>ADD LOCATION</h1></center>
    
    <hr>
    
    <input type="text" placeholder="Enter Location Name" name="locationname" required>
  <input type="text" placeholder="Enter Locality Name" name="localityname" required><br>

<hr>
<input type="submit" class="registerbtn" name="add" value="ADD">
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
