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
        max-height: 400px; /* Adjust height as needed */
        overflow-y: auto;
</style>
</head>
<body style="background-color: black">
		<br><br>
	<h2 align="center">Remove Customer </h2>
	<div class="scrollable-table">
<table align="center" >
	<tr>
		<th>Customer Id</th>
		<th>Customer Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Address</th>
		<th>Mobile Number</th>
		<th>Remove</th>

	</tr>
	<?php 


		$connect = mysqli_connect("localhost","root","","ros");
		$rs = mysqli_query($connect,"select * from customer");
		while($array=mysqli_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td>$array[0]";
			echo "<td>$array[1]";
			echo "<td>$array[2]";
			echo "<td>$array[3]";
			echo "<td>$array[4]";
			echo "<td>$array[5]";
			echo "<td><a href=removecustomerdone.php?cid=$array[0]>Remove</a>";	
		}



	?>
</table>
</div>
<br><br><br>
<p align="center"><a href="customermanagement.html" class="btn btn-primary">Back</a></p>
</div>
<br><br>
</body>
</html>