
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="author" content="Book Dojo">
    <meta name="keywords" content="book,language,reading,author">
    <meta name="description" content="The Book Repository">
<title>Procedual PHP : Day Of The Week</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h3>Writting Html Inside PHP</h3>
<form>
</form>
<?php
  $dayofweek= date("w");
   
  switch($dayofweek){
      case 1:
           echo "<p>it is Monday</p>";
           break;
      
      case 2:
           echo "<p>it is Tuesday</p>";
           break;
    
      case 3:
           echo "<p>it is Wednesday</p>";
           break;

      case 4:
           echo "<p>it is Thursday</p>";
           break;

      case 5:
           echo "<p>it is Friday</p>";
           break;
      
      case 6:
           echo "<p>it is Saturday</p>";
           break;
  
      case 7:
          echo "it is Sunday";
          break;          
  }

?>

</body>
</html>