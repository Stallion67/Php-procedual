<?php

session_start();
include_once 'dbh.php';

$sessionid=$_SESSION['id']; //fiinding the session id of logged in user

$filename ="uploads/profile".$sessionid."*"; // ."*" adds any extension

$fielinfo = glob($filename);
$fileext=explode(".",$fielinfo[0]); //[0] is uedto pick the firsy result

$fileactualext=$fileext[1];

$file=="uploads/profile".$sessionid.".".$fileactualext; // ."*" adds any extension

if (!unlink($file)) {
    # code...
    echo"File Was Not Deleteed";
}
else{
    echo"FileWas Deleteed";
}

$sql ="UPDATE profileimg SET status=1 WHERE userid='$sessionid';";

mysqli_query($conn, $sql);

header("Location: index.php");