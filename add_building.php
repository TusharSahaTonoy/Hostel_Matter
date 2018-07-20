<?php

include_once("config.php");


$name = $_POST['b_name'];
$no = $_POST['b_no'];

if(isset($name)&&isset($no))
{
    $query = "Insert into building_info values(null,'$name','$no')";
    $result=mysqli_query($con,$query);

    if($result)
        echo "Insert successful";
    else
        echo "Not inserted";
}
else
    echo "name and no not set";

?>
