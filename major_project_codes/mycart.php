<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
 
    body, div, p, h2, input, select,td {
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
	width: 800px;
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
<style>
body {
  background-image: url('menu2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body >
    <br><br>
    <h2 align="center">My Cart</h2>
    <br><br>
    <div class="scrollable-table">
        <table align="center">
            <tr>
                <th>Item Name</th>
                <th>MRP</th>
                <th>Item Type</th>
                <th>Quantity</th>
                <th>Remove items from cart</th>
            </tr>
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
$x=0;
// Fetch and display data
while ($array = mysqli_fetch_array($rs)) {
    echo "<tr>";
    // echo "<td>".$array[0]."</td>";
    echo "<td>" . $array[1] . "</td>";
    echo "<td>" . $array[2] . "</td>";
    echo "<td>" . $array[3] . "</td>";
    echo "<td>" . $array[4] . "</td>";
    echo "<td><a href=mycartremovedone.php?cart_id=$array[0]>Remove</a>";
        echo "</tr>";
   

	$x=$x+($array[2]*$array[4]);
}
$_SESSION["amount"]=$x;
?>
</table>



</div>
<br>
<?php
echo "<p align='center' style='font-size:25px'>Your Cart Total Rs $x.<?p>";
mysqli_close($connect);
?>
        
        	<p align="center"> 
            <a href="customerdashboard.php" class="btn btn-danger btn-lg">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="paymentpage.php" class="btn btn-success btn-lg">Pay & Place order</a>&nbsp;&nbsp;<a href="placeorder.php" class="btn btn-success btn-lg">Add More Items</a>
            </p>
     
    
</body>
</html>
