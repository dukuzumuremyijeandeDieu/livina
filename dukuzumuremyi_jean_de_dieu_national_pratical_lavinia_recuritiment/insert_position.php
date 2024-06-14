<?php
include "connection.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Position</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>

<div class="container_insert">
        <form action="" method="post">
            <h2>Register </h2>
<!-- php codes-->
 <?php

 if(isset($_POST['insert'])){
    $position = $_POST['position'];

    $insert = mysqli_query($conn,"INSERT INTO position VALUES ('','$position')");

    if($insert == TRUE){
        echo "<p class='good-message'>Position inserted well</p>";
        header('refresh:1;url=view_position.php');
    }else{
        echo "<p class='bad-message'>Position not inserted</p>";
    }
 }
 ?>
<!-- php codes-->
            <input type="text" name="position" placeholder="Enter your Position" required>
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>