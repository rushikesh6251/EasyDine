<?php 

	$id = $_GET['id'];
	echo $id;
	$connect = mysqli_connect("localhost","root","","ros");
	mysqli_query($connect,"delete from menu where itemid=$id");
	mysqli_close($connect);
	header("location:removeitem.php");


?>