<?php
include "connection.php";
include "session.php";

if(isset($_POST['insert'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $trainee_id = $_POST['trainee_id'];
    $gender = $_POST['gender'];

    $insert = mysqli_query($conn,"INSERT INTO trainees VALUES ('','$first_name','$last_name','$gender','$trainee_id')");
    
    if($insert == TRUE){
        echo "Trainee inseted well ";
        header('location:view_trainee.php');
    }else{
        echo "Trainee not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trainee</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Insert Trainee</h2>       
            <input type="text" name="first_name" placeholder="Enter your Frist Name">
            <input type="text" name="last_name" placeholder="Enter your Last Name">

            <select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <select name="trainee_id" id="">
                <?php

                $select = mysqli_query($conn, "SELECT * FROM trades");
                while($fetch = mysqli_fetch_array($select)){

                    $trade_id = $fetch['Trade_Id'];
                    $trade_name = $fetch['Trade_Name'];

                    echo " <option value='$trade_id'>$trade_id-$trade_name</option>";
                }
                ?>
            </select>
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>