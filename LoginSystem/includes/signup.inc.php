<?php
//Checking if the user clicked the signup Button
if(isset($_POST['signup-submit'])){
   
   require 'dbh.inc.php'; //require conction to database

  ///Fetch information from from /Grab user data
    $firstname=$_POST['first_Name'];
    $lastname=$_POST['last_Name'];
    $username=$_POST['user_Name'];
    $email=$_POST['user_email'];
    $mobile=$_POST['user_mobile'];
    $password=$_POST['pwd'];
    $passwordRepeat=$_POST['pwd-repeat'];


    //Error Handlers
    //1.Check if there are any empty required fields
    if (empty($firstname) || empty( $lastname) || empty($username) || empty($email) ||empty( $password) || empty($passwordRepeat) ) {
        header("Location:../signup.php?error=emptyfields&first_Name='.$firstname.'&last_Name='.$lastname.'&user_Name='.$username.'&user_email='.$email.'&user_mobile'.$mobile.'");
        exit();
    }

    
}


