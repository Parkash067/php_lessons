<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/29/2015
 * Time: 7:36 PM
 */
//example#1
function myfun()
{
    echo "my demo function"."<br>";
}
myfun();
//example #2
/*
$makefoo = true;

/* We can't call foo() from here
   since it doesn't exist yet,
   but we can call bar() */

/*bar();

if ($makefoo) {
    function foo()
    {
        echo "I don't exist until program execution reaches me."."<br>";
    }
    foo();
}*/

/* Now we can safely call foo()
   since $makefoo evaluated to true */

//if ($makefoo) foo();

/*function bar()
{
    echo "I exist immediately upon program start."."<br>";
}*/

//step#3 nested functions:
/*function foo()
{
    function bar()
    {
        echo "I don't exist until foo() is called.\n";
    }

}*/

/* We can't call bar() yet
   since it doesn't exist. */

//foo();
/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */
//bar();


//step#4 Recursive
/*function recursion($a)
{
    if ($a <= 20) {
        echo $a."<br>";
        recursion($a + 1);
    }
}
recursion(2);*/

//step#5 Example #1 Passing arrays to functions


/*function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1]."<br>";// important point note how write this expression
}

takes_array(array(2,3,5));
takes_array("parkash");*/

//step6 passed by reference
/*function add_some_extra(&$string) //& it used as reference operator
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str; */   // outputs 'This is a string, and something extra.'

/*function makeyogurt($flavour, $type = "acidophilus")
{
    return "Making a bowl of $type $flavour"."<br>";
}

echo makeyogurt("raspberry");
echo makeyogurt("raspberry","chocolaty");*/

//step#7 returning values
function square($num)
{
    return $num * $num;
}
echo square(4);


//Note : anonymous function are also present in php but same as in js so i wont discuss it 

?>