<?php
include "connection.php";
include "session.php";

$trainee_id = $_GET['trainee_id'];

if(isset($_POST['yes'])){

    $delete = mysqli_query($conn,"DELETE FROM trainees WHERE Trainee_Id  ='$trainee_id'");

    if($delete == TRUE){
        echo "Trainee well deleted";
        header('location:view_trainee.php');
    }else{
        echo "Trainee not delete";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Trainee</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Are sure you want to delete ?</h2>
            <input type="submit" name="yes" value="Yes">
            <button><a href="view_trainee.php">No</a></button>
        </form>
    </div>
</body>
</html>