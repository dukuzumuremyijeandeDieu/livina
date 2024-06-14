<?php
include "connection.php";
include "session.php";

if(isset($_POST['insert'])){
    $trade_name = $_POST['trade_name'];

    $insert = mysqli_query($conn,"INSERT INTO trades VALUES ('','$trade_name')");
    
    if($insert == TRUE){
        echo "Trade inseted well ";
        header('location:view_trade.php');
    }else{
        echo "Trade not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trade</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Insert Trade</h2>
            <input type="text" name="trade_name" placeholder="Enter your Trade Name">
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>