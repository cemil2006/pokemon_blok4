<?php

if (isset($_GET['error'])) {
    $message = "Wrong email or password";
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
    <form action="login_process.php" method="post">
        <div class="form-login">
            <label for="email">email</label>
            <input type="text" name="email" id="email" class="form-login" required>
        </div>
        <div class="form-login">
            <label for="password">password</label>
            <input type="password" name="password" id="password" class="form-login" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <?php if (isset($message)) {
        echo $message;
    }

    ?>
</body>

</html>