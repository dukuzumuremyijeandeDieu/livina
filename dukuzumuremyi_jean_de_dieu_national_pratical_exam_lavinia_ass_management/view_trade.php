<?php
include "connection.php";
include "session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Trade</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
?>
    <div class="container_table">
        <h2>Table of Trades</h2>
        <table border="2">

            <?php
            $select = mysqli_query($conn, "SELECT * FROM trades");
            if(mysqli_num_rows($select)){
                echo "
                <tr>
                <th>Index</th>
                <th>Trade Name</th>
                <th colspan='2'>Action</th>
                </tr>
                ";

                $index = 1;
                while($fetch = mysqli_fetch_array($select)){
                    $trade_id = $fetch['Trade_Id'];
                    $trade_name = $fetch['Trade_Name'];

                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$trade_name</td>
                    <td><a href='update_trade.php?trade_id=$trade_id'>Update</a></td>
                    <td><a href='delete_trade.php?trade_id=$trade_id'>Delete</a></td>
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