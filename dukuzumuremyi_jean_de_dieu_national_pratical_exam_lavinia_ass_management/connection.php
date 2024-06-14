<?php
$conn = mysqli_connect('localhost','root','','trainees_ass_management');
if($conn == TRUE){
    echo "well connected";
}else{
    echo "not connected";
}
?>