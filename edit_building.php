<?php

require_once("config.php");

$b_id =$_POST['b_id'];

if(isset($b_id))
{
    $query="Select * from building_info where id='"+$b_id+"'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    echo json_encode($row);
}

?>