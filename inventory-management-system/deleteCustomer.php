<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inven";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$customer_id = $_GET['id'];
// sql to delete a record
$sql ="delete from customer where id = $customer_id";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.open('viewCustomers.php','_self')</script>";
}else{
    echo "";
}

$conn->close();
?>