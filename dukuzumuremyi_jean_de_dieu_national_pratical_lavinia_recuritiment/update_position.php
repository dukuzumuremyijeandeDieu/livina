<?php
include "connection.php";
include "session.php";

$position_id = $_GET['position_id'];
$select = mysqli_query($conn,"SELECT * FROM position WHERE PostId='$position_id'");
$fetch = mysqli_fetch_array($select);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Position</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>
    <div class="container_insert">
        <form action="" method="post">
            <h2>Update Position </h2>
<!-- php codes-->
 <?php

 if(isset($_POST['update'])){
    $position_name = $_POST['position'];

    $update = mysqli_query($conn,"UPDATE position SET PostName='$position_name' WHERE PostId='$position_id'");

    if($update == TRUE){
        echo "<p class='good-message'>Position updated well</p>";
        header('refresh:1;url=view_position.php');
    }else{
        echo "<p class='bad-message'>Position not update</p>";
    }
 }
 ?>
<!-- php codes-->
            <input type="text" name="position" value="<?php  echo $fetch['PostName']?>" required>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>