<?php
include "connection.php";
include "session.php";

$trainee_marks_id = $_GET['trainee_marks_id'];

if(isset($_POST['update'])){

    $module_id = $_POST['module_id'];
    $formative_ass = $_POST['formative_ass'];
    $summative_ass = $_POST['summative_ass'];
    $comprehensive_ass = $_POST['comprehensive_ass'];
    $total_marks = (($formative_ass+$summative_ass+$comprehensive_ass) * 100 /300);

    $update = mysqli_query($conn,"UPDATE marks SET Module_Id='$module_id',Formative_Ass='$formative_ass',Summative_Ass='$summative_ass',Comprehensive_Ass='$comprehensive_ass',Total_Marks_100='$total_marks' WHERE Mark_Id='$trainee_marks_id'");
    
    if($update == TRUE){
        echo "Trainee Marks updated well ";
        header('location:view_trainee_marks.php');
    }else{
        echo "Trainee Marks not updated";
    }

}
$select = mysqli_query($conn, "SELECT * FROM marks WHERE Mark_Id='$trainee_marks_id'");
$fetch = mysqli_fetch_array($select);

$Formative_Ass = $fetch['Formative_Ass'];
$Summative_Ass = $fetch['Summative_Ass'];
$Comprehensive_Ass = $fetch['Comprehensive_Ass'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trainee Marks</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Update Trainee Marks</h2>       
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
            <input type="text" name="formative_ass" value="<?php echo $Formative_Ass?>">
            <input type="text" name="summative_ass" value="<?php echo $Summative_Ass?>">
            <input type="text" name="comprehensive_ass" value="<?php echo $Comprehensive_Ass?>">

            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>