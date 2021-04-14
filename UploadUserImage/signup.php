<?php
include_once 'dbh.php';

$first=$_POST['first_Name'];
$last=$_POST['last_Name'];
$uid=$_POST['user_Name'];
$email=$_POST['user_email'];
$pwd=$_POST['pwd'];
$utype=1;
$mobile='0773951173';
$udatec= date('y-m-d h:i:s');//date time now //user Date Created

$sql ="INSERT INTO users (usersFirstName, usersLastName, uidUsers, emailUsers, mobile, pwdUsers, userType, userDateCreated) 
VALUES ('$first','$last','$uid','$email',$mobile,'$pwd','$utype','$udatec')";
mysqli_query($conn, $sql);

$sqlCheck ="SELECT * FROM users WHERE usersFirstName ='$first' AND uidUsers='$uid'";
$result = mysqli_query($conn, $sqlCheck);

if (mysqli_num_rows($result)>0) {
    # code...
    while ($row= mysqli_fetch_assoc($result)) {
        # code..
        $userid=$row['idUsers']; ///getting the USer ID

            //now insert into Profile Images
            $sql ="INSERT INTO profileimg (userid,status) 
            VALUES ('$userid',1)"; /// we are using 1 to show he doesnt have a profile Image 
            mysqli_query($conn, $sql);
            header("Location: index.php");

    }

}else {
    # code...
    echo"You have an Error!";
}