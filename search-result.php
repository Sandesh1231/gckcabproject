<?php
    include('connection.php');
    session_start();
    $pick_up_location= $_SESSION['pickuplocation'];
    $sql= "SELECT vehiclemodel, driverid FROM driver WHERE location= '$pick_up_location'";
    $result=mysqli_query($conn,$sql);
    $car_model = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
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

.car-list{
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
<img src="logo.png" height="5%" width="3.5%" align="center">
<b>YUGENKSD.COM</b>
</font>

<div class="container">
    <h1>CAR MODELS</h1>
    <hr>
    <?php if($car_model): ?>
        <?php foreach($car_model as $car):?>
        <div class="col-12">
        <a href="car-details.php?driverid=<?php echo $car['driverid']?>" class="car-list"><?php echo htmlspecialchars($car['vehiclemodel']);?></a>
        
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <h5>SORRY, NO CAR AVAILABLE AT THE MOMENT !</h5>
    <?php endif ?>
</div>

</body>
</html>