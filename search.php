<?php 
include('connection.php');
session_start();
if(isset($_POST['search'])){
  $_SESSION['pickuplocation']=$_POST['pickuplocation'];
  header('Location:search-result.php');
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
  width:50%;
  align: center;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=datetime-local] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=datetime-local]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 3px solid grey;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 0.8;
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
      url('image.png');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }


</style>
</head>
<body>

<font  face="Bahnschrift" size="10" color="#ff9900"> 
<img src="logo.png" height="100%" width="3.5%" align="center">
<b>YUGENKSD.COM</b>
</font>
<center>
<p></p><br>
<form method="POST" action="search.php" autocomplete="off">
  <div class="container">
    
    <h1><center>SEARCH</center></h1>
    <hr>
    <input type="text" placeholder="PICK-UP LOCATION" name="pickuplocation" required>
    <input type="text" placeholder="DROP-OFF LOCATION" name="dropofflocation" required>
    <input type="submit" class="btn" value="SEARCH" name="search">
    <button type="button" onclick="goBack()"  class="cancelbtn"><font color="white">CANCEL</a></button>
<script>
function goBack() {
  window.history.back();
}
</script>
  </div>
</form></center>
</body>
</html>
