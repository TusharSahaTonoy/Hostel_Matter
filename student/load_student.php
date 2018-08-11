<?php

include_once("../config.php");

$query="SELECT * FROM student_info";

$result=mysqli_query($con,$query);

echo "
<thead>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Phone No</th>
    <th>Parmanent Address</th>
    <th>Main Guardian Name</th>
    <th>Main Guardian Phone</th>
    <th>Relation</th>
    <th>Local Guardian Name</th>
    <th>Local Guardian Phone</th>
    <th>Relation</th>
    <th></th>
    <th></th>
</tr>
</thead>
<tbody>
";

while($res= mysqli_fetch_assoc($result))
{
    
    echo "
    <tr>
        <td>".$res['id']."</td>
        <td>".$res['name']."</td>
        <td>".$res['phone']."</td>
        <td>".$res['p_address']."</td>
        <td>".$res['m_guardian_name']."</td>
        <td>".$res['m_phone']."</td>
        <td>".$res['m_relation']."</td>
        <td>".$res['l_guardian_name']."</td>
        <td>".$res['l_phone']."</td>
        <td>".$res['l_relation']."</td>
        <td><button id='".$res['id'] ."' class='s_update btn btn-warning' data-toggle='modal' data-target='#edit_student_modal'>Update</button></td>
        <td><button id='".$res['id'] ."' class='s_delete btn btn-danger' data-toggle='modal' data-target='#delete_student_modal'>Delete</button></td>
    </tr>";
}
echo "</tbody>";


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