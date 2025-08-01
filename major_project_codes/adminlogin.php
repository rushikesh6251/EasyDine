<?php 

SESSION_start();
$u=$_REQUEST["txt1"];
$p=$_REQUEST["txt2"];

$connect=mysqli_connect("localhost","root","","ros");
$rs=mysqli_query($connect,"select email,password from admin");
$flag=0;
while ($array=mysqli_fetch_array($rs)) {

	if ($array[0]==$u && $array[1]==$p) {
		$flag=1;
		break;
	}
}
	if ($flag==1) {
		$_SESSION["aname"]=$u;
		header("location:admindashboard.php");
	}
	else{

		header("location:adminlogin.html");
	}

?>