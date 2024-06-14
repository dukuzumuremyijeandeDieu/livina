<?php
include "connection.php";
include "session.php";

$trainee_id = $_GET['trainee_id'];

if(isset($_POST['update'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $trade_id = $_POST['trade_id'];
    $gender = $_POST['gender'];

    $update = mysqli_query($conn,"UPDATE trainees SET FirstName='$first_name',LastName='$last_name',Gender='$gender',Trade_Id='$trade_id' WHERE Trainee_Id  ='$trainee_id'");
    
    if($update == TRUE){
        echo "Trainee updated well ";
        header('location:view_trainee.php');
    }else{
        echo "Trainee not updated";
    }

}
$select = mysqli_query($conn, "SELECT * FROM trainees WHERE Trainee_Id ='$trainee_id'");
$fetch = mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trainee</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Update Trainee</h2>       
            <input type="text" name="first_name" value="<?php echo $fetch['FirstName'];?>">
            <input type="text" name="last_name" value="<?php echo $fetch['LastName'];?>">

            <select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <select name="trade_id" id="">
                <?php

                $select = mysqli_query($conn, "SELECT * FROM trades");
                while($fetch = mysqli_fetch_array($select)){

                    $trade_id = $fetch['Trade_Id'];
                    $trade_name = $fetch['Trade_Name'];

                    echo " <option value='$trade_id'>$trade_id-$trade_name</option>";
                }
                ?>
            </select>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>