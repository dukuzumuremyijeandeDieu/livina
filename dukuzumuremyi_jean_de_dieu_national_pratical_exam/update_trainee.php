<?php
include "connection.php";

$trainee_id = $_GET['trainee_id'];

if(isset($_POST['update'])){

        $names = $_POST['names'];
        $gender = $_POST['gender'];

        $update = mysqli_query($conn,"UPDATE trainee SET tr_name='$names',tr_gender='$gender' WHERE tr_id='$trainee_id'");

        if($update == TRUE){
            echo "updated well";
            header('location:view_trainee.php');
        }else{
            echo "not updated well";
        }
}

$select = mysqli_query($conn,"SELECT * FROM trainee WHERE tr_id='$trainee_id'");
$fetch = mysqli_fetch_array($select);
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
    <?php
    include "header.php";
    include "navbar.php";
    ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Update Trainee</h2>
            <input type="text" name="names" value="<?php echo $fetch['tr_name'];?>">
            <select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>