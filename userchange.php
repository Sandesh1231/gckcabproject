<?php
$conn=new mysqli("localhost","root","","yugenksd") or die(mysqli_error());
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$query=$conn->query("select * from customer where username='$username' and email='$email'");
$fetch=$query->fetch_array();
$row=$query->num_rows;
 if($row>0)
{

 $qu=$conn->query("update customer Set password='$password' where username='$username'");
echo '<script type="text/javascript">';
echo 'alert("UPDATED SUCCESSFULLY")';
echo '</script>';
}
else
{
echo '<script type="text/javascript">';
echo 'alert("USERNAME OR EMAIL DOES NOT EXIST")';
echo '</script>';
}
}
?>
<!doctype html>
<html lang="en">
<HEAD>
<STYLE>
#ip{
    border-radius:5px;
    padding:7px;
    align:center;
    width:400px;
    background: #f2f2f2;
    color:#000;
}
#i{
    border-radius:5px;
    padding:7px;
    width:200px;
    background:#999999;
}
body
{
  background-color:#e6e6e6;
}
</STYLE>
<TITLE>FORGOT PASSWORD</TITLE>
</HEAD>
<BODY background="grey.jpg">
 <CENTER>
<FORM NAME="PASSWORD" METHOD="POST" action="#">

<TABLE align="center" bordercolor="#999999"  height="350" width="300">
<caption>
 <H1 style=color:#434343;"><b><i>CHANGE PASSWORD</b></i></H1>
</caption><center>
  <TR align="center" colspan="2" rowspan="3"><TD STYLE="text-align:center"><input type="text" id="ip" name="username" placeholder="USER NAME" size="20" maxlength="20" required></TD>
   </TR>
   <TR align="center" colspan="2" rowspan="3">
          <TD align="center"><input type="text" id="ip" name="email" placeholder="E-MAIL" size="20" maxlength="20" required></TD>
   </TR>
   <TR ALIGN="CENTER" colspan="2" rowspan="3">
          <TD align="center"><input type="PASSWORD" id="ip" name="password" placeholder="ENTER NEW PASSWORD" size="20" minlength="6" maxlength="10" required>
   </TR>
  </CENTER>
  <TR ALIGN="CENTER"> <TD><button type="submit" name="submit" value="UPDATE PASSWORD" ID="i">UPDATE PASSWORD</button><BUTTON TYPE="RESET" id="i" NAME="RESET" VALUE="CLEAR">CLEAR</BUTTON></TD>
   </TR>
</TABLE>
</FORM>
</BODY>
</HTML>