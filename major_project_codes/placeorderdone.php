	<?php 

		$id=$_GET['id'];
		$connect = mysqli_connect("localhost","root","","ros");
		$rs = mysqli_query($connect,"select name,sp,type,quantity from menu where itemid=$id");
		$array = mysqli_fetch_array($rs);

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	         </script>
	</script>
	    <!-- google font link -->
	    <style>
	    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap')
	    </style>
	    <style>
	  /*  text font colors*/
	   body, div, p, h2 {
	      color: #FFFFFF; /* White font color */
	      font-family:Josefin Sans;
	     </style>
	     
	</head>
	<body style="background-color: black">
		<form action="addtocart.php">
			<br><br><br>  
	<h2 align="center" class="">Add to the cart</h2><br>
	<br>
	<div class="row">
	  <div class="col-lg-2"></div>
	  <div class="col-lg-2">Item Name</div>
	  <div class="col-lg-2">MRP</div>
	  <div class="col-lg-2">Type</div>
	    <div class="col-lg-2">Quantity</div>
	  <div class="col-lg-2"></div>
	</div></br>

	<div class="row">
	  <div class="col-lg-2"></div>
	  <div class="col-lg-2" style="color: black;"><input type="text" name="itemname" value="<?php echo $array[0];?>" readonly> </div>
	   <div class="col-lg-2" style="color: black;"><input type="text" name="itemmrp" value="<?php echo $array[1];?>" readonly></div>
	   <div class="col-lg-2" style="color: black;"><input type="text" name="itemtype" value="<?php echo $array[2];?>" readonly> </div>
	   <div class="col-lg-2" style="color: black;"><input type="number" id="a" name="itemquantity" min="1" max="<?php echo $array[3];?>" required></div>
	  <div class="col-lg-2"></div>
	</div></br></br></br>

	<div class="row">
    <div class="col-lg-3"></div>
      <div class="col-lg-3"><a href="placeorder.php" class="btn btn-danger btn-lg">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Add To Cart" class="btn btn-success btn-lg"></a></div>
    <div class="col-lg-3"></div>
  </div><br>
	</form>
	</body>
	</html>