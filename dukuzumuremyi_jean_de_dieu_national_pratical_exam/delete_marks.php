<?php
include "connection.php";

$marks_id = $_GET['marks_id'];

if(isset($_POST['yes'])){
    
    $delete = mysqli_query($conn,"DELETE FROM marks WHERE m_id='$marks_id'");

    if($delete == TRUE){
        echo "Trainee deleted well";
        header('location:view_trainee_marks.php');
    }else{
        echo "Trainee not deleted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Are sure to delete?</h2>
            <input type="submit" name="yes" value="Yes">
            <button><a href="view_trainee.php">No</a></button>
        </form>
    </div>
</body>
</html>
