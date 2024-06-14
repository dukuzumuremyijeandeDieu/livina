<?php
include "connection.php";
include "session.php";

$trade_id = $_GET['trade_id'];

if(isset($_POST['yes'])){

    $delete = mysqli_query($conn,"DELETE FROM `trades` WHERE Trade_Id  ='$trade_id'");

    if($delete == TRUE){
        echo "Trade well deleted";
        header('location:view_trade.php');
    }else{
        echo "Trade not delete";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Trade</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Are sure you want to delete ?</h2>
            <input type="submit" name="yes" value="Yes">
            <button><a href="view_trade.php">No</a></button>
        </form>
    </div>
</body>
</html>