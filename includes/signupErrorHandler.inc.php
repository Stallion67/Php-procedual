<?php

//checking if the user submited the form
if(isset($_POST['submit'])){
    //Db Conection
    include_once 'dbh.inc.php';

    $firstN=$_POST['first_Name'];
    $lastN=$_POST['last_Name'];
    $email=$_POST['user_email'];
    $uid=$_POST['user_Name'];
    $pwd=$_POST['user_Password'];

    if(empty($firstN) || empty($lastN) || empty($email) || empty($uid) || empty($pwd)){
        header("Location:../ErrorHandling.php?signupErrorHandler=empty");
        exit();
    }
    else{
        //Check if Characters are Valid
        if (!preg_match("/^[a-zA-Z]*$/",$firstN) ||!preg_match("/^[a-zA-Z]*$/",$lastN)) {
            header("Location:../ErrorHandling.php?signupErrorHandler=char");
            exit();
        
        }else{
                //checking if email is not legitimate
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location:../ErrorHandling.php?signupErrorHandler=invalidemail");
                exit();
             }
                else{
                //echo "Sign Up the user!!";
                header("Location:../ErrorHandling.php?signupErrorHandler=success");
                exit();
             }
        }
    }

}
else{
    //Redirect  with error Message
    header("Location:../ErrorHandling.php?signupErrorHandler=error");

}