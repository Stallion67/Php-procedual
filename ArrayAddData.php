
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Title</title>
</head>

<body>


<?php

//create the Array
$data = array();

//methord 1
$data[]="Daniel";
echo $data[0];




//methord 2 
$data2=array('sw','er');
echo '<br';
array_push($data2, "Daniel",12,45,"Yo-Waste");
print_r($data2);


?>

</body>
</html>