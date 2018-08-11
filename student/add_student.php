<?php

include_once("../config.php");

    //generate id---------

    $query = "SELECT * FROM student_info ORDER BY id DESC limit 1;";
    $result= mysqli_query($con,$query);
    $res = mysqli_fetch_assoc($result);
    $id="s".date("y").date("m")."_".(substr($res['id'],6) + 1);

    //----------------------

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $p_address = $_POST['p_address'];
    $m_guardian_name = $_POST['m_guardian_name'];
    $m_phone = $_POST['m_phone'];
    $m_relation = $_POST['m_relation'];
    $l_guardian_name = $_POST['l_guardian_name'];
    $l_phone = $_POST['l_phone'];
    $l_relation = $_POST['l_relation'];

    $query="INSERT INTO student_info values('$id','$name','$phone','$p_address','$m_guardian_name','$m_phone','$m_relation','$l_guardian_name','$l_phone','$l_relation');";

    $result=mysqli_query($con,$query);
    echo $result;

/*
Student
    id 
	name
	phone                   
	permanet address        p_address
	main guardian name      m_guardian_name
	main guardian number    m_phone
	relation                m_relation
	local guardian name     l_guardian_name
	local guardian number   l_phone
	relation                l_relation
*/
?>
