<?php
//connection to database
include_once 'dbh.inc.php';

//Referencing to inputs
//Escaping characters using MYSQLi
 $firstN =mysqli_real_escape_string($conn,$_POST['first_Name']) ;
 $lastN =mysqli_real_escape_string($conn,$_POST['last_Name']) ;
 $email =mysqli_real_escape_string($conn,$_POST['user_email']) ;
 $uid =mysqli_real_escape_string($conn,$_POST['user_Name']) ;
 $pwd =mysqli_real_escape_string($conn,$_POST['user_Password']) ;


//Below is a normal insert Statement
$sql ="INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) 
VALUES ('$firstN','$lastN','$email','$uid','$pwd');"; // outside Semicolon(;) is the php one while the inside one is for sql

mysqli_query($conn, $sql); //function to save


header("Location:../InsertData.php?signup=success");