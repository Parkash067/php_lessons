<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/27/2015
 * Time: 9:20 PM
 */
 $a="2";
$b=2;
if($a==$b)
{
    echo "equal value";
}
else{

    echo "not equal value";
}
echo "<br>";

if($a===$b)
{
    echo "equal value";
}
else{

    echo "not equal value";
}

$sub1=87;
$sub2=71;
$sub3=82;
$total=300;
$obtain=$sub1+$sub2+$sub3;
$result=($obtain/$total)*100;
echo "<br>"."Your percentage is:"."$result";
echo "<br>";
if($result>50 && $result<60)
{
echo "Your grade is 'C'";
}
elseif($result>60 && $result<70)
{
    echo "Your grade is 'B'";
}

elseif($result>=70 && $result<80)
{
    echo "Your grade is 'B+'";
}
elseif($result>=80 && $result<90)
{
    echo "Your grade is 'A'";
}
elseif($result>=90)
{
    echo "Your grade is 'A+'";

}

//case statement:
echo "<br>";
$weather="sunny";
switch($weather)
{
    case 'rainy':
        echo "Weather is awesome";
        break;
    case 'cloudy':
        echo "Weather is good";
        break;
    case 'sunny':
        echo "Hot weather";
        break;
    case 'Moderate':
        echo "Today's weather is normal";
        break;
    default:
        echo "Unexpected weather";
}
echo "<br>";
//ternary operator
$gender="female";
echo ($gender=="male")?'Man':'Woman'
?>