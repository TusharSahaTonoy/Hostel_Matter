<?php

include_once("../config.php");

if(isset($_GET['s_id']))
{
    $s_id =$_GET['s_id'];
    $query="Select * from student_info where id='$s_id'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    echo json_encode($row);

}
else if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $p_address = $_POST['p_address'];
    $m_guardian_name = $_POST['m_guardian_name'];
    $m_phone = $_POST['m_phone'];
    $m_relation = $_POST['m_relation'];
    $l_guardian_name = $_POST['l_guardian_name'];
    $l_phone = $_POST['l_phone'];
    $l_relation = $_POST['l_relation'];

    $query="Update student_info set name='$name',phone='$phone',p_address='$p_address',m_guardian_name='$m_guardian_name',m_phone='$m_phone',m_relation='$m_relation',l_guardian_name='$l_guardian_name',l_phone='$l_phone',l_relation='$l_relation' where id='$id'";

    $result=mysqli_query($con,$query);
    echo $result;

}

?>