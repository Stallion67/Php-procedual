
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
<title>Procedual PHP : Read Database Data and insert into Array</title>
</head>

<body>

<h2>Read Database Data and insert into Array</h2>

<?php

        $sql = "SELECT * FROM users;"; //Query it inside the Database
        $result = mysqli_query($conn, $sql);
        $datas = array();
        $datas2 = array();

            if(mysqli_num_rows($result)>0){ //If Data exists
                while ($row = mysqli_fetch_assoc($result)) {
                   $datas[]=$row;
                   $datas2[]=$row;
                }
            }

            print_r($datas);

           
           echo"<br>";       
           echo"<br>";       
           echo"<br>";
           //to get one row of data
           foreach($datas[0] as $data){ //looping out the Data of the arra
               echo  $data;
           }

           echo"<br>";
            //to get one row of data
            foreach($datas2 as $data2){ // to get one coloum of data
              
                echo $data2 ['user_first']."<br>"; //Note the DB table in connection from thisdocument
                
            }

?>

</body>
</html>