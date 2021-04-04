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
<title>Procedual PHP : Prepared Statements</title>
</head>

<body>
<p>Using Prepared Statements</p>


<?php
$Data="Admin";

//Created a Template 
$sql ="SELECT * FROM users WHERE user_uid=?;"; // outside Semicolon(;) is the php one while the inside one is for sql
    //create a prepared Stamement
    $stmt = mysqli_stmt_init($conn);

    //Prepare the prepared statment
    if(!mysqli_stmt_prepare($stmt,$sql)){
       echo "SQL Statement Failed Please Call Developer:+256773951173";
    }else{
        //Bind Parameters to the Place holder
        mysqli_stmt_bind_param($stmt, "s",$Data);

        //Runnning the parameters insde Database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

 
        while ($row =mysqli_fetch_assoc($result)) {
            //assign each data to a ros
            echo $row['user_uid']."&nbsp".$row['user_email']."<br>";
        } 
    
    }
    
?>

</body>
</html>