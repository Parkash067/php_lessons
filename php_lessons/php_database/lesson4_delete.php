<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 7/9/2015
 * Time: 11:03 AM
 */
require_once 'making_conn.php';
$conn=mysql_connect(HOSTNAME,USERNAME,PASSWORD);
mysql_select_db(DATABASE);

$query="DELETE FROM bio_data  WHERE contact=0";
$result=mysql_query($query);
if(!$result)
{
    die(mysql_error());
}
else
{
 echo "Your record has been deleted";
}
?>