<?php

include_once("../config.php");

if(isset($_GET['b_id']))
{
    $b_id =$_GET['b_id'];
    $query="Select * from building_info where id='$b_id'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    echo json_encode($row);

}
else if(isset($_POST['b_id']))
{
    $b_id =$_POST['b_id'];

    $query="Delete from building_info where id='$b_id'";
    $result=mysqli_query($con,$query);
    if($result)
        echo $result;
    else
        echo "Something Wrong";
}


?>