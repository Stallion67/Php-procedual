<?php
//connection to database
include_once 'dbh.inc.php';

//Referencing to inputs
 $firstN =$_POST['first_Name'];
 $lastN =$_POST['last_Name'];
 $email =$_POST['user_email'];
 $uid =$_POST['user_Name'];
 $pwd =$_POST['user_Password'];


//Below is a normal insert Statement
$sql ="INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) 
VALUES ('$firstN','$lastN','$email','$uid','$pwd');"; // outside Semicolon(;) is the php one while the inside one is for sql

mysqli_query($conn, $sql); //function to save


header("Location:../InsertData.php?signup=success");