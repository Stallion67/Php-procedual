<?php
session_start();
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Upload User Image and Register File</title>
</head>

<body>

<?php
if (isset($_SESSION['id'])){
        if ($_SESSION['id'] ==1) {
            # code...
            echo "you are logged in as user";
        }
        echo "
        
            <form action='upload.php' method='POST' enctype='multipart/form-data' >
            <input type='file' name='file'>
            <button type='submit' name='submit'>UPLOAD</button>
        </form>
        ";


}
?>



<br/>
<br/>
<br/>
<h3>Login as a user</h3>
<form action="login.php" method="POST">
<button type="submit" name="submitLogin">LOGIN</button>
</form>

<br/>
<br/>
<br/>
<h3>Logout user</h3>
<form action="logout.php" method="POST">
<button type="submit" name="submitLogout">LOG-OUT</button>
</form>
<?php

?>

</body>
</html>