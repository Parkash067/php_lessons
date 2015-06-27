<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/27/2015
 * Time: 9:53 PM
 */
echo "<h2>Do-While</h2>";

$i=0;
do{
    echo "<br>"."The counter is: ".$i;
    $i++;
}while($i<10);

echo "<h2>For-loop</h2>";
$ary=array("string",3,true);
$size=count($ary);
echo $size;
for($i=0;$i<$size;$i++)
{
echo  "<br>".$i."=>".$ary[$i];
}

echo"<h3>Table-Using for_loop</h3>";
$table=2;
for($i=1;$i<=10;$i++)
{
    echo  $table."*".$i."=".$table*$i."<br>";
}
echo"<h3>Table-Using While_loop</h3>";
$i=1;
while($i<=10)
{
    echo  $table."*".$i."=".$table*$i."<br>";
    $i++;
}
echo"<h3>Accessing multi-dimensional arrays using loops</h3>";
$mul_di_ary2=array(array("Name"=>"Parkash","age"=>22,"sex"=>"male"),array("Name"=>"Zain","age"=>32,"sex"=>"male"),array("Name"=>"Mehak","age"=>12,"sex"=>"female"));
$size_multi_array=count($mul_di_ary2);
for($i=0;$i<$size_multi_array;$i++)
{
    echo $mul_di_ary2[$i]["Name"]."<br>";
    echo $mul_di_ary2[$i]["age"]."<br>";
    echo $mul_di_ary2[$i]["sex"]."<br><br>";
}
$associative_array2=array("name"=>"Zain", "age"=>22 ,"male"=>true);
foreach($associative_array2 as $key=>$value)
{
    echo $key."=>".$value."<br>";
}
?>