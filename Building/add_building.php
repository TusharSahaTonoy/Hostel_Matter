<?php

include_once("../config.php");

//generate id------------

$query = "SELECT * FROM building_info ORDER BY id DESC limit 1;";

$result= mysqli_query($con,$query);
$res = mysqli_fetch_assoc($result);
$id="b".date("y").date("m")."_".(substr($res['id'],6) + 1);
//--------------------



$name = $_POST['b_name'];
$no = $_POST['b_no'];

if(isset($name)&&isset($no))
{
    $query = "Insert into building_info values('$id','$name','$no')";
    $result=mysqli_query($con,$query);

    echo $result;
}
else
    echo "name and no not set";

?>
