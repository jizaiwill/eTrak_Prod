<?php
// Get a connection for the database

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);
$minutes = 0;
$strval =0;
$warmval=0;
$plyoval=0;
$tensionval=0;
$stabval=0;
$mobval=0;
$endval=0;
$not =3;


   if(isset($_POST["query4"]))  
 {  $query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query4"]."%'";
    $response = @mysqli_query($con, $query);
    $responsef = @mysqli_fetch_array($response);
    
	
	$warmsets = $responsef["warmsets"];
	$warmreps= $responsef["warmreps"];
	$warm1= $responsef["warm1"];
	$warm2= $responsef["warm2"];
	$warm3= $responsef["warm3"];
	$warm4= $responsef["warm4"];
	$warm5= $responsef["warm5"];
	$warm6= $responsef["warm6"];
	$warm7= $responsef["warm7"];
	$warm8= $responsef["warm8"];
	
	$plyosets= $responsef["plyosets"];
	$plyoreps= $responsef["plyoreps"];
	$plyo1= $responsef["plyo1"];
	$plyo2= $responsef["plyo2"];
	$plyo3= $responsef["plyo3"];
	$plyo4= $responsef["plyo4"];
	$plyo5= $responsef["plyo5"];
	$plyo6= $responsef["plyo6"];
	$plyo7= $responsef["plyo7"];
	$plyo8= $responsef["plyo8"];
	
	$accelsets = $responsef["accelsets"];
	$accelreps= $responsef["accelreps"];
	$accel1= $responsef["accel1"];
	$accel2= $responsef["accel2"];
	$accel3= $responsef["accel3"];
	$accel4= $responsef["accel4"];
	$accel5= $responsef["accel5"];
	$accel6= $responsef["accel6"];
	$accel7= $responsef["accel7"];
	$accel8= $responsef["accel8"];
	
	$speedsets = $responsef["speedsets"];
	$speedreps= $responsef["speedreps"];
	$speed1= $responsef["speed1"];
	$speed2= $responsef["speed2"];
	$speed3= $responsef["speed3"];
	$speed4= $responsef["speed4"];
	$speed5= $responsef["speed5"];
	$speed6= $responsef["speed6"];
	$speed7= $responsef["speed7"];
	$speed8= $responsef["speed8"];
	
	$strengthsets = $responsef["strengthsets"];
	$strengthreps= $responsef["strengthreps"];
	$strength1= $responsef["strength1"];
	$strength2= $responsef["strength2"];
	$strength3= $responsef["strength3"];
	$strength4= $responsef["strength4"];
	$strength5= $responsef["strength5"];
	$strength6= $responsef["strength6"];
	$strength7= $responsef["strength7"];
	$strength8= $responsef["strength8"];
	
	$tensionsets = $responsef["tensionsets"];
	$tensionreps= $responsef["tensionreps"];
	$tension1= $responsef["tension1"];
	$tension2= $responsef["tension2"];
	$tension3= $responsef["tension3"];
	$tension4= $responsef["tension4"];
	$tension5= $responsef["tension5"];
	$tension6= $responsef["tension6"];
	$tension7= $responsef["tension7"];
	$tension8= $responsef["tension8"];
	
	$intervals = $responsef["intervals"];
	$interrest= $responsef["interrest"];
	$Endurance1= $responsef["Endurance1"];
	$Endurance2= $responsef["Endurance2"];
	$Endurance3= $responsef["Endurance3"];
	$Endurance4= $responsef["Endurance4"];
	
	
	$stabsets = $responsef["stabsets"];
	$stabreps= $responsef["stabreps"];
	$stability1= $responsef["stability1"];
	$stability2= $responsef["stability2"];
	$stability3= $responsef["stability3"];
	$stability4= $responsef["stability4"];
	$stability5= $responsef["stability5"];
	$stability6= $responsef["stability6"];
	$stability7= $responsef["stability7"];
	$stability8= $responsef["stability8"];
	
	$mobsets = $responsef["mobsets"];
	$mobreps= $responsef["mobreps"];
	$mobility1= $responsef["mobility1"];
	$mobility2= $responsef["mobility2"];
	$mobility3= $responsef["mobility3"];
	$mobility4= $responsef["mobility4"];
	$mobility5= $responsef["mobility5"];
	$mobility6= $responsef["mobility6"];
	$mobility7= $responsef["mobility7"];
	$mobility8= $responsef["mobility8"];
	
	$intervals = $responsef["intervals"];
	$interrest= $responsef["interrest"];
	$Endurance1= $responsef["Endurance1"];
	$Endurance2= $responsef["Endurance2"];
	$Endurance3= $responsef["Endurance3"];
	$Endurance4= $responsef["Endurance4"];



	if(strlen($warm1) > 0) {$warmval++;}
	if(strlen($warm2) > 0) {$warmval++;}
	if(strlen($warm3) > 0) {$warmval++;}
	if(strlen($warm4) > 0) {$warmval++;}
	if(strlen($warm5) > 0) {$warmval++;}
	if(strlen($warm6) > 0) {$warmval++;}
	if(strlen($warm7) > 0) {$warmval++;}
	if(strlen($warm8) > 0) {$warmval++;}
	
	if(strlen($plyo1) > 0) {$plyoval++;}
	if(strlen($plyo2) > 0) {$plyoval++;}
	if(strlen($plyo3) > 0) {$plyoval++;}
	if(strlen($plyo4) > 0) {$plyoval++;}
	if(strlen($plyo5) > 0) {$plyoval++;}
	if(strlen($plyo6) > 0) {$plyoval++;}
	if(strlen($plyo7) > 0) {$plyoval++;}
	if(strlen($plyo8) > 0) {$plyoval++;}

	if(strlen($strength1) > 0) {$strval++;}
	if(strlen($strength2) > 0) {$strval++;}
	if(strlen($strength3) > 0) {$strval++;}
	if(strlen($strength4) > 0) {$strval++;}
	if(strlen($strength5) > 0) {$strval++;}
	if(strlen($strength6) > 0) {$strval++;}
	if(strlen($strength7) > 0) {$strval++;}
	if(strlen($strength8) > 0) {$strval++;}
	
	if(strlen($tension1) > 0) {$tensionval++;}
	if(strlen($tension2) > 0) {$tensionval++;}
	if(strlen($tension3) > 0) {$tensionval++;}
	if(strlen($tension4) > 0) {$tensionval++;}
	if(strlen($tension5) > 0) {$tensionval++;}
	if(strlen($tension6) > 0) {$tensionval++;}
	if(strlen($tension7) > 0) {$tensionval++;}
	if(strlen($tension8) > 0) {$tensionval++;}
	
	if(strlen($Endurance1) > 0) {$endval++;}
	if(strlen($Endurance2) > 0) {$endval++;}
	if(strlen($Endurance3) > 0) {$endval++;}
	if(strlen($Endurance4) > 0) {$endval++;}
	
	if(strlen($stability1) > 0) {$stabval++;}
	if(strlen($stability2) > 0) {$stabval++;}
	if(strlen($stability3) > 0) {$stabval++;}
	if(strlen($stability4) > 0) {$stabval++;}
	if(strlen($stability5) > 0) {$stabval++;}
	if(strlen($stability6) > 0) {$stabval++;}
	if(strlen($stability7) > 0) {$stabval++;}
	if(strlen($stability8) > 0) {$stabval++;}
	
	if(strlen($mobility2) > 0) {$mobval++;}
	if(strlen($mobility3) > 0) {$mobval++;}
	if(strlen($mobility4) > 0) {$mobval++;}
	if(strlen($mobility5) > 0) {$mobval++;}
	if(strlen($mobility6) > 0) {$mobval++;}
	if(strlen($mobility7) > 0) {$mobval++;}
	if(strlen($mobility8) > 0) {$mobval++;}
	if(strlen($mobility9) > 0) {$mobval++;}

	$minutes = number_format(($warmreps * 2 *$warmval * $warmsets)/60) 
	+ number_format($strval * $strengthsets) 
	+ number_format($plyoval* $plyosets) 
	+ number_format(($stabreps * 2 *$stabval * $stabsets)/60)
	+ number_format($tensionval * $tensionsets) 
	+ number_format(($stabreps * 2 *$stabval * $stabsets)/60) 
	+ number_format($endval * 2 * $intervals + $interrest) 
	+ ($mobval);
        
        
        echo $minutes;
  }      
  
 else {echo($not);} 
 
       ?>