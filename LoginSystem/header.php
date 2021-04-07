<?php
 session_start();   //Create the session on all pages
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="BEN OKELLO" content="PHP">
        <meta name="keywords" content="book,language,PHP,author">
        <meta name="description" content="My PHP Repository">
        <title>PHP Login system : Signin</title>
        <!--Styles-->
        <link rel="stylesheet" href="styles/main.css">

    </head>
<body>
 
        <header>
            <nav class="nav-header-main">
                <a class="header-logo" href="index.php">
                    <img src="img/Lanycorp.png" alt="LanyCorp Logo">
                </a>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <!--Login/Logout forms-->
                <div class="header-login">
                     <!--Begin Login-->
                     <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail..">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type ="submit" name="login-submit">Login</button>
                     </form>
                     <!--END ogin-->
                   
                     <a href="signup.php">Signup</a>
                    
                     <!--Begin Logout Form-->
                     <form action="includes/logout.inc.php" method="post">
                        <button type ="submit" name="logout-submit">Logout</button>
                     </form>
                     <!--Begin Logout Form--> 
                </div>

            </nav>
        </header>


