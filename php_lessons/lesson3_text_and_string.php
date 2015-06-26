<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/26/2015
 * Time: 9:19 PM
 */

$num1=2;
$num2=5;
$result=$num1+$num2;
echo "Addition: ".$result;
echo "<br>";

$result=$num1-$num2;
echo "Subtraction: ".$result;
echo "<br>";

$result=$num1*$num2;
echo "Multiplication: ".$result;
echo "<br>";

$result=$num1/$num2;
echo "Division: ".$result;
echo "<br>";

$post_inc=$num1++;
echo "Post_Inc: ".$post_inc;
echo "<br>";

$pre_inc = ++$num1;
echo "Pre_Inc: ".$pre_inc;

echo "<br>";

$text="123helo";
$num=23;
echo "Text + num: ".($text+$num);


echo "<br>";
$text="helo123";// now text suppose to be zero
$num=23;
echo "Text + num: ".($text+$num);


echo "<br>";
$text="helo123";// now text suppose to be zero
$num=23;
echo "Text + num: ".($text*$num);
echo "<br>";

$format_number='15.232';
echo number_format($format_number,6);


?>