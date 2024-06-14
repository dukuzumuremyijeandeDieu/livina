<?php
include "connection.php";
include "session.php";

$module_id = $_GET['module_id'];

if(isset($_POST['yes'])){

    $delete = mysqli_query($conn,"DELETE FROM modules WHERE Module_Id ='$module_id'");

    if($delete == TRUE){
        echo "Trade deleted well ";
        header('location:view_module.php');
    }else{
        echo "Trade not deleted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Module</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Are sure you want to delete ?</h2>
            <input type="submit" name="yes" value="Yes">
            <button><a href="view_module.php">No</a></button>
        </form>
    </div>
</body>
</html>