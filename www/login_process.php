<?php
if (!isset($_POST['email'])) {
    echo "email is required";
    exit;
}
if (empty($_POST['email'])) {
    echo "email is required";
    exit;
}
if (!isset($_POST['password'])) {
    echo "password is required";
    exit;
}
if (empty($_POST['password'])) {
    echo "password is required";
    exit;
}
$email = $_POST['email'];
$password = $_POST['password'];

require 'database_connection.php';
$sql = "SELECT * FROM users WHERE email ='$email'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if (is_array($user)) {
    if ($password == $user['password']) {

        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['role'] = $user['role'];


        if ($user['role'] == 'admin') {
            header('Location: admin-dashboard.php');
            exit;
        }

        if ($user['role'] == 'user') {
            header('Location: user-dashboard.php');
            exit;
        }
        exit;
    }
}

header('Location: login.php?error=wrong');
exit;
