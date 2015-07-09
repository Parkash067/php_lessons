<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 7/8/2015
 * Time: 7:30 PM
 */
require_once 'making_conn.php';
$connection = mysql_connect(HOSTNAME,USERNAME,PASSWORD);
if(!$connection) die(mysql_error());
mysql_select_db(DATABASE)
    or die(mysql_error());


$query="SELECT * FROM bio_data";

$result=@mysql_query($query);
if(!$result) die(mysql_error());

$rows =mysql_num_rows($result);
for($j=0;$j<$rows;$j++)
{
    echo 'First Name: '.mysql_result($result,$j,'first_name')."<br>";
    echo 'Last Name: '.mysql_result($result,$j,'last_name')."<br>";
    echo 'Student ID: '.mysql_result($result,$j,'student_id')."<br>";
    echo 'Father Name: '.mysql_result($result,$j,'father_name')."<br>";
    echo 'Contact: '.mysql_result($result,$j,'contact')."<br>";
    echo 'Sex: '.mysql_result($result,$j,'sex')."<br>";
    echo 'Date_of_Birth: '.mysql_result($result,$j,'date_of_birth')."<br>";
    echo 'Address: '.mysql_result($result,$j,'address')."<br><br>";
}
 mysql_close($connection);

?>