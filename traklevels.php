<?php
// Get a connection for the database

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);
$table = ' 
		<th class= "names" style="width:200px;color:#333;">Name</th>         	
          	<th class= "names" style=  "text-align:center;width:50px;color:#333;"><span class ="text">E</span>LEVEL</th>
          	<th style=  "text-align:center;width:50px;color:#333;">10s Watts</th>';


   if(isset($_POST['query2']))  
 { $query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";

           $result = mysqli_query($con, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
               
          	echo($table);
 		if(!empty($row["accel1"])) {echo ("<th>".$row["accel1"]."</th>");};
                if(!empty($row["accel2"])) {echo ("<th>".$row["accel2"]."</th>");};
                if(!empty($row["accel3"])) {echo ("<th>".$row["accel3"]."</th>");};
                if(!empty($row["accel4"])) {echo ("<th>".$row["accel4"]."</th>");};
 		if(!empty($row["accel5"])) {echo ("<th>".$row["accel5"]."</th>");};
 		if(!empty($row["accel6"])) {echo ("<th>".$row["accel6"]."</th>");};
                if(!empty($row["accel7"])) {echo ("<th>".$row["accel7"]."</th>");};
 		if(!empty($row["accel8"])) {echo ("<th>".$row["accel8"]."</th>");};
 		
 		if(!empty($row["speed1"])) {echo ("<th>".$row["speed1"]."</th>");};
                if(!empty($row["speed2"])) {echo ("<th>".$row["speed1"]."</th>");};
                if(!empty($row["speed3"])) {echo ("<th>".$row["speed1"]."</th>");};
                if(!empty($row["speed4"])) {echo ("<th>".$row["speed1"]."</th>");};
 		if(!empty($row["speed5"])) {echo ("<th>".$row["speed1"]."</th>");};
 		if(!empty($row["speed6"])) {echo ("<th>".$row["speed1"]."</th>");};
                if(!empty($row["speed7"])) {echo ("<th>".$row["speed1"]."</th>");};
 		if(!empty($row["speed8"])) {echo ("<th>".$row["speed1"]."</th>");};
 		
 		if(!empty($row["strength1"])) {echo ("<th>".$row["strength1"]."</th>");};
                if(!empty($row["strength2"])) {echo ("<th>".$row["strength2"]."</th>");};
                if(!empty($row["strength3"])) {echo ("<th>".$row["strength3"]."</th>");};
                if(!empty($row["strength4"])) {echo ("<th>".$row["strength4"]."</th>");};
 		if(!empty($row["strength5"])) {echo ("<th>".$row["strength5"]."</th>");};
 		if(!empty($row["strength6"])) {echo ("<th>".$row["strength6"]."</th>");};
                if(!empty($row["strength7"])) {echo ("<th>".$row["strength7"]."</th>");};
 		if(!empty($row["strength8"])) {echo ("<th>".$row["strength8"]."</th>");};
 	
 		if(!empty($row["tension1"])) {echo ("<th>".$row["tension1"]."</th>");};
                if(!empty($row["tension2"])) {echo ("<th>".$row["tension2"]."</th>");};
                if(!empty($row["tension3"])) {echo ("<th>".$row["tension3"]."</th>");};
                if(!empty($row["tension4"])) {echo ("<th>".$row["tension4"]."</th>");};
 		if(!empty($row["tension5"])) {echo ("<th>".$row["tension5"]."</th>");};
 		if(!empty($row["tension6"])) {echo ("<th>".$row["tension6"]."</th>");};
                if(!empty($row["tension7"])) {echo ("<th>".$row["tension7"]."</th>");};
 		if(!empty($row["tension8"])) {echo ("<th>".$row["tension8"]."</th>");};
 	
 		if(!empty($row["Endurance1"])) {echo ("<th>".$row["Endurance1"]."</th>");};
                if(!empty($row["Endurance2"])) {echo ("<th>".$row["Endurance2"]."</th>");};
                if(!empty($row["Endurance3"])) {echo ("<th>".$row["Endurance3"]."</th>");};
                if(!empty($row["Endurance4"])) {echo ("<th>".$row["Endurance4"]."</th>");};
                
 		
 		}
}
?>