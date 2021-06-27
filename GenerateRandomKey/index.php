
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<meta name="BEN OKELLO" content="PHP">
    <meta name="keywords" content="book,language,PHP,author">
    <meta name="description" content="My PHP Repository">
<title>Procedual PHP : Generate Random KEY</title>
</head>

<body>
<h1>Generating a random KEY </h1>
<br/>

    <?php
             //naming the Key
        function generateKey(){   
            $str="1234567890abcdefghijklmnopqrstuvwxyz()/$"; //charater allowed
            $randStr = str_shuffle($str); //shuffeling the string variable  
           
            return $randStr;
        }

        echo generateKey();

        echo" <br/> <br/>
            <br/>
            <h3> Random Characters with a given length</h3>";
        //Random chacracters wwith llehth
        function generateKey8(){ 
            $keyLength=8; //length
            $str="1234567890abcdefghijklmnopqrstuvwxyz()/$"; //charater allowed

            $randStr8 = substr(str_shuffle($str),0,$keyLength); // this will return only 8 characters starting at 
            return $randStr8;
        }
        echo generateKey8();


        echo" <br/> <br/>
        <br/>
        <h3> Random Unique ID</h3> ";
    
        function generateUniqueID(){      
            $randUID= uniqid(); //using the function Unique ID
            return $randUID;
        }
        echo generateUniqueID();

        echo" <br/> <br/>
        <br/>
        <h3> Random Cusrom Unique ID</h3> ";
    
        function generateUniqueID2(){      
            $randUID= uniqid('UID'); //using the function Unique ID
            return $randUID;
        }
        echo generateUniqueID2();
        echo" <br/>";
        echo generateUniqueID2();
        
        

    ?>

</body>
</html>