<?php
include "connection.php";
include "session.php";

$trainee_marks_id = $_GET['trainee_marks_id'];

if(isset($_POST['yes'])){

    $delete = mysqli_query($conn,"DELETE FROM marks WHERE Mark_Id  ='$trainee_marks_id'");

    if($delete == TRUE){
        echo "Trainee Marks well deleted";
        header('location:view_trainee_marks.php');
    }else{
        echo "Trainee Marks not delete";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Trade Marks</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Are sure you want to delete ?</h2>
            <input type="submit" name="yes" value="Yes">
            <button><a href="view_trainee_marks.php">No</a></button>
        </form>
    </div>
</body>
</html>