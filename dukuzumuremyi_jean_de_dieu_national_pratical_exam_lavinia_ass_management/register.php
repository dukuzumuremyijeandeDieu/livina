<?php
include "connection.php";

if(isset($_POST['save'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = mysqli_query($conn,"INSERT INTO users VALUES ('','$username',$password)");
    
    if($insert == TRUE){
        echo "User inseted well ";
        header('location:login.php');
    }else{
        echo "User not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>Register into LAVINIA</h2>
            <input type="text" name="username" placeholder="Enter your username">
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit" name="save">Register</button>
            <p>
                if you don have please <a href="login.php">Login</a>
            </p>
        </form>
    </div>
</body>
</html>