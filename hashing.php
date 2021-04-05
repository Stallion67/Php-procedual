
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Hashing Passwords</title>
</head>

<body>


<?php
        echo "test1223";
        echo "<br/>";
        echo password_hash("test123",PASSWORD_DEFAULT);

      $input ="myP@ssw0rd";
      $hashedPW= password_hash($input,PASSWORD_DEFAULT);

 
      echo "<br/>";
      echo "<br/>";
      echo password_verify($input, $hashedPW); //verifying that the passwords match


?>

</body>
</html>