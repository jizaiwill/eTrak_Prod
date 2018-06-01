<?php
// Get a connection for the database

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);



   if(isset($_POST['trak3']))  
 { $query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["trak3"]."%' ";

           $result = mysqli_query($con, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
              
 		
 		if(!empty($row["warm1"])) {echo '<h1 style="font-size:12px;">WARMUP</h1>'.($row["warm1"]."<br>");};
                if(!empty($row["warm2"])) {echo ($row["warm2"]."<br>");};
                if(!empty($row["warm3"])) {echo ($row["warm3"]."<br>");};
                if(!empty($row["warm4"])) {echo ($row["warm4"]."<br>");};
 		if(!empty($row["warm5"])) {echo ($row["warm5"]."<br>");};
 		if(!empty($row["warm6"])) {echo ($row["warm6"]."<br>");};
                if(!empty($row["warm7"])) {echo ($row["warm7"]."<br>");};
 		if(!empty($row["warm8"])) {echo ($row["warm8"]."<br>");};
 		
 		if(!empty($row["plyo1"])) {echo '<br>'.'<h1 style="font-size:12px;">PLIABILITY</h1>'.($row["plyo1"]."<br>");};
                if(!empty($row["plyo2"])) {echo ($row["plyo2"]."<br>");};
                if(!empty($row["plyo3"])) {echo ($row["plyo3"]."<br>");};
                if(!empty($row["plyo4"])) {echo ($row["plyo4"]."<br>");};
 		if(!empty($row["plyo5"])) {echo ($row["plyo5"]."<br>");};
 		if(!empty($row["plyo6"])) {echo ($row["plyo6"]."<br>");};
                if(!empty($row["plyo7"])) {echo ($row["plyo7"]."<br>");};
 		if(!empty($row["plyo8"])) {echo ($row["plyo8"]."<br>");};
 		
 		if(!empty($row["accel1"])) {echo '<br>'.'<h1 style="font-size:12px;">ACCELERATION</h1>'.($row["accel1"]."<br>");};
                if(!empty($row["accel2"])) {echo ($row["accel2"]."<br>");};
                if(!empty($row["accel3"])) {echo ($row["accel3"]."<br>");};
                if(!empty($row["accel4"])) {echo ($row["accel4"]."<br>");};
 		if(!empty($row["accel5"])) {echo ($row["accel5"]."<br>");};
 		if(!empty($row["accel6"])) {echo ($row["accel6"]."<br>");};
                if(!empty($row["accel7"])) {echo ($row["accel7"]."<br>");};
 		if(!empty($row["accel8"])) {echo ($row["accel8"]."<br>");};
 		
 		if(!empty($row["speed1"])) {echo '<br>'.'<h1 style="font-size:12px;">SPEED</h1>'.($row["speed1"]."<br>");};
                if(!empty($row["speed2"])) {echo ($row["speed2"]."<br>");};
                if(!empty($row["speed3"])) {echo ($row["speed3"]."<br>");};
                if(!empty($row["speed4"])) {echo ($row["speed4"]."<br>");};
 		if(!empty($row["speed5"])) {echo ($row["speed5"]."<br>");};
 		if(!empty($row["speed6"])) {echo ($row["speed6"]."<br>");};
                if(!empty($row["speed7"])) {echo ($row["speed7"]."<br>");};
 		if(!empty($row["speed8"])) {echo ($row["speed8"]."<br>");};
 		
 		if(!empty($row["strength1"])) {echo '<br>'.'<h1 style="font-size:12px;">STRENGTH</h1>'.($row["strength1"]."<br>");};
                if(!empty($row["strength2"])) {echo ($row["strength2"]."<br>");};
                if(!empty($row["strength3"])) {echo ($row["strength3"]."<br>");};
                if(!empty($row["strength4"])) {echo ($row["strength4"]."<br>");};
 		if(!empty($row["strength5"])) {echo ($row["strength5"]."<br>");};
 		if(!empty($row["strength6"])) {echo ($row["strength6"]."<br>");};
                if(!empty($row["strength7"])) {echo ($row["strength7"]."<br>");};
 		if(!empty($row["strength8"])) {echo ($row["strength8"]."<br>");};
 	
 		if(!empty($row["tension1"])) {echo '<br>'.'<h1 style="font-size:12px;">TENSION</h1>'.($row["tension1"]."<br>");};
                if(!empty($row["tension2"])) {echo ($row["tension2"]."<br>");};
                if(!empty($row["tension3"])) {echo ($row["tension3"]."<br>");};
                if(!empty($row["tension4"])) {echo ($row["tension4"]."<br>");};
 		if(!empty($row["tension5"])) {echo ($row["tension5"]."<br>");};
 		if(!empty($row["tension6"])) {echo ($row["tension6"]."<br>");};
                if(!empty($row["tension7"])) {echo ($row["tension7"]."<br>");};
 		if(!empty($row["tension8"])) {echo ($row["tension8"]."<br>");};
 	
 		if(!empty($row["Endurance1"])) {echo '<br>'.'<h1 style="font-size:12px;">ENDURANCE</h1>'.($row["Endurance1"]."<br>");};
                if(!empty($row["Endurance2"])) {echo ($row["Endurance2"]."<br>");};
                if(!empty($row["Endurance3"])) {echo ($row["Endurance3"]."<br>");};
                if(!empty($row["Endurance4"])) {echo ($row["Endurance4"]."<br>");};
                
                if(!empty($row["stability1"])) {echo '<br>'.'<h1 style="font-size:12px;">STABILITY</h1>'.($row["stability1"]."<br>");};
                if(!empty($row["stability2"])) {echo ($row["stability2"]."<br>");};
                if(!empty($row["stability3"])) {echo ($row["stability3"]."<br>");};
                if(!empty($row["stability4"])) {echo ($row["stability4"]."<br>");};
 		if(!empty($row["stability5"])) {echo ($row["stability5"]."<br>");};
 		if(!empty($row["stability6"])) {echo ($row["stability6"]."<br>");};
                if(!empty($row["stability7"])) {echo ($row["stability7"]."<br>");};
 		if(!empty($row["stability8"])) {echo ($row["stability8"]."<br>");};
 		
 		if(!empty($row["mobility1"])) {echo '<br>'.'<h1 style="font-size:12px;">MOBILITY</h1>'.($row["mobility1"]."<br>");};
                if(!empty($row["mobility2"])) {echo ($row["mobility2"]."<br>");};
                if(!empty($row["mobility3"])) {echo ($row["mobility3"]."<br>");};
                if(!empty($row["mobility4"])) {echo ($row["mobility4"]."<br>");};
 		if(!empty($row["mobility5"])) {echo ($row["mobility5"]."<br>");};
 		if(!empty($row["mobility6"])) {echo ($row["mobility6"]."<br>");};
                if(!empty($row["mobility7"])) {echo ($row["mobility7"]."<br>");};
 		if(!empty($row["mobility8"])) {echo ($row["mobility8"]."<br><br><br>");};

 		
 		}
}
?>