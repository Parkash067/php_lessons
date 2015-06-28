<!DOCTYPE HTML>
<html>
<HEAD>
    <TITLE>
    </TITLE>
    <style>
        input{
            padding:6px 12px 6px 12px;
            border:1px round #665544;

        }


        p>input.submit:hover
        {
            background-color:red;
        }


        p>input.submit:active
        {
            color:white;
            background-color:chocolate;

        }
    </style>

</HEAD>
<BODY>

<!--<FORM METHOD="POST" ACTION="lesson7_forms.php">
    <FIELDSET>	<LEGEND>SIGNUP</LEGEND>
        <P><LABEL>USERNAME<INPUT class="n" TYPE="TEXT" NAME="USERNAME" REQUIRED></LABEL>
        </P>
        <P><LABEL>EMAIL<INPUT TYPE=EMAIL PLACEHOLDER="PK_BSCS@YAHOO.COM" NAME="EMAIL" REQUIRED></LABEL>
        </P>


        <!--<P><LABEL>PATTERN<INPUT TYPE=TEXT PATTERN="+\-D" REQUIRED></LABEL>
            </P>
        <P><INPUT TYPE=NUMBER STEP=2></P>-->

        	<!--<P><INPUT class="submit" TYPE="SUBMIT" VALUE="ENTER"></P>
    </FIELDSET>
</FORM>-->

<FORM METHOD="POST" ACTION="lesson7_forms.php">
    <FIELDSET>	<LEGEND>Number</LEGEND>
        <P><LABEL>Enter First Number<INPUT class="n" type="number" NAME="first_number" REQUIRED></LABEL>
        </P>
        <P><LABEL>Enter Second Number<INPUT type="number"  NAME="second_number" REQUIRED></LABEL>
        </P>
        <p>
           <label>Select your operation</label> <select class="n" name="operation">
                <option>
                    +
                </option>
                <option>
                    -
                </option>
                <option>
                    *
                </option>
                <option>
                    /
                </option>

            </select>
        </p>


        	<P><INPUT class="submit" TYPE="SUBMIT" VALUE="ENTER" name="submit"></P>
    </FIELDSET>
</FORM>
</BODY>

</html>


<?php
/**
 * Created by PhpStorm.
 * User: PK
 * Date: 6/28/2015
 * Time: 11:56 AM
 */

/*$user_name=@$_POST['USERNAME'];
$email=@$_POST['EMAIL'];
echo $user_name."<br>";
echo $email;*/


$number1=@$_POST['first_number'];
$number2=@$_POST['second_number'];
$op=@$_POST['operation'];

    switch ($op) {
        case '+':
            echo $number1 + $number2 . "<br>";
            break;
        case '-':
            echo $number1 - $number2 . "<br>";
            break;
        case '*':
            echo $number1 * $number2 . "<br>";
            break;
        case '/':
            echo $number1 / $number2 . "<br>";
            break;
        default:
            echo "Invalid operation";
    }


?>