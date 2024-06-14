<?php
include "connection.php";
include "session.php";

$module_id = $_GET['module_id'];

if(isset($_POST['update'])){

    $module_name = $_POST['module_name'];
    $module_credits = $_POST['module_credits'];

    $update = mysqli_query($conn,"UPDATE modules SET ModName='$module_name',ModCredits='$module_credits' WHERE Module_Id ='$module_id'");
    
    if($update == TRUE){
        echo "Trade updated well ";
        header('location:view_module.php');
    }else{
        echo "Trade not updates";
    }

}
$select = mysqli_query($conn, "SELECT * FROM modules WHERE Module_Id ='$module_id'");
$fetch = mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trade</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Update Trade</h2>
            <input type="text" name="module_name" value="<?php echo $fetch['ModName'];?>">
            <input type="text" name="module_credits" value="<?php echo $fetch['ModCredits'];?>">
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>