<?php
 // check if user is logged in
 session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
//als de gebruiker geen admin is, wordt hij doorgestuurd naar het dashboard van een normale gebruiker
if($_SESSION['role'] != 'admin'){
    header('Location: user-dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    welcome <?php echo $_SESSION['firstname']; ?>

    <a href="logout.php">loguit</a></body>
</html>