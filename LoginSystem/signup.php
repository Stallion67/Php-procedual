<?php
    require "header.php";

?>
    <main>
        <div  class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
               
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