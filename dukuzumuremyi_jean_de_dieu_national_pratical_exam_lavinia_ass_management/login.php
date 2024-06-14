<?php
include "connection.php";
session_start();

if(isset($_POST['save'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = mysqli_query($conn,"SELECT * FROM users WHERE UserName='$username' AND Password='$password'");
    
    if(mysqli_num_rows($select)>0){
        $_SESSION['username'] = $username;
        echo "welcome";
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
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>Login into LAVINIA</h2>
            <input type="text" name="username" placeholder="Enter your username">
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit" name="save">Login</button>
            <p>
                if you don have please <a href="register.php">Register</a>
            </p>
        </form>
    </div>
</body>
</html>