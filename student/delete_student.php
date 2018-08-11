<?php

include_once("../config.php");

if(isset($_GET['s_id']))
{
    $s_id =$_GET['s_id'];
    $query="Select * from student_info where id='$s_id'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    echo json_encode($row);

}
else if(isset($_POST['s_id']))
{
    $s_id =$_POST['s_id'];

    $query="DELETE FROM student_info WHERE id='$s_id'";
    $result=mysqli_query($con,$query);
    
    echo $result;
}


?>