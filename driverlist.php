<?php
session_start();
error_reporting(0);
include('connection.php');
 
// Attempt select query execution
$sql = "SELECT * FROM driver";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) != 0){
        echo "<table border='1' cellpadding='20px' align='center' >";
            echo "<tr>";
                echo "<th>DRIVER ID</th>";
                echo "<th>USER NAME</th>";
                echo "<th>GENDER</th>";
                echo "<th>ADDRESS</th>";
                echo "<th>CONTACT NUMBER</th>";
                echo "<th>E-MAIL</th>";
                echo "<th>AADHAR NUMBER</th>";
                echo "<th>PASSWORD</th>";
                echo "<th>REFERENCE</th>";
                echo "<th>VEHICLE MODEL</th>";
                echo "<th>NO.OF SEATS</th>";
                echo "<th>LICENSE NUMBER</th>";
                echo "<th>AC/NON-AC</th>";
                echo "<th>STAND NAME</th>";
                echo "<th>STAND LOCATION</th>";
                echo "<th>STAND LOCALITY</th>";
                echo "<th>FULL NAME</th>";
                echo "<th>ACCOUNT NUMBER</th>";
                echo "<th>IFSCCODE</th>";
                 echo "<th>STATUS</th>";
                 echo "<th>OPERATION</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                 echo "&nbsp";
                echo "<td>" . $row['driverid'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['aadharno'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['reference'] . "</td>";
                echo "<td>" . $row['vehiclemodel'] . "</td>";
                echo "<td>" . $row['licenseno'] . "</td>";
                echo "<td>" . $row['seatno'] . "</td>";
                echo "<td>" . $row['ac'] . "</td>";
                echo "<td>" . $row['standname'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['locality'] . "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['accountno'] . "</td>";
                echo "<td>" . $row['ifsccode'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td><a href='update.php?un=$row[username]&st=$row[status]'>Edit</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
?>
<html>
<head>
<style>
.cancelbtn {
  width: 65px;
  height: 43px;
  padding: 10px 18px;
  background-color: #f44336;
}
  .cancelbtn {
     width: 20%;
  }
body {
      background-image:
      url('bg5.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
</style>
<body>
<br>
<br>
<br>
<br>
<center><input type="button" style="color:white;" onclick="goBack()" class="cancelbtn" name="cancel" value="CANCEL">
  </center><script>
function goBack() {
  location.assign("adminpage.php");
}
</script>
 
</body>
</html>