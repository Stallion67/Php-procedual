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
VALUES (?,?,?,?,?);"; 

$stmt= mysqli_stmt_init($conn);

//Prepare the Prepared Statment
if (!mysqli_stmt_prepare($stmt,$sql)) {  //Checking for Error
    # code...
    echo "SQL Error : call Developement ";
} else {
    mysqli_stmt_bind_param($stmt, "sssss", $firstN, $lastN, $email, $uid, $pwd);
    mysqli_stmt_execute($stmt);
}

//Return response to Page
header("Location:../preparedStatementsInsert.php?signup=success");