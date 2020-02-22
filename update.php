<?php
session_start();
error_reporting(0);
$conn=new mysqli("localhost","root","","yugenksd") or die(mysqli_error());
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
if(isset($_GET['submit']))
{
$uname=$_GET['uname'];
$status=$_GET['status'];
$query="UPDATE DRIVER SET STATUS='$status' WHERE USERNAME='$uname'";
$data=mysqli_query($conn,$query);
if($data)
{
echo "RECORD UPDATED SUCCESSFULLY";
header("location:driverlist.php");
exit;
}
else
{
echo "RECORD NOT UPDATED";
}
}
?>
<!doctype html>
<html lang="en">
<head>
<style>
#ip{
    border-radius:5px;
    padding:7px;
    width:230px;
    background:#d9d9d9;
}
body {
      background-image:
      url('bg5.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
</style>
<title>registration form</title>
</head>
<body vlink="#980000">
<br><br><br>
<form method="GET" action="#">
<table align="center" bordercolor="#999999" frame="box" bgcolor="#f3f3f3" height="150" width="600">
<TR align="center"><TH>USERNAME :</TH>
<TD><INPUT TYPE="text" id="ip" NAME="uname" maxlength="30" title="name" value="<?php echo $_GET['un']; ?>"></td>
</tr>
<TR align="center"><TH>STATUS :</TH>
<TD><input type="text" id="ip" value="<?php echo $_GET['st'];?>" name="status"></td>
</tr>
<tr align="center">
<td colspan="2" align="centre"><input type="submit" id="ip" name="submit" value="UPDATE" >
</td>
</tr>
</table></form>
</body>
</html>
