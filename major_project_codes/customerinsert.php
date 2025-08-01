

<?php

$a="'".$_REQUEST["txt1"]."'";
$b="'".$_REQUEST["txt2"]."'";
$c="'".$_REQUEST["txt3"]."'";
$d="'".$_REQUEST["txt4"]."'";
$e=$_REQUEST["txt5"];
echo"$a $b $c $d $e";
$connect=mysqli_connect("localhost","root","","ros");
$query="insert into customer(name,email,password,address,mno) value($a,$b,$c,$d,$e)";
echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);

header("location:customerlogin.html")

?>