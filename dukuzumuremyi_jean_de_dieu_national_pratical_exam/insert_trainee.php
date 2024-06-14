<?php
include "connection.php";

if(isset($_POST['insert'])){
    $names = $_POST['names'];
    $gender = $_POST['gender'];

    $insert = mysqli_query($conn,"INSERT INTO trainee VALUES ('','$names','$gender')");

    if($insert == TRUE ){
        echo "Well inserted";
        header('location:view_trainee.php');
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
    <title>Insert Trainee</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Insert Trainee</h2>
            <input type="text" name="names" placeholder="Enter you Trainee Names">
            <select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>