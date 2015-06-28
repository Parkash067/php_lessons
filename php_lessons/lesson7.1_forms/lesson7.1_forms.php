<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="signup.css" type="text/css" media="all"/>
    <script>
        function reset_fields(){
            document.getElementById('myform').clear();
        }

    </script>
</head>

<body>
<div id="main">

    <span id="bgimg">

   <img src="mickey.jpg" id="img"/>
    </span>


 <span id="form">

            <form method="post" action="lesson7.1_forms.php" id="myform" onload="reset_fields()">

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
                        <label class="label" for>Email</label>
                        <span class="field"><input type="email" id="email" name="email  " REQUIRED></span>
                    </p>

                    <p>
                        <label  for>Password</label>
                        <span ><input type="password" id="pwd" name="pwd" REQUIRED></span>
                    </p>

                    <p>
                    <span>
                        <h4>Birthday</h4>
                    <input type="date" id="date" name="date" REQUIRED>
                    </span>
                    </p>
                    <p>



                    <h4>Gender:</h4>
                    <input type="radio" id="female" name="gender">
                    <label for>Female</label>

                    <input type="radio" id="male" name="gender">
                    <label for>Male</label>

                    </p>
                    <hr>
                    <p>
                    <h4>Write Your Comments Here.....</h4>
                    <textarea id="textarea" cols="30" rows="10" name="comments"></textarea>
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
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/28/2015
 * Time: 12:44 PM
 */

$first_name=@$_POST['f_name'];
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
   // echo "Sex: ".$sex."<br>";
    if($sex=='on')
    {
        echo "Sex:Male"."<br>";
    }
    else
    {
        echo "Sex:Female"."<br>";

    }
    echo "Comments: ".$comments."<br>";
    echo "</p>";
}



?>