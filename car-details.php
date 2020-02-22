<?php 

include('connection.php');

if(isset($_GET['driverid'])){
		
  $driverid = mysqli_real_escape_string($conn, $_GET['driverid']);

  
  $sql = "SELECT * FROM driver WHERE driverid = $driverid";

  $result = mysqli_query($conn, $sql);

  $car_detail = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
 
  mysqli_close($conn);


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
  margin: 0 auto;
  margin-top: 50px;
  text-align: center;
}

.car-details{
    padding: 5px;
    color: #808080;
    font-size: 150%;
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

<div class="container">
    <h1 >CAR DETAILS</h1>
    <hr>
    <h3 class="car-details"><?php echo $car_detail['vehiclemodel']; ?></h3>
			<p class="car-details">Number of seats:  <?php echo $car_detail['seatno']; ?></p>
      <p class="car-details">AC/NONAC: <?php echo $car_detail['ac']; ?></p>
      <br/>
      <p class="car-details">Driver Name: <?php echo $car_detail['fullname']; ?></p>
      <p class="car-details">Driver-id: <?php echo $car_detail['driverid']; ?></p>
      <p class="car-details">Contact-No: <?php echo $car_detail['contactno']; ?></p>
      <p class="car-details">Licence No: <?php echo $car_detail['licenseno']; ?></p>
      <p class="car-details">Stand : <?php echo $car_detail['location']; ?></p>
      <form action="car-details.php" methord="POST">
        <input type="submit" class="btn" name="confirm" value="CONFIRM">
      </form>
</div>

</body>
</html>