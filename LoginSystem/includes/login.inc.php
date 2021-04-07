<?php

if (isset($_POST['login-submit'])) {
    # code...
    require 'dbh.inc.php';

    $mailuid=$_POST['mailuid'];
    $password =$_POST['pwd'];

        if (empty($mailuid) || empty( $password)){
            header("Location:../index.php?error=emptyfields");
            exit();
        }
        else {
            //Check credentials from database and conpare with user details
            $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
            //Creating the prepared statement
            $stmt =mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                # code...
                header("Location:../index.php?error=sqlerror");
                exit();
            }
            else {
                # code...
                mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid );
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_get_result($stmt);

                    if ($row =mysqli_fetch_assoc($result)) {
                        # code...
                        $pwdCheck = password_verify($password,$row['pwdUsers']);
                            if($pwdCheck == false){
                                header("Location: ../index.php?error=wrongpwd");
                                exit();
                            }
                            else if ($pwdCheck == true) {
                                //Write Creadentials Provided by the user
                                session_start();   //Create the session
                                $_SESSION['userId']=$row['idUsers'];
                                $_SESSION['userUid']=$row['uidUsers'];
                                $_SESSION['userFname']=$row['usersFirstName'];
                                $_SESSION['userLname']=$row['usersLastName'];

                                //Redirect user with success message
                                header("Location: ../index.php?login=success");
                                exit();

                            }
                            else{
                                header("Location: ../index.php?error=wrongpwd");
                                exit();
                            }
                    }
                    else{
                        header("Location: ../index.php?error=nouser");
                        exit();
                    }
                

            }

        }

}
else {
    # code...
      //Redirectint the user to index page becuase of url forgery
      header("Location:../index.php");
      exit();
}