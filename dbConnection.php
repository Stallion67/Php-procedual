<?php
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Accesing the databse from the website</title>
</head>

<body>
<P> </P>

<?php
//Selecting all from Users
$sql ="SELECT * FROM users;"; // outside Semicolon(;) is the php one while the inside one is for sql
$result= mysqli_query($conn, $sql);
$resultcheck= mysqli_num_rows($result); //Checking for results

if ($resultcheck > 0){
    while ($row =mysqli_fetch_assoc($result)) {
        //assign each data to a ros
        echo $row['user_uid']."&nbsp".$row['user_email']."<br>";

    } 
}

?>

</body>
</html>