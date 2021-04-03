<meta charset="UTF-8"/>

<meta name="author" content="Book Dojo">
    <meta name="keywords" content="book,language,reading,author">
    <meta name="description" content="The Book Repository">
<title>Procedual PHP : Do While Loop</title>
</head>

<body>

<form>
</form>
<?php
  $x=10;
  do{
    echo "Hi there <br>";
    $x++; //ading one to avoid an infinte loop
  }
    while($x<5);

?>

</body>
</html>