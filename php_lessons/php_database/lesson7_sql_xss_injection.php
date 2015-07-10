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

            <form method="post" action="lesson7_sql_xss_injection.php" id="myform" >

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
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 7/10/2015
 * Time: 6:32 PM

  What is Magic Quotes?:
    When turned on, Magic Quotes automatically performs an addslashes () on all form data submitted.
 *   This means that a [\] is placed before every ['], ["], [\], or nul in the data, so That's Great would be converted to
 *  That\'s Great automatically. This all happens before your coding even sees that data,
 *  so if you're just passing a string to the next page (and not to a database) it will print out
 *  with slashes even though you may not want them.
 *
 *
Description
string stripslashes ( string str )
Returns a string with backslashes stripped off. (\' becomes ' and so on.) Double backslashes (\\) are made into a single backslash (\).
 */
require_once 'making_conn.php';
/*$conn=mysql_connect(HOSTNAME,USERNAME,PASSWORD);
mysql_select_db(DATABASE);
$first_name=@mysql_fix_string($_POST['f_name']);
$last_name=@mysql_fix_string($_POST['l_name']);
$user_id=@mysql_fix_string($_POST['userid']);
$father=@mysql_fix_string($_POST['father_name']);
$contact=@mysql_fix_string($_POST['contact']);
$date=@mysql_fix_string($_POST['date']);
$sex=@mysql_fix_string($_POST['gender']);
$address=@mysql_fix_string($_POST['address']);
$query="INSERT INTO bio_data VALUES ('$first_name','$last_name','$user_id','$father','$contact','$sex','$date','$address')";
$result=mysql_query($query);*/

$conn=mysql_connect(HOSTNAME,USERNAME,PASSWORD);
mysql_select_db(DATABASE);
$first_name=@mysql_entities_fix_string($_POST['f_name']);
$last_name=@mysql_entities_fix_string($_POST['l_name']);
$user_id=@mysql_entities_fix_string($_POST['userid']);
$father=@mysql_entities_fix_string($_POST['father_name']);
$contact=@mysql_entities_fix_string($_POST['contact']);
$date=@mysql_entities_fix_string($_POST['date']);
$sex=@mysql_entities_fix_string($_POST['gender']);
$address=@mysql_entities_fix_string($_POST['address']);
$query="INSERT INTO bio_data VALUES ('$first_name','$last_name','$user_id','$father','$contact','$sex','$date','$address')";
$result=mysql_query($query);
if(!$result)
{
    die(mysql_error());
}
else
{
    echo "Your record has been inserted";
}
//what is XSS visit thi link:
//http://www.acunetix.com/websitesecurity/cross-site-scripting/
//this is for xss_injection
function mysql_entities_fix_string($string)
{
    return htmlentities(mysql_fix_string($string));
}
// this function is for sql_injection
function mysql_fix_string($string)
{
    if(get_magic_quotes_gpc()) $string=stripslashes($string);
    return mysql_real_escape_string($string);  //This function creates a legal SQL string for use in an SQL statement
}


?>