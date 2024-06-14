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
            $select = mysqli_query($conn,"SELECT * FROM trainee");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trainee Name</th>
                <th>Gender</th>
                <th colspan='2'>Action</th>
                </tr>
                ";

                $index=1;
                while($fetch = mysqli_fetch_array($select)){
                    $trainee_id = $fetch['tr_id'];
                    $tr_name = $fetch['tr_name'];
                    $tr_gender = $fetch['tr_gender'];

                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$tr_name</td>
                    <td>$tr_gender</td>
                    <td><a href='update_trainee.php?trainee_id=$trainee_id'>Update</td>
                    <td><a href='delete_trainee.php?trainee_id=$trainee_id'>Delete</td>
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