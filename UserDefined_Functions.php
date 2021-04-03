
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="author" content="Book Dojo">
    <meta name="keywords" content="book,language,reading,author">
    <meta name="description" content="The Book Repository">
<title>Procedual PHP : Title</title>
</head>

<body>

<form>
</form>
<?php
  $x= 123;
  //User Defined Functions
  function newCalc($x){
    $newR =$x * 0.75;
    echo "Here is 75% of what you wrote".$newR;
  }

  //Calling out the function
  newCalc($x);

  echo"<br>";
  //Using the Funcrions
  $a =135;
  newCalc($a);

?>

</body>
</html>