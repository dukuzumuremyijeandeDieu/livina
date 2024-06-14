<?php
include "connection.php";
include "session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Trainee</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
?>
    <div class="container_table">
        <h2>Table of Trainees</h2>
        <table border="2">

            <?php
            $select = mysqli_query($conn, "SELECT * FROM trainees JOIN trades ON (trainees.Trade_Id=trades.Trade_Id)");
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Trade_Name</th>
                <th colspan='3'>Action</th>
                </tr>
                ";

                $index = 1;
                while($fetch = mysqli_fetch_array($select)){
                    $Trainee_Id  = $fetch['Trainee_Id'];
                    $FirstName = $fetch['FirstName'];
                    $LastName = $fetch['LastName'];
                    $Gender = $fetch['Gender'];
                    $Trade_Id = $fetch['Trade_Id'];
                    $trade_name = $fetch['Trade_Name'];

                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$FirstName</td>
                    <td>$LastName</td>
                    <td>$Gender</td>
                    <td>$trade_name</td>
                    <td><a href='update_trainee.php?trainee_id=$Trainee_Id'>Update</a></td>
                    <td><a href='delete_trainee.php?trainee_id=$Trainee_Id'>Delete</a></td>
                    <td><a href='insert_trainee_marks.php?trainee_id=$Trainee_Id&trade_id=$Trade_Id'>Add Marks</a></td>
                    </tr>
                    ";
                    $index++;
                }
            }else{
                echo "not trade in ";
            }
            ?>
        </table>
    </div>
</body>
</html>