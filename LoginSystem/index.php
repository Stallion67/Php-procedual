<?php
    require "header.php";
?>
    <main>
        <div  class="wrapper-main">
                <section class="sectiono-default">
                   <?php
                        if(isset($_SESSION['userId'])){

                            echo'<p clas="login-status">You are logged In!</p>';
                        }
                        else {
                            # code...
                            echo'<p clas="login-status">You are logged out!</p>';
                        }

                   ?>        
                
                </section>
            </div>      
     
    </main>

<?php
    require "footer.php"
?>