<?php
include('connection.php');

// Attempt select query execution
$sql = "SELECT * FROM reservation";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id='display' cellpadding='20 px' align='center'>";
            echo "<tr>";
                echo "<th> RESERVATION ID</th>";
                echo "<th>PASSENGERS </th>";
                echo "<th>DEPARTURE </th>";
                echo "<th>ARRIVAL</th>";
                echo "<th>TOTAL FARE</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "&nbsp";
                echo "<td><center>" . $row['reservationid'] . "</center></td>";
                echo "<td><center>" . $row['noofpassengers'] . "</center></td>";
                echo "<td><center>" . $row['departureloc'] . "</center></td>";
                echo "<td><center>" . $row['arrivalloc'] . "</center></td>";
                echo "<td><center>" . $row['fare'] . "</center></td>";
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
      url('aaaa.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      }
#display{
  background-color:rgba(242, 242, 242, 0.8);
  border:1;
    font-size: 20px;
  font-style: Bernard MT;
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
  location.assign("driverpage.php");
}
</script>
 
</body>
</html>