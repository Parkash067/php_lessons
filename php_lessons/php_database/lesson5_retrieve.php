<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 7/9/2015
 * Time: 11:20 AM
 */
require_once 'making_conn.php';
$conn= mysql_connect(HOSTNAME,USERNAME,PASSWORD);
mysql_select_db(DATABASE);
$query="SELECT * FROM bio_data";

$result=mysql_query($query);
$num_of_records=mysql_num_rows($result);

var_dump($num_of_records);
 echo "<table border='1'><tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Student ID</th>
        <th>Father Name</th>
        <th>Contact</th>
        <th>Sex</th>
        <th>Date of Birth</th>
        <th>Address</th>
        </tr>";
/*$data=mysql_fetch_row($result);
var_dump($data);
echo $data[0];
echo $data[1];
echo $data[2];*/

for($i=0;$i<$num_of_records;$i++)
{
    $row=mysql_fetch_row($result);
    echo "<tr>";
    for($k=0;$k<count($row);$k++)
    {
        echo "<td>$row[$k]</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>