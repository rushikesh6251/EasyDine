<?php 

	$cart_id = $_GET['cart_id'];
	echo $cart_id;
	$connect = mysqli_connect("localhost","root","","ros");
	mysqli_query($connect,"delete from cart where cart_id=$cart_id");
	mysqli_close($connect);
	header("location:mycart.php");


?>