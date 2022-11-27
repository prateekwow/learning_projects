<?php
$servername = 'localhost';
$username = 'root';
$password = 'SeCuReDB@123';
$db_name = 'roopalitalwar';

// $conn = new mysqli($servername,$username,$password,$db_name);
// if($conn->connect_error){
//         echo 'Server Error';
//         die();
//     }
$conn = mysqli_connect($servername,$username,$password,$db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
