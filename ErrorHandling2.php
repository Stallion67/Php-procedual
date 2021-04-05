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

<form action="includes/signupErrorHandler2.inc.php" method="POST">
    <br>
    <?php
            //checking for first name /Check is isset
        if (isset($_GET['first_Name'])) {
             $first =$_GET['first_Name'];
             echo '<input type="text" name="first_Name" placeholder="First Name" value="'.$first.'">';
             echo'<br>';
        }else {
             echo'<input type="text" name="first_Name" placeholder="First Name">';
             echo'<br>';
        } 

             //checking for first name
        if (isset($_GET['last_Name'])) {
            $last=$_GET['last_Name'];
             echo '<input type="text" name="last_Name" placeholder="Last Name" value="'.$last.'">';
             echo'<br>';
        }else {
             echo'<input type="text" name="last_Name" placeholder="Last Name" >';
             echo'<br>';
        }
    ?>

    <input type="text" name="user_email" placeholder="Email address">
    <br>
        <?php 
             //checking for userNAme
            if (isset($_GET['user_Name'])) {
                $uid=$_GET['user_Name'];
                echo '<input type="text" name="user_Name" placeholder="User Name" value="'.$uid.'">';
                echo'<br>';
            }else {
                echo'<input type="text" name="user_Name" placeholder="User Name">';
                echo'<br>';
            }
        ?>
    <input type="password" name="user_Password" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>

<?php 

    if (!isset($_GET['signupErrorHandler2'])) {
        exit(); //USer has not submited the form
    }
    else{
        $SignupCheck =$_GET['signupErrorHandler2'];

            if ($SignupCheck == "empty"){
                 echo "<p class='error'>You did not fill in all fields</p>"; 
                 exit();
            }
            elseif($SignupCheck == "char"){
                 echo "<p class='error'>You have used an Invalid Charcter</p>";   
                 exit();
            }
            elseif($SignupCheck == "invalidemail"){
                 echo "<p class='error'>An inalid email provided</p>";    
                 exit();
            }
            elseif($SignupCheck == "char"){
                 echo "<p class='error'>You have used an Invalid Charcter</p>";   
                 exit();
            }
            elseif($SignupCheck == "success"){
                 echo "<p class='success'>You haveb been suesfully signed in</p>";   
                 exit();
           }

    }

?>


</body>
</html>