
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
<title>Procedual PHP : Read Database Data and insert into Array</title>
</head>

<body>

<h2>Different Types of Arrays</h2>

<?php

echo"<h2>Indexed Arrays</h2>";       
echo"<br>";  

$data=array("Daniel", "John", "Jane");
echo $data[0];
       

echo"<h2>Associative Arrays</h2>";       
echo"<br>";
//
$data=array("first" =>"Daniel","last" => "John","age" => "25");
echo $data[0];

echo"<h2>Mutli - dimenstional Arrays</h2>";       
echo"<br>";
//
$data=array(array("Daniel","Nielsen"),"John","Jane");
echo $data[0];


?>

</body>
</html>