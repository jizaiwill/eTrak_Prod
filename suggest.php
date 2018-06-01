<?php
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);





 if(isset($_POST["query"]))  
 {  
      $output = '<ul class="list-group">';  
      $query = "SELECT `Trakname` FROM `TrakDatabase` WHERE `Trakname` LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($conn, $query);  
  
      
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["Trakname"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Trak Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  


