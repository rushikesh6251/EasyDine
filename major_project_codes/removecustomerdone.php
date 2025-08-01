<?php 

	$cid = $_GET['cid'];
	echo $cid;
	$connect = mysqli_connect("localhost","root","","ros");
	mysqli_query($connect,"delete from customer where cid=$cid");
	mysqli_close($connect);
	header("location:removecustomer.php");


?>