<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container_insert">
        <form action="" method="post">
            <h2>Login </h2>
<!-- php codes-->
 <?php
 include "connection.php";
session_start();

 if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = mysqli_query($conn,"SELECT * FROM admin WHERE UserName='$username' AND Password='$password'");

    if(mysqli_num_rows($select)){
        $_SESSION['username'] = $username;
        echo "<p class='good-message'>Admin welcome</p>";
        header('refresh:5;url=dashboard.php');
    }else{
        echo "<p class='bad-message'>Admin login failed</p>";
    }
 }
 ?>
<!-- php codes-->
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" name="login">Login</button>
            <p>
                if you have account please <a href="register.php">Create account</a>
            </p>
        </form>
    </div>

</body>
</html>