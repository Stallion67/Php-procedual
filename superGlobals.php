
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Super Globals</title>
</head>

<body>

<?php

$x = 5; //Global Variable that can be used any where
function something(){
    $y=10; //Local variable can only be used in the function
    echo $GLOBALS['x']; //Used Globals to call a global variable
}

//calling the function 
something();
?>


</body>
</html>