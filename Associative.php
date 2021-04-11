
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
<title>Procedual PHP : Multi-dimensional Arrays</title>
</head>

<body>

<h2>Associative Arrays</h2>

<?php
  //Renaming indexes of the arrays
  $data=array(
      "first" =>"Daniel",
      "last" => "John",
      "age" => 25);

  echo $data["first"];
  
  echo"<br>";echo"<br>";
//Alternatively 

$data["first"]="Daniel";
$data["last"]="John";
$data["age"]=25;

echo $data["first"];
echo"<br>";

print_r($data); //shall show the whole array in he second case

       
//
?>

</body>
</html>