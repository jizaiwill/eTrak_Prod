<?php
 
//suggestlists.php

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);





 if(isset($_POST["query"]))  
 {  
      $output = '<ul class="list-group">';  
      $query = "SELECT `Listname` FROM `Traklists` WHERE `Listname` LIKE '%".$_POST["query"]."%' LIMIT 10";  
      $result = mysqli_query($conn, $query);  
  
      
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li id="list">'.$row["Listname"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li id="list">Traklist Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  