<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 7/9/2015
 * Time: 10:54 AM
 */

require_once 'making_conn.php';
$conn=mysql_connect(HOSTNAME,USERNAME,PASSWORD);
mysql_select_db(DATABASE);
$query="UPDATE bio_data SET last_name='Aehsan' WHERE  last_name='Ansari'";
$result=mysql_query($query);
if(!$result) {
    die(mysql_error());
}
else {
    echo "Your record has been updated";
}

?>
