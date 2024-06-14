<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container_insert">
        <form action="" method="post">
            <h2>Register </h2>
<!-- php codes-->
 <?php

 if(isset($_POST['save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = mysqli_query($conn,"INSERT INTO admin VALUES ('','$username','$password')");

    if($insert == TRUE){
        echo "<p class='good-message'>Admin inserted well</p>";
        header('refresh:1;url=login.php');
    }else{
        echo "<p class='bad-message'>Admin not inserted</p>";
    }
 }
 ?>
<!-- php codes-->
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" name="save">Register</button>
            <p>
                if you have account please <a href="login.php">Login</a>
            </p>
        </form>
    </div>
</body>
</html>