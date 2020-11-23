<?php

require("includes/common.php");

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$signup_query = "insert into users(name, email, password, contact, city, address) 
values ('$name', '$email', '$password', '$contact', '$contact', '$address')";

$signup_submit = mysqli_query($con, $signup_query) or
die(mysqli_error($con));

$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);

echo '<script> alert("User signup successful!"); window.location="product.php"; </script>';


?>
