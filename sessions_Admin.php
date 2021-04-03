
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Session Admin Page</title>
</head>

<body>
<header>
    <nav>
        <ul>
        <li><a href="./sessions.php">Creating Sessions </a></li>
<li><a href="./sessions_Admin.php">Sessions Admin Page</a></li>
        </ul>
    </nav>
</header> 

<?php
echo $_SESSION['username'];


if (!isset($_SESSION['username'])){
    echo "<br>";
    echo "you are Not Logged in";
} else{
    echo "<br>";
    echo "you are Logged in";
}
?>

</body>
</html>