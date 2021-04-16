<?php
$path="uploads/cat.jpg"; //path to file for deleting

if (!unlink($path)){

    echo"You have an Error";
    header("Location: index.php?deleteFailed");
}
else{
    header("Location: index.php?deleteSuccess");
}

