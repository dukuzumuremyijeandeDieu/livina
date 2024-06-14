<?php
include "connection.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = mysqli_query($conn,"SELECT * FROM users WHERE UserName='$username' AND Password='$password'");
    $count = mysqli_num_rows($select);

    if($count>0){
        echo "Welcome";
        header('location:dashboard.php');
    }else{
        echo "login failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Enter your UserName">
        <input type="password" name="password" placeholder="Enter your Password">
        <button type="submit" name="login">Login</button>
        <p>
            if you don't have account please <a href="register.php">Create account</a>
        </p>
        </form>
    </div>
</body>
</html>