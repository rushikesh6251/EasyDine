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

<!-- google font link -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap')
    </style>
<style type="text/css">

    /* Set text font colors and font family */
    body, div, p, h2, input, select,td {
      color: #FFFFFF; 
      font-family: Josefin Sans; 
    }
 
    body, div, p, h2, input, select,td,div,th {
      color: #FFFFFF; 
      font-family: Josefin Sans; 
    }
    
    table{font-size: 15px;}

/*table styling*/

	html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: #333333;
	font-family: Josefin Sans;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 1100px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
.scrollable-table {
        max-height: 300px; /* Adjust height as needed */
        overflow-y: auto;
</style>


</head>
<body style="background-color: black">
		<br>
	<h2 align="center">Order History</h2>
	<div class="scrollable-table">
<table style="font-family: Josefin Sans;" align="center" >
	<tr>
		<th>Item Name </th>
		<th>Price</th>
		<th>Item Type</th>
		<th>Quantity</th>
		<th>Subtotal</th>
		
	</tr><br><br><br>


	<?php 
	$unique_order_id = $_GET['unique_order_id'];
		$q=0; $x=0;
		$connect = mysqli_connect("localhost","root","","ros");
		$rs = mysqli_query($connect,"select * from orders where unique_order_id='$unique_order_id'");
		while($array=mysqli_fetch_array($rs))
		{
			$x=$array[3]*$array[5];	
			echo "<tr>";
			echo "<td>$array[2]";
			echo "<td>$array[3]";
			echo "<td>$array[4]";
			echo"<td>$array[5]"	;
			echo"<td>$x";
				$q=$q+($array[5]);
}

?>
</table>
</div>
<br>		
<div class="scrollable-table">
<table style="font-family: Josefin Sans;" align="center" >
<tr>
		<th>Order ID</th>
		<th>Total Item Quantity</th>
		<th>Transaction ID</th>
		<th>Order Time</th>
		<th>Delivery Address</th>
		<th>Mobile Number</th>
		<th>Total Amount</th>
		<th>Order Status</th>



	</tr>
	<?php  
$rs2 = mysqli_query($connect,"select * from orders where unique_order_id='$unique_order_id'");
$array1=mysqli_fetch_array($rs2);	
		
			echo "<tr>";
			echo "<td>$array1[0]";
			echo "<td>$q";
			echo "<td>$array1[10]";
			echo "<td>$array1[11]";
			echo "<td>$array1[7]";
			echo "<td>$array1[8]";
			echo "<td>$array1[6]";
			echo "<td>$array1[12]";
			echo"</td>";
		
// Close the database connection
mysqli_close($connect);

	?>

</table>
</div>
<br><br><br>
<p align="center"><a href="selectorderid.php" class="btn btn-primary">Back</a></p>

<br><br>


</body>
</html>