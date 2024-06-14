<?php
include "connection.php";
include "session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Modules</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
?>
    <div class="container_table">
        <h2>Table of Modules</h2>
        <table border="2">

            <?php
            $select = mysqli_query($conn, "SELECT * FROM modules");
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Module Name</th>
                <th>Module Credits</th>
                <th colspan='2'>Action</th>
                </tr>
                ";

                $index = 1;
                while($fetch = mysqli_fetch_array($select)){

                    $module_id = $fetch['Module_Id'];
                    $module_name = $fetch['ModName'];
                    $module_credits = $fetch['ModCredits'];

                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$module_name</td>
                    <td>$module_credits</td>
                    <td><a href='update_module.php?module_id=$module_id'>Update</a></td>
                    <td><a href='delete_module.php?module_id=$module_id'>Delete</a></td>
                    </tr>
                    ";
                    $index++;
                }
            }else{
                echo "not Module in ";
            }
            ?>
        </table>
    </div>
</body>
</html>