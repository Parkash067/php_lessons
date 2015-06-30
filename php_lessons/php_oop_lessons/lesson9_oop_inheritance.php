<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/30/2015
 * Time: 10:57 PM
 */

//example #1
echo "<h1>Inheritance</h1>";
class father{
  public $nature="good person",$anyaddiction="yes",$shareef="yes";
}
// deriveclass extends parentclass
class son extends father{
    public $badmash="yes",$shareef="No";

}

$faher=new father();
print_r($faher);
echo "<br>";
echo "Nature: ".$faher->nature.'<br>';
echo "Addiction: ".$faher->anyaddiction.'<br>';
echo "Shareef: ".$faher->shareef.'<br>';


$son=new son();
echo "<h2>Inherit class</h2>";
print_r($son);
echo "<br>";
echo "Nature: ".$son->nature.'<br>';
echo "Addiction: ".$son->anyaddiction.'<br>';
echo "Shareef: ".$son->shareef.'<br>';
echo "Badmash: ".$son->badmash.'<br>';

echo "<h2>Example#2</h2>";

//example#2
class user
{
    public $name,$password;

    function save_user()
    {
        echo " user code save here";
    }
}

class subscriber extends user
{
    public $phone,$email;
    function display()
    {
        echo "Name: ".$this->name."<br>";
        echo "Password: ".$this->password."<br>";
        echo "Phone: ".$this->phone."<br>";
        echo "Email: ".$this->email."<br>";
    }
}
$obj=new subscriber();
$obj->name="Parkash";
$obj->password=123456;
$obj->phone="03032769561";
$obj->email="pk_bscs@yahoo.com";

$obj->display();

?>