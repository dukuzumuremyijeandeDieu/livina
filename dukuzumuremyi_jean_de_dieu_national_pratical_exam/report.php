<?php
include "connection.php";
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
    <div class="buttons">
        <button id='male_trainee'>All MaleTrainees</button>
        <button id='female_trainee'>All Females Trainee</button>
        <button id='trainee_below_15'>All Trainee Below 15 in Quiz</button>
        <button id='trainee_above_35'>All Trainee Above 35 in Exams</button>
        <button id='trainee_below_10'>All Trainee Below 10 in Exams</button>
    </div>

    <div id="male">
        <h2>All MaleTrainees</h2>
        <table border="2">
            <?php
            $select = mysqli_query($conn,"SELECT * FROM marks JOIN trainee ON (marks.tr_id = trainee.tr_id) WHERE tr_gender='male'");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trainee Name</th>
                <th>Quiz_20</th>
                <th>Exam_40</th>
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

    <div id="female" style="display:none;">
        <h2>All FemaleTrainees</h2>
        <table border="2">
            <?php
            $select = mysqli_query($conn,"SELECT * FROM marks JOIN trainee ON (marks.tr_id = trainee.tr_id) WHERE tr_gender='female'");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trainee Name</th>
                <th>Quiz_20</th>
                <th>Exam_40</th>
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

    <div id="below_15_quiz" style="display:none;">
        <h2>All Trainees  Below 15 in Quiz</h2>
        <table border="2">
            <?php
            $select = mysqli_query($conn,"SELECT * FROM marks JOIN trainee ON (marks.tr_id = trainee.tr_id) WHERE quiz_20 < 15 ");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trainee Name</th>
                <th>Quiz_20</th>
                <th>Exam_40</th>
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

    <div id="above_35_exam" style="display:none;">
        <h2>All Trainee Above 35 in Exams</h2>
        <table border="2">
            <?php
            $select = mysqli_query($conn,"SELECT * FROM marks JOIN trainee ON (marks.tr_id = trainee.tr_id) WHERE exam_40 > 35");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trainee Name</th>
                <th>Quiz_20</th>
                <th>Exam_40</th>
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

    <div id="below_10_exam" style="display:none;">
        <h2>All Trainee below 10 in Exams</h2>
        <table border="2">
            <?php
            $select = mysqli_query($conn,"SELECT * FROM marks JOIN trainee ON (marks.tr_id = trainee.tr_id) WHERE exam_40 < 10");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trainee Name</th>
                <th>Quiz_20</th>
                <th>Exam_40</th>
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
    <script src="main.js"></script>
</body>
</html>