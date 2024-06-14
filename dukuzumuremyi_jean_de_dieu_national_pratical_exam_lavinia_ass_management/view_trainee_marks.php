<?php
include "connection.php";
include "session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Marks</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
?>
    <div class="container_table">
        <h2>Table of Marks of Student</h2>
        <table border="2">

            <?php
            $select = mysqli_query($conn, "SELECT * FROM marks JOIN users ON (marks.User_Id=users.User_Id) JOIN trades ON (marks.Trade_Id=trades.Trade_Id) JOIN trainees ON (marks.Trainee_Id=trainees.Trainee_Id) JOIN modules ON (marks.Module_Id = modules.Module_Id)");
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Trade_Id</th>
                <th>Module_Id</th>
                <th>User_Id</th>
                <th>Formative_Ass</th>
                <th>Summative_Ass</th>
                <th>Comprehensive_Ass</th>
                <th>Total_Marks_100</th>
                <th colspan='3'>Action</th>
                </tr>
                ";

                $index = 1;
                while($fetch = mysqli_fetch_array($select)){
                    $Mark_Id   = $fetch['Mark_Id'];
                    $Trainee_Id = $fetch['Trainee_Id'];
                    $first_name = $fetch['FirstName'];
                    $last_name = $fetch['LastName'];
                    $Trade_Id = $fetch['Trade_Id'];
                    $Trade_name = $fetch['Trade_Name'];
                    $Module_Id = $fetch['Module_Id'];
                    $Module_Name = $fetch['ModName'];
                    $User_Id = $fetch['User_Id'];
                    $username = $fetch['UserName'];
                    $Formative_Ass = $fetch['Formative_Ass'];
                    $Summative_Ass = $fetch['Summative_Ass'];
                    $Comprehensive_Ass = $fetch['Comprehensive_Ass'];
                    $Total_Marks_100 = $fetch['Total_Marks_100'];

                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$first_name</td>
                    <td>$last_name</td>
                    <td>$Trade_name</td>
                    <td>$Module_Name</td>
                    <td>$username</td>
                    <td>$Formative_Ass</td>
                    <td>$Summative_Ass</td>
                    <td>$Comprehensive_Ass</td>
                    <td>$Total_Marks_100</td>
                    <td><a href='update_trainee_marks.php?trainee_marks_id=$Mark_Id'>Update</a></td>
                    <td><a href='delete_trainee_marks.php?trainee_marks_id=$Mark_Id'>Delete</a></td>
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