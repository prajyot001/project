
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="product.html">
  <title>Adicon</title>
</head>
<script src="js/form.js"></script>
<body id="page" class="down" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!-- navigationbar create -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid"> <!-- container for all navbar -->

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#option">

          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#myPage">ADICON</a>
      </div>

      <div class="collapse navbar-collapse" id="option"> <!--option -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="product.html ">PRODUCT</a></li>
          <li><a href="# " >CONTACT US</a></li>
         

        </ul>
      </div>
    </div>
  </nav>
  <!-- navigationbar end -->

<div class="container  ">
    <p>Contact us and we'll get back to you within 24 hours.</p>
  <form action="php/form.php" method="post" class="row g-4 needs-validation" novalidate>
    <div class="col-md-8">
      <label for="validationCustom01" class="form-label">Name</label>
      <input type="text" class="form-control" name="c_name" id="name" required>
      
      <div id="valid_name" class="invalid-feedback">
        Please Enter Your name.
      </div>
    </div>

    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Phone</label>
        <input type="tel" class="form-control" name="phone" id="phone" pattern="[0-9]{10}"  required>
        <div id="valid_num" class="invalid-feedback">
          Please Enter Your Phone number .
        </div>
        
      </div>

      <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Gmail</label>
        <input type="email" class="form-control" name="gmail" id="gmail" required>
        
        <div id="valid_gmail" class="invalid-feedback">
          Please Enter Your Gmail.
        </div>
      </div>

      <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Address</label>
        <textarea class="form-control" name="Address" id="Address" rows="3"></textarea>
          <div id="valid_address" class="invalid-feedback">
          Please Enter Your address.
        </div>
      </div>
      
      <div class="col-md-8">
        <label for="validationCustom01" class="form-label">comment</label>
        <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
        
      </div>
 
    <div class="col-md-12">
      <button onclick="valid()" class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>

</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $name = $_POST['c_name'];
  $phone = $_POST['phone'];
  $gmail = $_POST['gmail'];
  $Address = $_POST['Address'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO `client_data`(`client_name`, `client_number`, `gmail`, `c_address`, `comment`) VALUES ('$name','$phone','$gmail','$Address','$comment')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} 
catch(PDOException $e) {
  
}

$conn = null;
?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>