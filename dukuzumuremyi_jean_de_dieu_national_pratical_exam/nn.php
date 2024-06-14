<?php
include "connection.php";

if(isset($_POST['save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = mysqli_query($conn,"INSERT INTO users VALUES ('','$username','$password')");

    if($insert == TRUE ){
        echo "Well inserted";
        header('location:login.php');
    }else{
        echo "not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <h2>Register</h2>
        <input type="text" name="username" placeholder="Enter your UserName">
        <input type="password" name="password" placeholder="Enter your Password">
        <button type="submit" name="save">Register</button>
        <p>
            if you have account please <a href="login.php">Login</a>
        </p>
        </form>
    </div>
</body>
</html>