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
<title>Procedual PHP : Insert Data to databse from the website</title>
</head>

<body>
<P> Insert Data to databse from the website </P>

<form action="includes/signupPreparedStatement.inc.php" method="POST">
    <input type="text" name="first_Name" placeholder="First Name">
    <br>
    <input type="text" name="last_Name" placeholder="Last Name">
    <br>
    <input type="text" name="user_email" placeholder="Email address">
    <br>
    <input type="text" name="user_Name" placeholder="User Name">
    <br>
    <input type="pasword" name="user_Password" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>




</body>
</html>