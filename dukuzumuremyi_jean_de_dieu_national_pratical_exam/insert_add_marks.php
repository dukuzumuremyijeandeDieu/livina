<?php
include "connection.php";

if(isset($_POST['insert'])){

    $quiz_20 = $_POST['quiz_20'];
    $exam_40 = $_POST['exam_40'];
    $trainee_id = $_POST['trainee_id'];

    $insert = mysqli_query($conn,"INSERT INTO marks VALUES ('','$quiz_20','$exam_40','$trainee_id')");

    if($insert == TRUE ){
        echo "Marks well inserted";
        header('location:view_trainee_marks.php');
    }else{
        echo "Marks not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Marks</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Insert Marks</h2>
            <input type="text" name="quiz_20" id="" placeholder="Enter Marks of Quiz on 20%">
            <input type="text" name="exam_40" id="" placeholder="Enter Marks of Exam on 40%">
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
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>