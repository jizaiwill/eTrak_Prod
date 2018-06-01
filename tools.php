 <?php
 
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);


      $query = "SELECT `Tool Name` FROM `Toolshed` ORDER BY `Tool Name`";  
      $result = mysqli_query($conn, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
                echo "<option value='".$row["Tool Name"]."'>";
           }  
   

 ?>  

 