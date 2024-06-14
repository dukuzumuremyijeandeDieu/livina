<?php
include "connection.php";
include "session.php";

$candidate_national_id = $_GET['candidate_national_id'];
$select = mysqli_query($conn,"SELECT * FROM candidateresult WHERE CandidateNationalId='$candidate_national_id'");
$fetch = mysqli_fetch_array($select);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Candidate Result</title>
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
<h2 style="font-size: 20px;text-align: center;">Update CandidatesResult</h2>  
</div>       
<!-- php codes-->
 <?php

 if(isset($_POST['update'])){

    $CandidateNationalId = $_POST['CandidateNationalId'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $gender = $_POST['gender'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $PostId = $_POST['PostId'];
    $ExamDate = $_POST['ExamDate'];

    $update = mysqli_query($conn,"UPDATE candidateresult SET CandidateNationalId='$CandidateNationalId',FirstName='$FirstName',LastName='$LastName',Gender='$gender',DateOfBirth='$DateOfBirth',PostId='$PostId',ExamDate='$ExamDate' WHERE CandidateNationalId='$candidate_national_id'");

    if($update == TRUE){
        echo "<p class='good-message-big'>Candidate Result updated well</p>";
        header('refresh:1;url=view_candidate_result.php');
    }else{
        echo "<p class='bad-message-big'>Candidate Result not update</p>";
    }
 }
 ?>
<!-- php codes-->
<div class="row">
            <input type="text" name="CandidateNationalId" value="<?php  echo $fetch['CandidateNationalId']?>" required>
            <input type="text" name="FirstName" value="<?php  echo $fetch['FirstName']?>" required>
            <input type="text" name="LastName" value="<?php  echo $fetch['LastName']?>" required>

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
            <input type="date" name="ExamDate" value="<?php  echo $fetch['ExamDate']?>" required>
        </div>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>