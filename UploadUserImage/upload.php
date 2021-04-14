<?php
//Sart Session
session_start();
include_once 'dbh.php';
$id=$_SESSION['id'];


if (isset($_POST['submit'])) { //Checking if the upload button is clicked
    # code...
    $file=$_FILES['file'];

    //Getting all the information on the File
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt= explode('.',$fileName); //separating name
    $fileActualExt=strtolower(end($fileExt));

    //creating an array ot allowed extensions
    $allowed= array ('jpg','jpeg','png','pdf');

        if (in_array($fileActualExt, $allowed)){ //Checking if the file extension is allowed
            
                if ($fileError===0) { //Checking for File errors

                        if ($fileSize <750000){ //checking and limiting upload size to 2Mb
                            $fileNameNew="profile".$id.".".$fileActualExt; //renaming the file with a unique ID
                            $fielDestination='uploads/'.$fileNameNew;

                            move_uploaded_file($fileTmpName, $fielDestination);

                            //updating profile image table
                            $sql ="UPDATE profileimg SET status=0 WHERE userid='$id';";
                            $result = mysqli_query($conn, $sql);
                            
                            header("Location: index.php");
                        
                        }else {
                            echo"your File Size is too big (Over 2MB)";
            
                        }               
                }else {
                    # code...
                    echo"there was an error uploading your file";
                }
            
            
        }else {
            echo"You cannot Upload files of this Type, TRYp Jpeg,png or pdf";
        }

}