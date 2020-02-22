<?php
include('connection.php');
 
// Attempt select query execution
$sql = "SELECT * FROM customer";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1' cellpadding='20px' align='center' >";
            echo "<tr>";
                echo "<th>CUSTOMER ID</th>";
                echo "<th>USER NAME</th>";
                echo "<th>GENDER</th>";
                echo "<th>ADDRESS</th>";
                echo "<th>CONTACT NUMBER</th>";
                echo "<th>E-MAIL</th>";
                echo "<th>PASSWORD</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "&nbsp";
                echo "<td>" . $row['custid'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
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