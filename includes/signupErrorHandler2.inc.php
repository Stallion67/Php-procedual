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
        header("Location:../ErrorHandling2.php?signupErrorHandler2=empty");
        exit();
    }
    else{
        //Check if Characters are Valid
        if (!preg_match("/^[a-zA-Z]*$/",$firstN) ||!preg_match("/^[a-zA-Z]*$/",$lastN)) {
            header("Location:../ErrorHandling2.php?signupErrorHandler2=char");
            exit();
        
        }else{
                //checking if email is not legitimate
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location:../ErrorHandling2.php?signupErrorHandler2=invalidemail&first_Name=$firstN&last_Name=$lastN&user_Name=$uid");
                exit();
             }
                else{
                //echo "Sign Up the user!!";
                header("Location:../ErrorHandling2.php?signupErrorHandler2=success");
                exit();
             }
        }
    }

}
else{
    //Redirect  with error Message
    header("Location:../ErrorHandling2.php?signupErrorHandler2=error");
    exit();
}