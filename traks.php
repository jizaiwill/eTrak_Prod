<?php

Require "auth.php";

 
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);

 if(isset($_POST["query"]))  
 {  
     $query = "SELECT `Trakname` FROM `TrakDatabase` WHERE `Trakname` LIKE '%".$_POST["query"]."%' ORDER BY `Trakname` LIMIT 10";  
      $result = mysqli_query($conn, $query);  
    
           while($row = mysqli_fetch_array($result))  
           {  
               
                echo "<li id= 'trakz' class= 'list-group-item''".$row["Trakname"]."'>".$row["Trakname"]."</li>";
           }        
   
  }    
 ?>  
