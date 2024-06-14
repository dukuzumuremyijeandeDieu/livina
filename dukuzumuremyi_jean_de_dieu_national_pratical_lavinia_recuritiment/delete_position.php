<?php
include "connection.php";
include "session.php";

$position_id = $_GET['position_id'];
if(isset($_POST['yes'])){
    $delete = mysqli_query($conn,"DELETE FROM position WHERE PostId='$position_id'");

    if($delete == TRUE){
        echo "<p class='good-message'>Position deleted well</p>";
        header('refresh:1;url=view_position.php');
    }else{
        echo "<p class='bad-message'>Position not deleted</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container_delete">
        <form action="" method="post">
            <h2>Are sure to delete ? </h2>
            <input type="submit" name="yes" value="Yes">
            <button><a href="view_position.php">No</a></button>
        </form>
    </div>
</body>
</html>