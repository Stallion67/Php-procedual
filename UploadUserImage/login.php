<?php

session_start();

    if (isset($_POST['submitLogin'])) {
        # code...
        $_SESSION['id'] =1;
        header("Location: index.php")
    }