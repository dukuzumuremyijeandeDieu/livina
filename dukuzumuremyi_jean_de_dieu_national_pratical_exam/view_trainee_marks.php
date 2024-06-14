<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Trainee</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>
    <div class="container_table">
        <table border="2">
            <?php
            $select = mysqli_query($conn,"SELECT * FROM marks JOIN trainee ON (marks.tr_id = trainee.tr_id)");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trainee Name</th>
                <th>Quiz_20</th>
                <th>Exam_40</th>
                <th>tr_id</th>
                <th colspan='2'>Action</th>
                </tr>
                ";

                $index=1;
                while($fetch = mysqli_fetch_array($select)){
                    $trainee_id = $fetch['tr_id'];
                    $trainee_name = $fetch['tr_name'];
                    $Quiz_20 = $fetch['quiz_20'];
                    $Exam_40 = $fetch['exam_40'];
                    $marks_id = $fetch['m_id'];

                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$trainee_name</td>
                    <td>$Quiz_20</td>
                    <td>$Exam_40</td>
                    <td><a href='update_marks.php?marks_id=$marks_id'>Update</td>
                    <td><a href='delete_marks.php?marks_id=$marks_id'>Delete</td>
                    </tr>
                    ";
                    $index++;
                }

            }else{
                echo "No Trainee in";
            }
            ?>
        </table>
    </div>
</body>
</html>