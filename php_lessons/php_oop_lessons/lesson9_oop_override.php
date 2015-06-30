<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/30/2015
 * Time: 11:38 PM
 */
echo "<h1>Method over riding</h1>";
/*class father{
    function demo()
    {
        echo "My name is khan and I am not terrorist";
    }
}
 class son extends father
 {
     function  demo()
     {
       echo "My name is khan and I am terrorist";
     }

 }
$father=new father();
$son=new son();
echo "original mehtod: ";
echo $father->demo();
echo "<br>";
echo "over-ride mehtod: ";
echo $son->demo();*/

//to avoid method oveloading use 'final' keyword in paraent class

class father{
   final  function demo()
    {
        echo "My name is khan and I am not terrorist";
    }
}
 class son extends father
 {
     function  demo() //see there is error
     {
       echo "My name is khan and I am terrorist";
     }

 }
$father=new father();
$son=new son();
echo "original mehtod: ";
echo $father->demo();
echo "<br>";
echo "over-ride mehtod: ";
echo $son->demo();

//abstract classes and static classes do it your self
?>