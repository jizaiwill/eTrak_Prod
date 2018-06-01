 <?php
 
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);


      $query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
      $result = mysqli_query($conn, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
                
                echo $row["Notes:"];
           }  
   

 ?>  
