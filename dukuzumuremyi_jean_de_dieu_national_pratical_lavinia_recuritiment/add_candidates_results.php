<?php
include "connection.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert CandidatesResult</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>

<div id="container_insert_big" class="container_insert_big">
  
<form action="" method="post">
<div class="heading">
<h2 style="font-size: 20px;text-align: center;">Insert CandidatesResult</h2>  
</div>        
<!-- php codes-->
 <?php

 if(isset($_POST['insert'])){

    $CandidateNationalId = $_POST['CandidateNationalId'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $gender = $_POST['gender'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $PostId = $_POST['PostId'];
    $ExamDate = $_POST['ExamDate'];
    $PhoneNumber = $_POST['PhoneNumber'];

    $insert = mysqli_query($conn,"INSERT INTO candidateresult VALUES ('$CandidateNationalId','$FirstName','$LastName','$gender','$DateOfBirth','$PostId','$ExamDate','$PhoneNumber')");

    if($insert == TRUE){
        echo "<p class='good-message-big'>CandidatesResult inserted well</p>";
        header('refresh:1;url=view_candidate_result.php');
    }else{
        echo "<p class='bad-message-big'>CandidatesResult not inserted</p>";
    }
 }
 ?>
<!-- php codes-->
        <div class="row">
            <input type="text" name="CandidateNationalId" placeholder="Enter your CandidateNationalId" required>
            <input type="text" name="FirstName" placeholder="Enter your FirstName" required>
            <input type="text" name="LastName" placeholder="Enter your LastName" required>

            <label for="">Enter your Gender</label>
            <select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="row">
            <label for="">Enter your DateOfBirth</label>
            <input type="date" name="DateOfBirth" placeholder="Enter your DateOfBirth" required>

            <label for="">Enter your Position</label>
            <select name="PostId" id="">
                <?php
                $select = mysqli_query($conn,"SELECT * FROM position");
                while($fetch = mysqli_fetch_array($select)){
                    $post_id = $fetch['PostId'];
                    $post_name = $fetch['PostName'];

                    echo "<option value='$post_id'>$post_name</option>";
                }
                ?>

            </select>

            <label for="">Enter your Exam Date</label>
            <input type="date" name="ExamDate" placeholder="Enter your ExamDate" required>
            <input type="PhoneNumber" name="PhoneNumber" placeholder="Enter your PhoneNumber" required>
        </div>
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>