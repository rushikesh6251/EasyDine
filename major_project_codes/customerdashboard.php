<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- google font link -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap')
    </style>
    <style>
    /* Set text font colors and font family */
    body, div, p, h2, input, select,td {
      color: #FFFFFF; 
      font-family: Josefin Sans; 
    }
 
    body, div, p, h2, input, select,td {
      color: #FFFFFF; 
      font-family: Josefin Sans; 
    }
    
    th {
      color: #cc3300;
      font-family: Josefin Sans; 
    }
    table{font-size: 17px;}
  </style>
	<style>
/*	background img */
body {
  background-image: url('sitebg3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body >
	<br><br>
	<div class="row">
	  <div class="col-lg-3"></div>
	  <div class="col-lg-6 ">
	  	<?php
	session_start();
	$x=$_SESSION['cname'];
	echo"<h2>Welcome to EasyDine $x !!</h2>";
	?>
	  </div>
	  <div class="col-lg-3"></div>
	</div></br>
<br><br>
	<div class="row">
	  <div class="col-lg-3"></div>
	  <div class="col-lg-6 "><div class="table-responsive">
	<table class="table table-hover">
	<tr>
		<th>Actions</th></tr>
		<td><a href="viewmenucustomer.php">View Menu</a></td></tr>
		<td><a href="placeorder.php">Place Order</a></td></tr>
		<td><a href="mycart.php">My Cart</a></td></tr>
		<td><a href="selectorderid.php">Order History </a></td></tr>
		<td><a href="caccmgt.html">Account Management </a></td></tr>
		<td><a href="support.html">Support or Help</a></td></tr>
	</tr>
	</table>
	</div></div>
	<div class="col-lg-3"></div>
</div></br>
 
 <div class="row">
    <div class="col-lg-5"></div>
      <div class="col-lg-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="customerlogin.html" class="btn btn-danger btn-lg">Logout</a></div>
          
    <div class="col-lg-3"></div>
  </div><br>
</div></br>
</body>
</html>