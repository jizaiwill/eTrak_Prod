 <?php

REQUIRE"auth.php";


 
 //traklistdrop.php
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);

 echo "<option value='' selected></option>";

      $query = "SELECT `Listname` FROM `Traklists` ORDER BY `Listname`";  
      $result = mysqli_query($conn, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
                $value = "<option value='".$row["Listname"]."'>".$row["Listname"]."";
                echo ($value);
           }  
   
  
 
 ?>  

