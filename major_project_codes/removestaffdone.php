<?php 

	$sid = $_GET['sid'];
	echo $sid;
	$connect = mysqli_connect("localhost","root","","ros");
	mysqli_query($connect,"delete from staff where staff_id=$sid");
	mysqli_close($connect);
	header("location:removestaff.php");


?>