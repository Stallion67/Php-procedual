
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
        <h3> Random Unique ID based</h3> ";
    
        function generateUniqueID(){      
            $randUID= uniqid(); //using the function Unique ID
            return $randUID;
        }
        echo generateUniqueID();

        echo" <br/> <br/>
        <br/>
        <h3> Random Custom Unique ID</h3> 
        <h4>BAsed on the Time Stamp</h4>";
    
        function generateUniqueID2(){      
            $randUID= uniqid('UID'); //using the function Unique ID
            return $randUID;
        }
        echo generateUniqueID2();
        echo" <br/>";
        echo generateUniqueID2();
        echo" <br/>";

        echo"   <h4>Not based on timestamp but customized</h4>";
        
        function generateUniqueID3(){      
            $randUID= uniqid('UID',true); //using the function Unique ID
            return $randUID;
        }
        echo generateUniqueID3();

        echo" <br/>";
        echo" <h4>The Best Way to create a KEY</h4>";
////////////////-----BEgin BEST KEY----///////////////////////////////
            //DB Connection
        $conn =mysqli_connect("localhost","root","","rims");

        function checkKeys( $conn, $randStr){
                $sql="SELECT * from users";
                $result =mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)){
                        if($row['user_id']==$randStr){
                            //If it exist
                            $keyExists=true;
                            break;
                        } else{
                            $keyExists=false;
                        }
                }
                return $keyExists; //so that it can be used in generate UId Function

        }

        function generateUniqueUID($conn){      
              $keyLength=15; //length
              $str="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIFJLMNOPQRSTUVWXYZi"; //charater allowed
              $randStr = substr('UiD'.str_shuffle($str),0,$keyLength); // this will return only 8 characters starting at
             

              $checkKeys = checkKeys( $conn, $randStr);
                //Checking if check key returned ne
              while( $checkKeys==true ){
                $randStr = substr('UiD'.str_shuffle($str),0,$keyLength);
                $checkKeys=checkKeys( $conn, $randStr);
              }

              return $randStr;

        }
        echo "<h3> The Unique Custom Key is : ".generateUniqueUID($conn)."</h3>";
////////////////-----END BEST KEY----///////////////////////////////

    ?>

</body>
</html>