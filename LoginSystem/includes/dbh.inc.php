<?php

//connection to thr Databaase
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="loginsystemtuts";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName );

//Checking if coonection failed
if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}