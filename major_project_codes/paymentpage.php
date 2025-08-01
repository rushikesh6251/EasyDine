<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
         </script>
    <!-- google font link -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap')
    </style>
 


<style>
  /*  text font colors*/
   body, div, p, h2, input, select {
      color: #FFFFFF; /* White font color */
      font-family:Josefin Sans;
/*          font-size: 25px;*/
    }
/*    <!-- to stop the resizing of the address box we use css -->*/
  .address-textarea {
    width: 100%; /* Set the width to 100% */
    resize: none; /* Prevent resizing */
  }

  select {
    width: 100%; /* Set the width to 100% */
  }
</style>

<style>
/*  background img */
body {
  background-image: url('universalbg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<style type="text/css">
  img {
    width: 200px; /* Set your desired width */
    height: 150px; /* Set your desired height */
}
</style>
<script>
  // Function to generate an 8-digit random number
  function generateUniqueID() {
    // Generate a random number between 10000000 and 99999999 (inclusive)
    return Math.floor(Math.random() * 90000000) + 10000000;
  }

  // When the document is ready
  $(document).ready(function() {
    // Generate a unique ID and store it in a hidden input field
    var uniqueID = generateUniqueID();
    $('#uniqueorderid').val(uniqueID);
  });
</script>

</head>
<body>
  <form action="paymentdone.php">
  <br>  
<h2 align="center" class="">PAYMENT</h2><br>
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-6 ">Scan The QR code through your upi application</div>
  <div class="col-lg-4"></div>
</div></br>

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-6 "><img src="paymentqr.jpg" alt="Upi ID:rushikesh6251@axl" style="img"></img>
  </div>
  <div class="col-lg-4"></div>
</div></br>

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-3">Enter transaction Id of your Payment</div>
  <div class="col-lg-1"></div>
</div></br>

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-3"><input type="text" name="transid" class="form-control" placeholder="Enter transaction ID">
    <p id="b"></p>
  </div>
  <div class="col-lg-1"></div>
</div></br>

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-3 "> delivery Address </div>
  <div class="col-lg-3">Mobile number</div>
  <div class="col-lg-4"></div>
</div></br>

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-3 text-primary"><textarea name="deladdress"
   class="form-control address-textarea" cols="50" placeholder="Enter Delivery Address" required></textarea  name="delmno" required> <br></div>
  <div class="col-lg-3"><input type="text" name="delmno" class="form-control" placeholder="Enter Mobile Number" required><p id="e"></p></div>
  <div class="col-lg-4"></div>
</div></br>

<!-- Add a hidden input field to store the unique ID -->
<input type="hidden" id="uniqueorderid" name="uniqueorderid">

<div class="row">
    <div class="col-lg-5"></div>
      <div class="col-lg-3"><input type="submit" class="btn btn-success btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mycart.php" class="btn btn-danger btn-lg">Back</a></div>
          
    <div class="col-lg-3"></div>
  </div><br>
</form>
</body>
</html>