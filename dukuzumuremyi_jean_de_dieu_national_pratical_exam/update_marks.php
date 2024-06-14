<?php
include "connection.php";

$marks_id = $_GET['marks_id'];

if(isset($_POST['update'])){

    $quiz_20 = $_POST['quiz_20'];
    $exam_40 = $_POST['exam_40'];
    $trainee_id = $_POST['trainee_id'];

        $update = mysqli_query($conn,"UPDATE marks SET quiz_20='$quiz_20',exam_40='$exam_40',tr_id='$trainee_id' WHERE m_id ='$marks_id'");

        if($update == TRUE){
            echo "Marks updated well";
            header('location:view_trainee_marks.php');
        }else{
            echo "Marks not updated well";
        }
}

$select = mysqli_query($conn,"SELECT * FROM marks WHERE m_id ='$marks_id'");
$fetch = mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Marks</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Update Marks</h2>
            <input type="text" name="quiz_20" id="" value="<?php echo $fetch['quiz_20']?>">
            <input type="text" name="exam_40" id="" value="<?php echo $fetch['exam_40']?>">
            <select name="trainee_id" id="">
                <?php

                $select = mysqli_query($conn,"SELECT * FROM trainee");

                while($fetch = mysqli_fetch_array($select)){
                    $trainee_id = $fetch['tr_id'];
                    $trainee_name = $fetch['tr_name'];

                    echo "<option value='$trainee_id'>$trainee_name</option>";
                }
                ?>

            </select>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>