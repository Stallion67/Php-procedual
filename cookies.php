
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Cookie</title>
</head>

<body>


<?php
//Cookies 
//Set the Name , Value and time Limit
//setting the time to -1 auto destroys the cookie
setcookie("Cookie_name","Daniel",time()+86400);

$_SESSION['name']="12";

?>

</body>
</html>