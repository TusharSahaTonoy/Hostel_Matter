<?php

require_once("config.php");

$query = "Select * from building_info";

$result = mysqli_query($con,$query);


echo "<thead>
<tr class='success'>
    <th>ID</th>
    <th>Building Name</th>
    <th>Building No</th>
    <th></th>
    <th></th>
</tr>
</thead>
<tbody>";
while($row=mysqli_fetch_array($result))
{
    echo "
    <tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['b_name'] . "</td>
        <td>" . $row['b_no'] . "</td>
        <td><button id='".$row['id'] ."' class='b_update btn btn-warning' data-toggle='modal' data-target='#edit_modal'>Update</button></td>
        <td><button id='".$row['id'] ."' class='b_delete btn btn-danger' data-toggle='modal' data-target='#myModal'>Delete</button></td>
    </tr>";
}
echo "</tbody>"
?>