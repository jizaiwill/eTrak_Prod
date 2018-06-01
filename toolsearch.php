<?php
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";

$minutes = 22;
$minutes2 = 32;
$output;


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);


if(isset($_POST["name"]))  
 {  
			$query = "SELECT * FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["name"]."%'";

  $response = @mysqli_query($conn, $query);
  
  if(mysqli_num_rows($response) > 0)  {
  while($row = @mysqli_fetch_array($response)){
 
  $data["warmsets"] = $row["warmsets"];
  $data["warmreps"] = $row["warmreps"];
  $data["warm1"] = $row["warm1"];
  $data["warm2"] = $row["warm2"];
  $data["warm3"] = $row["warm3"];
  $data["warm4"] = $row["warm4"];
  $data["warm5"] = $row["warm5"];
  $data["warm6"] = $row["warm6"];
  $data["warm7"] = $row["warm7"];
  $data["warm8"] = $row["warm8"];
  
  $data["plyosets"] = $row["plyosets"];
  $data["plyoreps"] = $row["plyoreps"];
  $data["plyo1"] = $row["plyo1"];
  $data["plyo2"] = $row["plyo2"];
  $data["plyo3"] = $row["plyo3"];
  $data["plyo4"] = $row["plyo4"];
  $data["plyo5"] = $row["plyo5"];
  $data["plyo6"] = $row["plyo6"];
  $data["plyo7"] = $row["plyo7"];
  $data["plyo8"] = $row["plyo8"];
  
  $data["accelsets"] = $row["accelsets"];
  $data["accelreps"] = $row["accelreps"];
  $data["accel1"] = $row["accel1"];
  $data["accel2"] = $row["accel2"];
  $data["accel3"] = $row["accel3"];
  $data["accel4"] = $row["accel4"];
  $data["accel5"] = $row["accel5"];
  $data["accel6"] = $row["accel6"];
  $data["accel7"] = $row["accel7"];
  $data["accel8"] = $row["accel8"];
  
  $data["speedsets"] = $row["speedsets"];
  $data["speedreps"] = $row["speedreps"];
  $data["speed1"] = $row["speed1"];
  $data["speed2"] = $row["speed2"];
  $data["speed3"] = $row["speed3"];
  $data["speed4"] = $row["speed4"];
  $data["speed5"] = $row["speed5"];
  $data["speed6"] = $row["speed6"];
  $data["speed7"] = $row["speed7"];
  $data["speed8"] = $row["speed8"];

  $data["strengthsets"] = $row["strengthsets"];
  $data["strengthreps"] = $row["strengthreps"];
  $data["strength1"] = $row["strength1"];
  $data["strength2"] = $row["strength2"];
  $data["strength3"] = $row["strength3"];
  $data["strength4"] = $row["strength4"];
  $data["strength5"] = $row["strength5"];
  $data["strength6"] = $row["strength6"];
  $data["strength7"] = $row["strength7"];
  $data["strength8"] = $row["strength8"];

  $data["tensionsets"] = $row["tensionsets"];
  $data["tensionreps"] = $row["tensionreps"];
  $data["tension1"] = $row["tension1"];
  $data["tension2"] = $row["tension2"];
  $data["tension3"] = $row["tension3"];
  $data["tension4"] = $row["tension4"];
  $data["tension5"] = $row["tension5"];
  $data["tension6"] = $row["tension6"];
  $data["tension7"] = $row["tension7"];
  $data["tension8"] = $row["tension8"];
  
   $data["intervals"] = $row["intervals"];
  $data["interrest"] = $row["interrest"];
  $data["Endurance1"] = $row["Endurance1"];
  $data["Endurance2"] = $row["Endurance2"];
  $data["Endurance3"] = $row["Endurance3"];
  $data["Endurance4"] = $row["Endurance4"];
  
  $data["stabsets"] = $row["stabsets"];
  $data["stabreps"] = $row["stabreps"];
  $data["stability1"] = $row["stability1"];
  $data["stability2"] = $row["stability2"];
  $data["stability3"] = $row["stability3"];
  $data["stability4"] = $row["stability4"];
  $data["stability5"] = $row["stability5"];
  $data["stability6"] = $row["stability6"];
  $data["stability7"] = $row["stability7"];
  $data["stability8"] = $row["stability8"];
 
  $data["mobsets"] = $row["mobsets"];
  $data["mobreps"] = $row["mobreps"];
  $data["mobility1"] = $row["mobility1"];
  $data["mobility2"] = $row["mobility2"];
  $data["mobility3"] = $row["mobility3"];
  $data["mobility4"] = $row["mobility4"];
  $data["mobility5"] = $row["mobility5"];
  $data["mobility6"] = $row["mobility6"];
  $data["mobility7"] = $row["mobility7"];
  $data["mobility8"] = $row["mobility8"];
  
  $data["notes"] = $row["Notes:"];


}


 }
 
 else {echo('Trak Not Working!');}
 
 }
 echo json_encode($data);
 ?>  


