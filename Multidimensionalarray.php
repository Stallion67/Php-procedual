
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Multi dimesnsional Arrays</title>
</head>

<body>
<h2>Multi dimensional arrays</h2>

<?php
  $data = array(
      array(1,2,3),
      "jonh",
      "JAne");

      print_r($data);

      echo"<br>";

      echo $data[1];

      
      echo"<br>";
      
      
      echo"<br>";
      echo $data[0][0];
?>

</body>
</html>