<?php
session_start();
$e = $_SESSION['cname'];

$connect = mysqli_connect("localhost", "root", "", "ros");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM cart WHERE customer_id = '$e'";
$rs = mysqli_query($connect, $sql);

if (!$rs) {
    die("Query failed: " . mysqli_error($connect));
}

$x= $_SESSION['amount'];
// Fetch and display data
$a="'".$_REQUEST["transid"]."'";
$b="'".$_REQUEST["deladdress"]."'";
$c="'".$_REQUEST["delmno"]."'";
while ($array = mysqli_fetch_array($rs)) {
    

    $sql1 = "INSERT INTO `orders` (item_id,item_name,mrp,item_type,quantity,total_amount,delivery_add,delivery_mno,customer_id,transaction_id,ordertime) VALUES ('$array[1]', '$array[2]', '$array[3]', '$array[4]','$array[5]',$x,$b,$c,'$e',$a,CURRENT_TIMESTAMP)";
    $rs1 = mysqli_query($connect, $sql1);
    if (!$rs1) {
        // Handle the error if the query fails
        die("Insert query failed: " . mysqli_error($connect));
    }
}
mysqli_close($connect);
?>
