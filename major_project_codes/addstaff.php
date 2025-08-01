

<?php
$a="'".$_REQUEST["txt1"]."'";
$b="'".$_REQUEST["txt2"]."'";
$c=$_REQUEST["txt3"];
$d="'".$_REQUEST["txt4"]."'";
$e=$_REQUEST["txt5"];
$f="'".$_REQUEST["txt6"]."'";
echo"$a $b $c $d $e $f";
$connect=mysqli_connect("localhost","root","","ros");
$query="insert into staff(name,designation,salary,shift,mno,address) value($a,$b,$c,$d,$e,$f)";
echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);

echo("item added successfully");
 header("location:viewstaff.php")
?>