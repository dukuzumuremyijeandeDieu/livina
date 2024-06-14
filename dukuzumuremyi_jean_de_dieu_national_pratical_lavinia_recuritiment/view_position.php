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
        <h2>Table of All Positions</h2>
        <table border="1">
            <?php
            $select = mysqli_query($conn,"SELECT * FROM position");
            
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Position Name</th>
                <th colspan='2'>Action</th>
                </tr>
                ";

                $index = 1;
                while($fetch = mysqli_fetch_array($select)){
                    $post_id = $fetch['PostId'];
                    $post_name = $fetch['PostName'];

                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$post_name</td>
                    <td><a href='update_position.php?position_id=$post_id'><button class='good_btn' style='color: green;padding: 9px 13px;background: #0cc90cb3;border-radius: 10px;font-size: 15px;border: none;cursor: pointer;'>Update</button</a></td>
                    <td><a href='delete_position.php?position_id=$post_id'><button class='bad_btn' style='color: #da2713;padding: 9px 13px;background: #f6240782;border-radius: 10px;font-size: 15px;border: none;cursor: pointer;'>Delete</button></a></td>
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