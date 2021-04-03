
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="author" content="Book Dojo">
    <meta name="keywords" content="book,language,reading,author">
    <meta name="description" content="The Book Repository">
<title>Procedual PHP : ForEach Loop</title>
</head>

<body>

<form>
</form>
<?php
//for Each Loop involvees a array
  
$array =array("Daniel","Jane","John","Ben","Okello");

foreach($array as $loopdata){
    echo "My name is ".$loopdata."<br>";
}

?>

</body>
</html>