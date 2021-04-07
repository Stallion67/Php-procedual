<?php
    require "header.php";

?>
    <main>
        <div  class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>

                <?php
                
                    if(isset($_GET['error'])){

                        $SignupCheck =$_GET['error'];
                        if($SignupCheck == "emptyfields"){
                            echo'<p class="signuperror">Fill in all Fields !!!</p>';
                        }
                        else if($SignupCheck =="invalidmail&uid"){
                            echo'<p class="signuperror">Invalid Email and User ID !!!</p>';
                        }
                        else if($SignupCheck =="invalidmail"){
                            echo'<p class="signuperror">Enter a Valid E - mail address !!!</p>';
                        }
                        else if($SignupCheck =="invaliduid"){
                            echo'<p class="signuperror">Invalid User ID !!!</p>';
                        }
                       
                        else if($SignupCheck =="passwordcheck"){
                            echo'<p class="signuperror">Passwords Do not match!!!</p>';
                        }
                        else if($SignupCheck =="sqlerror"){
                            echo'<p class="signuperror">SQL Error!! Refresh OR Contact Support/Development IF ERROR PERSISTS </p>';
                        }
                        else if($SignupCheck =="usertaken"){
                            echo'<p class="signuperror">User Name Taken new user name</p>';
                        }
                     
                   
                    } 
                    else if($_GET['signup']=="success"){
                        echo'<p class="signupsuccess">Succesfully Signed Up</p>';
                       
                    }
                
                ?>
               
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                       
                        
                        <input type="text" name="first_Name" placeholder="First Name">
                        <br>
                        <input type="text" name="last_Name" placeholder="Last Name">
                        <br>
                        <input type="text" name="user_Name" placeholder="User Name">
                        <br>
                        <input type="text" name="user_email" placeholder="Email address">
                        <br>
                        <input type="text" name="user_mobile" placeholder="Mobile No.">
                        <br>       
                        <input type="password" name="pwd" placeholder="Password">
                        <br>
                        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                        <br>
                        <button type="submit" name="signup-submit">Sign Up</button>
                    
                </form>

            </section>
        </div>      
    </main>

<?php
    require "footer.php"
?>