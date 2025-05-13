<?php
require 'database_connection.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "invalid request method";
    exit;
}


$firstname = $_POST['firstname'];
if (empty($firstname)) {
    echo "name is required";
    exit;
}
if (strlen($firstname) > 20) {
    echo "name is too long";
    exit;
}

$lastname = $_POST['lastname'];
if (empty($lastname)) {
    echo "Lastname is required";
    exit;
}

$email = $_POST['email'];
if (empty($email)) {
    echo "Email is required";
    exit;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is not valid";
    exit;
}

$password = $_POST['password'];
if (empty($password)) {
    echo "Password is required";
    exit;
}

$role = $_POST['role'];
if (empty($role)) {
    echo "Role is required";
    exit;
}

$address = $_POST['address'];
if (empty($address)) {
    echo "Address is required";
    exit;
}

$city = $_POST['city'];
if (empty($city)) {
    echo "City is required";
    exit;
}

$zipcode = $_POST['zipcode'];
if (empty($zipcode)) {
    echo "Zipcode is required";
    exit;
}

$phonenumber = $_POST['phonenumber'];
if (empty($phonenumber)) {
    echo "Phonenumber is required";
    exit;
}
$sql = "INSERT INTO users (firstname, lastname, email, password, role, address, city, zipcode, phonenumber) 
        VALUES ('$firstname','$lastname', '$email', '$password', '$role', '$address', '$city', '$zipcode',
                '$phonenumber')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
