<?php
// Start the session to access session variables
session_start();

// Get the customer name from the session
$e = $_SESSION['cname'];

// Establish a connection to the database
$connect = mysqli_connect("localhost", "root", "", "ros");

// Check if the connection was successful
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the session and assign to variables
$x= $_SESSION['amount'];

// Retrieve data from the form submitted via POST method
$transid = $_REQUEST["transid"];
$deladdress = $_REQUEST["deladdress"];
$delmno = $_REQUEST["delmno"];
$unique = $_REQUEST["uniqueorderid"];

// Select all items in the cart for the current customer
$sql = "SELECT * FROM cart WHERE customer_id = '$e'";
$rs = mysqli_query($connect, $sql);

// Check if the query execution was successful
if (!$rs) {
    die("Query failed: " . mysqli_error($connect));
}

// Insert each item from the cart into the orders table
while ($array = mysqli_fetch_array($rs)) {
    $sql1 = "INSERT INTO `orders` (unique_order_id,item_name, mrp, item_type, quantity, total_amount, delivery_add, delivery_mno, customer_id, transaction_id, ordertime,status) VALUES ('$unique','$array[1]', '$array[2]', '$array[3]', '$array[4]',$x, '$deladdress', '$delmno', '$e', '$transid', CURRENT_TIMESTAMP,'Pending')";
    
    // Execute the insertion query
    $rs1 = mysqli_query($connect, $sql1);
    
    // Check if the insertion was successful
    if (!$rs1) {
        // Handle the error if the query fails
        die("Insert query failed: " . mysqli_error($connect));
    }
}

// After successfully inserting orders, delete them from the cart
$sql2 = "DELETE FROM `cart` WHERE customer_id='$e'";
$rs2 = mysqli_query($connect, $sql2);

// Check if the deletion was successful
if (!$rs2) {
    // Handle the error if the query fails
    die("Delete query failed: " . mysqli_error($connect));
}

// Close the database connection
mysqli_close($connect);

// // Output success message
// echo "Order placed successfully";
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
         </script>
    <!-- google font link -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap')
    </style>
<style>
  /*  text font colors*/
   body, div, p, h2, input, select {
      color: #FFFFFF; /* White font color */
      font-family:Josefin Sans;
          font-size: 25px;
    }

</style>

<style>
/*  background img */
body {
  background-image: url('universalbg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

</head>
<body>
  <br><br><br><br>
<h2 align="center" class="">Order Placed Succesfully</h2><br>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-6 ">Your Order ID is <?php echo "$unique";?></div>
  <div class="col-lg-4"></div>
</div></br>

<div class="row">
    <div class="col-lg-5"></div>
      <div class="col-lg-3"><a href="customerdashboard.php" class="btn btn-danger btn-lg">Back</a></div>
          
    <div class="col-lg-3"></div>
  </div>
</body>
</html>
