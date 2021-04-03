<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="author" content="Book Dojo">
    <meta name="keywords" content="book,language,reading,author">
    <meta name="description" content="The Book Repository">
<title>Procedual PHP : Calculator</title>
</head>

<body>

<form>
<input type="text" name="num1" placeholder="Number 1">
<input type="text" name="num2" placeholder="Number 2">
<select name="operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
</select>
<br>
<br>
<button type="submit" name="submit" value="submit">Calculate</button>

</form>
<p>The answer is:</p>
<?php
if (isset($_GET['submit'])){
    $result1=$_GET['num1'];
    $result2=$_GET['num2'];
    $operator=$_GET['operator'];

    if ($result1 ==NULL && $result2 == NULL){
        switch($operator){
            case "None":
                 echo "You need to select a methord";
                 break;
            case "Add":
                 echo $result1 +$result2;
                 break;
            case "Subtract":
                 echo $result1 - $result2;
                 break;
           case "Multiply":
                 echo $result1 * $result2;
                 break;
            case "Divide":
                 echo $result1 / $result2;
                 break;
            default:
                 echo "There is no Calculation selected";
        }
    }
    
    else{
        echo "please provide both Values";
    }
    
  
}

?>

</body>
</html>