<?php
include "connection.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Position</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "header.php";
    include "navbar.php";
    ?>
    <div class="container_tabel">
    
            <h2>Report of All Candidate Result</h2>
            <table border="1">
                <?php
                $select = mysqli_query($conn,"SELECT * FROM candidateresult JOIN position ON (candidateresult.PostId=position.PostId)");
                
                if(mysqli_num_rows($select)){
                    echo "
                    <tr>
                    <th>Index</th>
                    <th>CandidateNationalId</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Gender</th>
                    <th>DateOfBirth</th>
                    <th>Position Name</th>
                    <th>ExamDate</th>
                    <th>PhoneNumber</th>
                    </tr>
                    ";
    
                    $index = 1;
                    while($fetch = mysqli_fetch_array($select)){
                        $CandidateNationalId = $fetch['CandidateNationalId'];
                        $FirstName = $fetch['FirstName'];
                        $LastName = $fetch['LastName'];
                        $Gender = $fetch['Gender'];
                        $DateOfBirth = $fetch['DateOfBirth'];
                        $ExamDate = $fetch['ExamDate'];
                        $PhoneNumber = $fetch['Phone_Number'];
                        $post_name = $fetch['PostName'];

                        echo "
                        <tr>
                        <td>$index</td>
                        <td>$CandidateNationalId</td>
                        <td>$FirstName</td>
                        <td>$LastName</td>
                        <td>$Gender</td>
                        <td>$DateOfBirth</td>
                        <td>$post_name</td>
                        <td>$ExamDate</td>
                        <td>$PhoneNumber</td>
                        </tr>
                        ";
    
                        $index++;
                    }
                }else{
                    echo "<p class='bad-message'> No Position</p>";
                }
                ?>
            </table>
        
    </div>
</body>
</html>