<?php
 
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);


      $query = "SELECT `Trakname` FROM `TrakDatabase` ORDER BY `Trakname`";  
      $result = mysqli_query($conn, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
                echo "<option value='".$row["Trakname"]."'>";
           }  
   

 ?>  
