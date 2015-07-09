<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="signup.css" type="text/css" media="all"/>
   <!-- <script>
        function reset_fields(){
            document.getElementById('myform').clear();
        }
        function add_some_extra(string)
        {
            string += 'and something extra.';
        }
        var str = 'This is a string, ';
        add_some_extra(str);
        console.log(str);    // outputs 'This is a string, and something extra.'

    </script>-->
</head>

<body>
<div id="main">

    <span id="bgimg">

   <img src="mickey.jpg" id="img"/>
    </span>


 <span id="form">

            <form method="post" action="lesson6_forms.php" id="myform" >

                <fieldset>
                    <legend>SignUp</legend>
                    <label class="label" for>First Name</label>

                    <span class="field"><input type="text" id="firstname" name="f_name" REQUIRED ></span>

                    <label id="lastname" for>Last Name</label>
                    <input type="text" id="ltname" name="l_name" REQUIRED>

                    <p>
                        <label class="label" for>User_ID</label>
                        <input type="text" id="userid" name="userid" REQUIRED>
                    </p>

                    <p>
                        <label class="label" for>Father Name</label>
                        <span class="field"><input type="text" id="email" name="father_name" REQUIRED></span>
                    </p>

                    <p>
                        <label  for>Contact</label>
                        <span ><input type="number" id="pwd" name="contact" REQUIRED></span>
                    </p>

                    <p>



                    <h4>Gender:</h4>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for>Female</label>

                    <input type="radio" id="male" name="gender" value="Male">
                    <label for>Male</label>

                    </p>
                    <p>
                    <span>
                        <h4>Birthday</h4>
                    <input type="date" id="date" name="date" REQUIRED>
                    </span>
                    </p>

                    <hr>
                    <p>
                    <h4>Write Your Address Here.....</h4>
                    <textarea id="textarea" cols="30" rows="10" name="address"></textarea>
                    </p>

                    <div >
                        <input type="submit" id="login" name="login"   value="Login">
                    </div>
                </fieldset>
            </form>
 </span>



</div>


</body>
</html>

<?php
require_once 'making_conn.php';
$conn=mysql_connect(HOSTNAME,USERNAME,PASSWORD);
if(!$conn) die(mysql_error());
mysql_select_db(DATABASE);

$first_name=@$_POST['f_name'];
$last_name=@$_POST['l_name'];
$user_id=@$_POST['userid'];
$father=@$_POST['father_name'];
$contact=@$_POST['contact'];
$date=@$_POST['date'];
$sex=@$_POST['gender'];
$address=@$_POST['address'];
$query="INSERT INTO bio_data VALUES ('$first_name','$last_name','$user_id','$father','$contact','$sex','$date','$address')";
$result=mysql_query($query);
if(!$result)
{
    die("Error: ".mysql_error());
}
else
{
    echo "Your record has been inserted";
}
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/28/2015
 * Time: 12:44 PM
 */

/*$first_name=@$_POST['f_name'];
$last_name=@$_POST['l_name'];
$user_id=@$_POST['userid'];
$email=@$_POST['email'];
$password=@$_POST['pwd'];
$date=@$_POST['date'];
$sex=@$_POST['gender'];
$comments=@$_POST['comments'];

if(@$_POST['login']=="Login")
{
    echo "Your form has been submitted";
    echo "<p class='biodata'>";
    echo "First Name: ".$first_name."<br>";
    echo "Last Name: ".$last_name."<br>";
    echo "User_ID: ".$user_id."<br>";
    echo "Password: ".$password."<br>";
    echo "Date_of_Birth: ".$date."<br>";
    echo "Sex: ".$sex."<br>";
    echo "Comments: ".$comments."<br>";
   /* if($sex=='on')
    {
        echo "Sex:Male"."<br>";
    }
    else
    {
        echo "Sex:Female"."<br>";

    }
    echo "Comments: ".$comments."<br>";*/




?>