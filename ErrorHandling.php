<?php
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
 
    <!--Styles-->
    <link rel="stylesheet" href="style.css">

<title>Procedual PHP : Error Handling While Inserting Data</title>
</head>

<body>
<P>Error Handling While Inserting Data to databse from the website </P>

<form action="includes/signupErrorHandler.inc.php" method="POST">
    <input type="text" name="first_Name" placeholder="First Name">
    <br>
    <input type="text" name="last_Name" placeholder="Last Name">
    <br>
    <input type="text" name="user_email" placeholder="Email address">
    <br>
    <input type="text" name="user_Name" placeholder="User Name">
    <br>
    <input type="password" name="user_Password" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>

<?php 
//etting the ful URl
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullurl,"signupErrorHandler=empty") == true){

        echo "<p class='error'>You did not fill in all fields</p>"; 
        exit();
    } 
    elseif(strpos($fullurl,"signupErrorHandler=char") == true){

        echo "<p class='error'>You have used an Invalid Charcter</p>"; 
        exit();
    }
    elseif(strpos($fullurl,"signupErrorHandler=invalidemail") == true){

        echo "<p class='error'>An inalid email provided</p>"; 
        exit();
    }
    elseif(strpos($fullurl,"signupErrorHandler=error") == true){

        echo "<p class='error'>No Form submited</p>"; 
        exit();
    }
    elseif(strpos($fullurl,"signupErrorHandler=success") == true){

        echo "<p class='success'>You haveb been suesfully signed in</p>"; 
        exit();
    }


?>


</body>
</html>