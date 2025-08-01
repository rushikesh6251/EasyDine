<?php


$a="'".$_REQUEST["itemname"]."'";

$b=$_REQUEST["itemmrp"];

$c="'".$_REQUEST["itemtype"]."'";

$d=$_REQUEST["itemquantity"];

	session_start();
$e="'".$_SESSION['cname']."'";

echo"$a $b $c $d $e";

$connect=mysqli_connect("localhost","root","","ros");
$query="insert into cart(item_name,item_mrp,item_type,item_quantity,customer_id) value($a,$b,$c,$d,$e)";
echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);

echo("item added successfully");
 header("location:mycart.php")

?>