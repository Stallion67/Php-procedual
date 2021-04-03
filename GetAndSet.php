
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

<form method="GET">
<input type="text" name="person_name">
<button>SUBMIT</button>
</form>

<form method="POST">
<input type="hidden" name="person_name2" value="Ben">
<button type="submit">SUBMIT</button>
</form>

<?php
echo $_GET['person_name'];
echo"<br>";
echo $_POST['person_name2'];
?>

</body>
</html>