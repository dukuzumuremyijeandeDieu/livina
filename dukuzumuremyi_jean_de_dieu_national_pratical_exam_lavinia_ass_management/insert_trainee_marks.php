<?php
include "connection.php";
include "session.php";

$username = $_SESSION['username'];
$selectuser = mysqli_query($conn,"SELECT * FROM users WHERE UserName='$username'");
$fetchuser = mysqli_fetch_array($selectuser);
$user_id = $fetchuser['User_Id'];

$trainee_id = $_GET['trainee_id'];
$trade_id = $_GET['trade_id'];

if(isset($_POST['insert'])){

    // $trainee_id = $_POST['trainee_id'];
    // $user_id = $_POST['user_id'];
    // $trade_id = $_POST['trade_id'];
    $module_id = $_POST['module_id'];
    $Formative_Ass = $_POST['Formative_Ass'];
    $Summative_Ass = $_POST['Summative_Ass'];
    $Comprehensive_Ass = $_POST['Comprehensive_Ass'];
    $total_marks_ass = (($Formative_Ass+$Summative_Ass+$Comprehensive_Ass)*100 / 300);
    // $total_marks_ass = $_POST['total_marks_ass'];

    $insert = mysqli_query($conn,"INSERT INTO marks VALUES ('','$trainee_id','$trade_id','$module_id','$user_id','$Formative_Ass','$Summative_Ass','$Comprehensive_Ass','$total_marks_ass')");
    
    if($insert == TRUE){
        echo "Trainee Marks inseted well ";
        header('location:view_trainee_marks.php');
    }else{
        echo "Trainee Marks not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trainee Marks</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Insert Trainee Marks</h2>       
            <select name="module_id" id="">
                <?php

                $select = mysqli_query($conn, "SELECT * FROM modules");
                while($fetch = mysqli_fetch_array($select)){

                    $Module_Id  = $fetch['Module_Id'];
                    $ModName = $fetch['ModName'];

                    echo " <option value='$Module_Id'>$ModName</option>";
                }
                ?>
            </select>
            <input type="number" name="Formative_Ass" placeholder="Enter Formative_Ass">
            <input type="number" name="Summative_Ass" placeholder="Enter Summative_Ass">
            <input type="number" name="Comprehensive_Ass" placeholder="Enter Comprehensive_Ass">
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>