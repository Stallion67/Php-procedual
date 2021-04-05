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
    $dateToday= date('y-m-d h:i:s');//date time now
    $userType=1;

        //Error Handlers
        //1.Check if there are any empty required fields
        if (empty($firstname) || empty( $lastname) || empty($username) || empty($email) ||empty( $password) || empty($passwordRepeat) ) {
            header("Location:../signup.php?error=emptyfields&first_Name='.$firstname.'&last_Name='.$lastname.'&user_Name='.$username.'&user_email='.$email.'&user_mobile'.$mobile.'");
            exit();
        }
          //checking both user name and email
        else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location:../signup.php?error=invalidmail&uid");
            exit();
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location:../signup.php?error=invalmail&first_Name='.$firstname.'&last_Name='.$lastname.'&user_Name='.$username.'&user_mobile'.$mobile.'");
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location:../signup.php?error=invaliduid&first_Name='.$firstname.'&last_Name='.$lastname.'&user_email='.$email.'&user_mobile'.$mobile.'");
            exit();
        }
        else if($password !== $passwordRepeat){
            header("Location:../signup.php?error=passwordcheck&first_Name='.$firstname.'&last_Name='.$lastname.'&user_Name='.$username.'&user_email='.$email.'&user_mobile'.$mobile.'");
            exit();
        }
            
        else { //checking if user name is already used inside the database
           
            $sql ="SELECT uidUsers FROM users WHERE uidUsers=?";
            $stmt= mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt,$sql)) { //check if it failed
                header("Location:../signup.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck=mysqli_stmt_num_rows($stmt);
                    //Checking the result value
                    if($resultCheck > 0){//user name exists
                        header("Location:../signup.php?error=usertaken&first_Name='.$firstname.'&last_Name='.$lastname.'&user_email='.$email.'&user_mobile'.$mobile.'");
                        exit();
                    }
                    else{
                         //User name Avaialble now insert into user
                         $sql ="INSERT INTO  users( usersFirstName, usersLastName, uidUsers, emailUsers, mobile, pwdUsers, userType, userDateCreated) VALUES (?,?,?,?,?,?,?,?);";                    
                         $stmt= mysqli_stmt_init($conn); 
                            if (!mysqli_stmt_prepare($stmt,$sql)) { //check if it failed
                                header("Location:../signup.php?error=sqlerror");
                                exit();
                            }
                            else {
                                $hashedpwd =password_hash($password,PASSWORD_DEFAULT); //password 

                                mysqli_stmt_bind_param($stmt,"ssssssis", $firstname, $lastname, $username, $email, $mobile, $hashedpwd,$userType,$dateToday);
                                mysqli_stmt_execute($stmt);
                                header("Location:../signup.php?signup=success");
                                exit();
                            }
                    
                        }


                 }

           }

           ///closing Statements to save resources
           mysqli_stmt_close($stmt);
           
           ///closing connection to Database inorder save resources
           mysqli_close($conn);
}
else {
    //Redirectint the user to signup page becuase of url forgery
    header("Location:../signup.php");
    exit();
}


