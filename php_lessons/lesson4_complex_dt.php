<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/27/2015
 * Time: 12:47 AM
 */
/*echo "<h2>Simple array</h2>";
$myary=array("parkash","zain","hadi");
echo $myary[0];
echo "<br>";
echo $myary[1];
echo "<br>";
echo $myary[2];
echo "<br>";
$myary[3]="sana";
echo $myary[3];
echo "<br>";
$myary[4]="rabeea";
echo $myary[4];
echo "<br>";
$myary[2]="ali";
echo $myary[2];
echo "<br>";
print_r($myary);*/

echo "<h2>Mixed array</h2>";
$mix_ary=array("string",true,3);
echo $mix_ary[0]."<br>".$mix_ary[1]."<br>".$mix_ary[2];
echo "<br>";
print_r($mix_ary);
echo "<h2>Associative array</h2>";

$associative_array=array();
$associative_array["name"]="Parkash";
$associative_array["age"]=23;
$associative_array["sex"]="male";

echo $associative_array["name"];
echo "<br>";
echo $associative_array["age"];
echo "<br>";

echo"<h3>Another way to define to associative array is:</h3>";
echo"<p>associative_array2=array('key'=>value)</p>";
$associative_array2=array("name"=>"Zain", "age"=>22 ,"male"=>true);
echo $associative_array2["name"];
echo "<br>";
echo $associative_array2["age"];
echo "<br>";
print_r($associative_array2);

echo "<h2>Multi_dimensional array</h2>";
$mul_di_ary=array(array(1,2,3),array(4,5,6),array(7,8,9));
//if we want to access element of sub array 2 simply we working on their index
echo "Element of sub array2: ".$mul_di_ary[1][2];
echo "<br>";
echo "Element of sub array3: ".$mul_di_ary[2][0];
echo "<br>";
print_r($mul_di_ary);
$mul_di_ary2=array(array("Name"=>"Parkash","age"=>22,"sex"=>"male"),array("Name"=>"Zain","age"=>32,"sex"=>"male"),array("Name"=>"Mehak","age"=>12,"sex"=>"female"));
echo "<br>".$mul_di_ary2[1]["Name"];
echo "<br>".$mul_di_ary2[0]["age"];
echo "<br>".$mul_di_ary2[2]["sex"];
echo "<br>";
print_r($mul_di_ary2);
//constants
 echo"<h2>Constants</h2>";
define("DATABASE_NAME","student_records");
define("USER_NAME","parkash");
define("PASSWORD",123);
echo DATABASE_NAME;
echo "<br>".PASSWORD;
?>
