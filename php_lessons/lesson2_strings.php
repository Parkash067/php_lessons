<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/26/2015
 * Time: 8:19 PM
 */

//woking on strings
$name="parkash";
$myname="Hi my name is '$name'";
echo $myname;


echo "<br>";
$animal="cats";
$tot_animal="there are 6 {$animal}";
echo $tot_animal;

echo "<br>";
//escape sequence used to add double quotes in double quotes

$mytext='Pakistan\'s people have been facing many problems';
echo $mytext;
echo "<br>";

$quote="Quaid-e-Azam said: Always \"work hard\" ";
echo $quote;
echo "<br>";
echo "<br>";
$lower_case="THIS IS GOING TO BE CONVERTED IN LOWER CASE";
echo $lower_case;
echo "<br>";

echo strtolower("lower case:".$lower_case);

echo "<br>";
echo "<br>";

$upper_case="upper case";
echo strtoupper($upper_case);

echo "<br>";
echo "<br>";
//ucfirst() upper case the first letter of a message
$message="  rate of poverty is increasing in pakistan day by day  ";
echo ucfirst($message);
echo "<br>";
echo ucwords($message);

//trim() it removes the blank space from beginning and end of the string
echo "<br>";
echo "<br>";
echo trim($message);
?>