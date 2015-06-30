<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/30/2015
 * Time: 8:56 PM
 */
// I use this link for this lesson
// http://www.php5-tutorial.com/classes/visibility/

// our world is full of objects like car ,human, computer any thing in the universe all are objects. every object has its some
//properties and it can do any specific work that is called its method
// lets consider a human
//  human has properties like its skills,hair color,looks,eye color height etc....
// and it can do different things like eat,walk ,run etc...its called method of human

//step#1
//before to create an object first define a class

//here we create object of this class that's also called instance;
$zain=new human();
//to adding the values of properties we use objectname->property=value;
print_r($zain);//when you dump an obejct it shows all propeties but not method
$zain->age=23;
$zain->skills="he is a multi-talented guy and has good designing skills";
echo "<br>";
print_r($zain);
echo "<br>";
echo"Here is the method of an object called: ";
$zain->run();

class human{
    public $height=5.6,$skills,$age;
    function run()
    {
        echo "this human can run";
    }

}
echo "<br>";
//step#2
$user=new user_login();
$user->name="parkash";
$user->password=12345;
echo "<br>";

 class user_login
 {
     public $name,$password;

     function authentication()
     {
         echo "Authenticate user";
     }

 }
echo "User_name: ".$user->name."<br>"."Password: ".$user->password;
echo "<br>";
echo "Verification: ";
$user->authentication();


//step#3
//copying objects
$obj=new room();
$obj->area="120sq/feet";
echo "<br>";
echo "<br>";
print_r($obj);
echo "<br>";
echo "before copying:".$obj->area;
//$obj1=$obj;// this line copying entire from obj to obj1 for cloning use this line
$obj1= clone $obj;// clone operator creates new instance of the class and copies the property values from the original class to the new instance;
$obj1->area="250sq/feet";

echo "<br>";
print_r($obj);
echo "<br>"."after copying value of  obj1->area:".$obj1->area;
echo "<br>"."after copying value of  obj->area:".$obj->area;
echo "<br><br>";
$obj1->name="parkash";
print_r($obj1);

echo "<br><br>";
print_r($obj);
echo"<h2>Constructor</h2>";

class room{
    public $area;
}
//step#4 constructor  it starts with two underscores like __construct()
/*class Animal
{
    public $name = "No-name animal";

    public function __construct()
    {
        echo "I'm alive!";
    }
}
$animal = new Animal();

echo $animal->name;
echo $animal->__construct();*/
/*class Animal
{
   // public $name = "No-name animal";

    public function __construct($name,$type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}

$animal = new Animal("Bob the Dog","German shephard");
echo $animal->name;
echo "<br>";
echo $animal->type;*/

/*class Animal
{
    public $name = "No-name animal";

    public function __construct($name)
    {
        echo "I'm alive!";
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "I'm dead now :(";
    }
}

$animal = new Animal("Bob");
echo "Name of the animal: " . $animal->name;
echo "<br>";
print_r($animal);*/
?>