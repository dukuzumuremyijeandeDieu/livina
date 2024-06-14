<?php
include "connection.php";
include "session.php";

$trade_id = $_GET['trade_id'];

if(isset($_POST['update'])){

    $trade_name = $_POST['trade_name'];

    $update = mysqli_query($conn,"UPDATE trades SET Trade_Name='$trade_name' WHERE Trade_Id ='$trade_id'");
    
    if($update == TRUE){
        echo "Trade updated well ";
        header('location:view_trade.php');
    }else{
        echo "Trade not updates";
    }

}
$select = mysqli_query($conn, "SELECT * FROM trades WHERE Trade_Id ='$trade_id'");
$fetch = mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trade</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Update Trade</h2>
            <input type="text" name="trade_name" value="<?php echo $fetch['Trade_Name'];?>">
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>