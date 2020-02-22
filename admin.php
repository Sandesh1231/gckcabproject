<?php
session_start();
include('connection.php');
if(isset($_POST['adminlogin']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$query=$conn->query("select * from admin where username='$uname' and password='$password'");
$_SESSION['name']=$uname;
$fetch=$query->fetch_array();
$row=$query->num_rows;
if($row>0)
{
header("location:adminpage.php");
}
else
{
echo '<script type="text/javascript">';
echo 'alert("ACCOUNT DOES NOT EXIST")';
echo '</script>';
}
}

?>
<!DOCTYPE html>
<html>
   
   <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Admin Login</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
}
body {
      background-image:
      url('bg5.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
* {
  box-sizing: border-box;
}
/* Full-width input fields */
input[type=text], input[type=password]{
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

/* Set a style for all buttons */
.loginbutton {
  background-color: #275929;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.loginbutton:hover {
  opacity: 0.8;
}
.container {
  padding:16px;
  background-color:white;
  width: 50%;
}
      </style>
      
   </head>
   <form method="post">
   <body bgcolor = "#FFFFFF">
	<br><br><br><br><br><br><br>
      <div align = "center">
         <div class="container" style = "width:600px;" align = "center">
           <h1><center> <b>ADMIN LOGIN</b></center></h1>
	<hr>
            <div >
               
               <form action = "" method = "post" autocomplete="off">
                 <input type = "text" name = "username" placeholder="USERNAME" required>
                  <input type = "password" name = "password" placeholder="PASSWORD" required>
        <hr>
                  <input type="submit" class="loginbutton" name="adminlogin" value=" LOGIN">
                 
               </form>
               
            
				
         </div>
			
      </div>

   </body>
</html>