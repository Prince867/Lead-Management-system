<?php
include "connection.php";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['brand'];
    $phone_no = $_POST['phone'];
    $address = $_POST['address'];
    // $join_date = $_POST['join_date'];
    // $age = $_POST['age'];

    // Hash and salt the password
  if (isset($_POST['submit'])){
    $sql = "INSERT INTO `user`(`full_name`, `phone_no`, `address`) VALUES ('$full_name', '$phone_no','$address')";

    if ($conn->query($sql) === TRUE) {
       echo"succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
header("Location:lead.php");
$conn->close();
?>