<?php
include "connection.php";
include "session.php";

if(isset($_POST['insert'])){

    $module_name = $_POST['module_name'];
    $module_credits = $_POST['module_credits'];

    $insert = mysqli_query($conn,"INSERT INTO modules VALUES ('','$module_name','$module_credits')");
    
    if($insert == TRUE){
        echo "Module inseted well ";
        header('location:view_module.php');
    }else{
        echo "Module not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Module</title>
</head>
<body>
<?php
    include "header.php";
    include "navbar.php";
 ?>
    <div class="container">
        <form action="" method="POST">
            <h2>Insert Module</h2>       
            <input type="text" name="module_name" placeholder="Enter your Module Name">
            <input type="text" name="module_credits" placeholder="Enter your Module Credits">
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
</body>
</html>