<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 7/9/2015
 * Time: 10:35 AM
 */


/*
 *
 $useernmae=$post['usenrem'];
*/
require_once 'making_conn.php';
$conn=mysql_connect(HOSTNAME,USERNAME,PASSWORD);
if(!$conn) die(mysql_error());
mysql_select_db(DATABASE);

$query='INSERT INTO bio_data VALUES ("zain","ansari","B11101062","Akhlaq",0303-2769561,"male","1993-5-07","Gulshan Iqbal")';
$result= mysql_query($query);
if(!$result)
{
    die(mysql_error());
}
else
{
    echo "Your record has been inserted";
}
?>