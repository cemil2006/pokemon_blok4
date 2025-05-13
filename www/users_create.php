<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="users_create_process.php" method="post">
    <div class="form-control">
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname" class="form-control" required> 
    </div>

    <div class="form-control">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control" required> 
    </div>

    <div class="form-control">
        <label for="email">email</label>
        <input type="text" name="email" id="email" class="form-control" required> 
    </div>
    
    <div class="form-control">
        <label for="password">password</label>
        <input type="text" name="password" id="password" class="form-control" required> 
    </div>

    <div class="form-control">
        <label for="role">role</label>
        <input type="text" name="role" id="role" class="role" required> 
    </div>

    <div class="form-control">
        <label for="address">address</label>
        <input type="text" name="address" id="address" class="form-control" required> 
    </div>

    <div class="form-control">
        <label for="city">city</label>
        <input type="text" name="city" id="city" class="form-control" required> 
    </div>

    <div class="form-control">
        <label for="zipcode">zipcode</label>
        <input type="text" name="zipcode" id="zipcode" class="form-control" required> 
    </div>
    <div class="form-control">
        <label for="phonenumber">phonenumber</label>
        <input type="text" name="phonenumber" id="phonenumber" class="form-control" required> 
    </div>
    <button type="submit">Create</button>
    </form>
</body>
</html>