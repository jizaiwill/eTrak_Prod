 <?php

REQUIRE"auth.php";


 
 //rosters.php
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);

 echo "<option value='' selected></option>";

      $query = "SELECT `RosterName` FROM `Rosters` ORDER BY `RosterName`";  
      $result = mysqli_query($conn, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
                $value = "<option value='".$row["RosterName"]."'>".$row["RosterName"]."";
                echo ($value);
           }  
   
  
 
 ?>  

