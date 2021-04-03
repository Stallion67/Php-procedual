<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="author" content="Book Dojo">
    <meta name="keywords" content="book,language,reading,author">
    <meta name="description" content="The Book Repository">
<title>Procedual PHP Tutuorails</title>
</head>

<body>
<form method="GET">
<input type="text" name="person_name">
<button>SUBMIT</button>
</form>

<?php
 echo "This is how to print out in php usinf 'Echo'  <br>";
 print"This is using the Print<br>";

 echo 5+54 ."<br>";

 $name = $_GET['person_name'];

 echo $name;

 echo"<br>".$name."is a  Name";

 //Single Line comments in php

 /*
Multiple line Commenting
 */


 //PHP Functions

 //String Length = Calculates the tring length
 echo strlen("Hi Daniel");

 echo"<br>";
 //String word count 
 echo str_word_count("Hi Daniel");
 echo"<br>";

 
 //String Reverse 
 echo strrev("Hi Daniel");

//String Position
echo"<br>";
echo strpos ("Hi Danniel Okello", "Okello");

//Replace the string

//String Replace
echo"<br>";
echo str_replace ("Okello","Omoro","Hi Danniel Okello");

//Variables

//String
$string_variable = "this is a String";

//Integer Variable
$integer_variable=24;

//Float Variable
$float_variable=34.456;

//Boolean Variable
//true=1
//false=0

//Array Variable
$names_array = array("Ben", "okello","Micheal");
 echo $names_array ["2"];



//Using Case
$x =1;

switch ($x){

    case 1:
        echo "<br>The Answer is One";
        break;
    Case 2:
         echo "The Answer is One";
         break;
    Case 3:
         echo "The Answer is One";
         break;
    default:
        echo "There is no answer";
}

?>

</body>
</html>