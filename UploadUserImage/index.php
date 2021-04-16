<?php
session_start();
include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Upload User Image and Register File</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
//Queriying signedup users
$sql ="SELECT * FROM users";
$result= mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)) {
            # code...
            $id=$row['idUsers'];//getting the user id

            //New Query Checking for the user Image
            $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
            $resultImg= mysqli_query($conn, $sqlImg);
                //Looping out the data to Show
                while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                    # code...
                    echo "<div class='user-container'>";
                            
                            if ($rowImg['status']==0) {
                                # code...
                                echo"<img src='uploads/profile".$id.".jpg?'".mt_rand().">";
                            }
                            else {
                                # code...
                                echo"<img src='uploads/profiledefualt.jpg'>";
                            }
                            echo "<p>".$row['uidUsers']."</p>";
                     echo "</div>";
                } 
        }
    }
    else {
        
        echo"They are no Users Signed Up in The System Yet";
    }

//Checking Status
if (isset($_SESSION['id'])){
        if ($_SESSION['id'] ==1) {
            # code...
            echo "you are logged in as user Admin";
        }
        echo "
        
            <form action='upload.php' method='POST' enctype='multipart/form-data' >
            <input type='file' name='file'>
            <button type='submit' name='submit'>UPLOAD</button>
        </form>
        ";

        echo "
        
            <form action='deleteprofile.php' method='POST'  >
            <button type='submit' name='submit'>Delete Profile Image</button>
        </form>
        ";
} 
else {    
    echo"You are not Logged in";
    echo "<br>";
    echo"
    <form action='signup.php' method='post'>

    <input type='text' name='first_Name' placeholder='First Name'>
    <br>
    <input type='text'  name='last_Name' placeholder='Last Name'>
    <br>
    <input type='text'  name='user_Name' placeholder='User Name'>
    <br>
    <input type='text' name='user_email' placeholder='Email address'>
    <br>     
    <input type='password' name='pwd' placeholder='Password'>
    <br>
    <button type='submit' name='signup-submit'>Sign Up</button>

</form>
    ";
}
?>



<br/>
<br/>
<br/>
<h3>Login as a user</h3>
<form action="login.php" method="POST">
<button type="submit" name="submitLogin">LOGIN</button>
</form>

<br/>
<br/>
<br/>
<h3>Logout user</h3>
<form action="logout.php" method="POST">
<button type="submit" name="submitLogout">LOG-OUT</button>
</form>
<br/>
<br/>
<br/>
<br/>
<h3>Delete Files from folder</h3>
<form action="deletefile.php" method="POST">
<button type="submit" name="submitdelete">Delete File</button>
</form>
<?php

?>

</body>
</html>