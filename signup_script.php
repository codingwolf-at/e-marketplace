<?php

require("includes/common.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$signup_query = "insert into users(name, email, password, contact, city, address) 
values ('$name', '$email', '$password', '$contact', '$contact', '$address')";

$signup_submit = mysqli_query($con, $signup_query) or
die(mysqli_error($con));

echo '<script> alert("User signup successful!"); window.location="login.php"; </script>';


?>
