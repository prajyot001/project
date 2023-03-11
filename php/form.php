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
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>