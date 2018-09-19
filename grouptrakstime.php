<?php
// grouptrakstime.php

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);
$video = $_POST["link"];
$extras = "?rel=0&amp;autoplay=1&mute=1";

$link1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$video'";
$linkq = @mysqli_query($con, $link1);
$linkf = @mysqli_fetch_array($linkq);


$time["link"] = $linkf["Video Link"].$extras;

   if(isset($_POST["query2"]))  
 {  
	$query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '".$_POST["query2"]."'";
        $response = @mysqli_query($con, $query);


// mysqli_fetch_array will return a row of data from the query
// until no further data is available

 if(mysqli_num_rows($response) > 0)  {
 
 
while($row = @mysqli_fetch_array($response)){

 $users = array($_POST["user1"],
                  $_POST["user2"],
                  $_POST["user3"],
                  $_POST["user4"],
                  $_POST["user5"],
                  $_POST["user6"],
                  $_POST["user7"],
                  $_POST["user8"],
                  $_POST["user9"],
                  $_POST["user10"],
                  $_POST["user11"],
                  $_POST["user12"]);


$loads = array($_POST["user1"] => $_POST["user1watts"], 
        	$_POST["user2"] => $_POST["user2watts"], 
        	$_POST["user3"] => $_POST["user3watts"],
        	$_POST["user4"] => $_POST["user4watts"],
        	$_POST["user5"] => $_POST["user5watts"],
        	$_POST["user6"] => $_POST["user6watts"],
        	$_POST["user7"] => $_POST["user7watts"],
        	$_POST["user8"] => $_POST["user8watts"],
        	$_POST["user9"] => $_POST["user9watts"],
        	$_POST["user10"] => $_POST["user10watts"],
        	$_POST["user11"] => $_POST["user11watts"],
        	$_POST["user12"] => $_POST["user12watts"]);

$weights = array($_POST["user1"] => $_POST["user1weight"], 
        	$_POST["user2"] => $_POST["user2weight"], 
        	$_POST["user3"] => $_POST["user3weight"],
        	$_POST["user4"] => $_POST["user4weight"],
        	$_POST["user5"] => $_POST["user5weight"],
        	$_POST["user6"] => $_POST["user6weight"],
        	$_POST["user7"] => $_POST["user7weight"],
        	$_POST["user8"] => $_POST["user8weight"],
        	$_POST["user9"] => $_POST["user9weight"],
        	$_POST["user10"] => $_POST["user10weight"],
        	$_POST["user11"] => $_POST["user11weight"],
        	$_POST["user12"] => $_POST["user12weight"]);

$strength_array = array(
$row['strength1'],
$row['strength2'],
$row['strength3'],
$row['strength4'],
$row['strength5'],
$row['strength6'],
$row['strength7'],
$row['strength8']);




$plyo_array = array(
$row['plyo1'],
$row['plyo2'],
$row['plyo3'],
$row['plyo4'],
$row['plyo5'],
$row['plyo6'],
$row['plyo7'],
$row['plyo8']);

$other_array = array(
  $row['accel1'],
  $row['accel2'],
  $row['accel3'],
  $row['accel4'],
  $row['accel5'],
  $row['accel6'],
  $row['accel7'],
  $row['accel8'],
  
$row['speed1'],
$row['speed2'],
$row['speed3'],
$row['speed4'],
$row['speed5'],
$row['speed6'],
$row['speed7'],
$row['speed8']);


$stab_array = array($row['stability1'],
$row['stability2'],
$row['stability3'],
$row['stability4'],
$row['stability5'],
$row['stability6'],
$row['stability7'],
$row['stability8']);


$endu_array = array(
$row['Endurance1'],
$row['Endurance2'],
$row['Endurance3'],
$row['Endurance4']);



$tension_array = array (
$row['tension1'],
$row['tension1'],
$row['tension2'],
$row['tension3'],
$row['tension4'],
$row['tension5'],
$row['tension6'],
$row['tension7'],
$row['tension8']);




$distance = array();
$extratime = array();
$number = 0; 


$user1time= array();
$user2time= array();
$user3time= array();
$user4time= array();
$user5time= array();
$user6time= array();
$user7time= array();
$user8time= array();
$user9time= array();
$user10time= array();
$user11time= array();
$user12time= array();


$user1force = array();
$user2force = array();
$user3force = array();
$user4force = array();
$user5force = array();
$user6force = array();
$user7force = array();
$user8force = array();
$user9force = array();
$user10force = array();
$user11force = array();
$user12force = array();


foreach($stab_array as $ref) {
$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);


if(strlen($ref) == 0) {null;} else{$number++;}

};

foreach($endu_array as $ref) {
$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

array_push($user1time,number_format(((1-($_POST["user1watts"]/($_POST["user1weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user2time,number_format(((1-($_POST["user2watts"]/($_POST["user2weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user3time,number_format(((1-($_POST["user3watts"]/($_POST["user3weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user4time,number_format(((1-($_POST["user4watts"]/($_POST["user4weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user5time,number_format(((1-($_POST["user5watts"]/($_POST["user5weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user6time,number_format(((1-($_POST["user6watts"]/($_POST["user6weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user7time,number_format(((1-($_POST["user7watts"]/($_POST["user7weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user8time,number_format(((1-($_POST["user8watts"]/($_POST["user8weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user9time,number_format(((1-($_POST["user9watts"]/($_POST["user9weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user10time,number_format(((1-($_POST["user10watts"]/($_POST["user10weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user11time,number_format(((1-($_POST["user11watts"]/($_POST["user11weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);
array_push($user12time,number_format(((1-($_POST["user12watts"]/($_POST["user12weight"]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) * $row["intervals"]);

};





foreach($plyo_array as $ref) {
$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

array_push($distance,((($prod1f["Distance"]*$row['plyoreps'])*$row['plyosets'])));
array_push($user1force,(((($prod1f["Bodyweight Ratio"])*$_POST["user1weight"]))* 4.45));
array_push($user2force,(((($prod1f["Bodyweight Ratio"])*$_POST["user2weight"]))* 4.45));
array_push($user3force,(((($prod1f["Bodyweight Ratio"])*$_POST["user3weight"]))* 4.45));
array_push($user4force,(((($prod1f["Bodyweight Ratio"])*$_POST["user4weight"]))* 4.45));
array_push($user5force,(((($prod1f["Bodyweight Ratio"])*$_POST["user5weight"]))* 4.45));
array_push($user6force,(((($prod1f["Bodyweight Ratio"])*$_POST["user6weight"]))* 4.45));
array_push($user7force,(((($prod1f["Bodyweight Ratio"])*$_POST["user7weight"]))* 4.45));
array_push($user8force,(((($prod1f["Bodyweight Ratio"])*$_POST["user8weight"]))* 4.45));
array_push($user9force,(((($prod1f["Bodyweight Ratio"])*$_POST["user9weight"]))* 4.45));
array_push($user10force,(((($prod1f["Bodyweight Ratio"])*$_POST["user10weight"]))* 4.45));
array_push($user11force,(((($prod1f["Bodyweight Ratio"])*$_POST["user11weight"]))* 4.45));
array_push($user12force,(((($prod1f["Bodyweight Ratio"])*$_POST["user12weight"]))* 4.45));


};


foreach($strength_array as $ref) {
$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

array_push($distance,((($prod1f["Distance"]*$row['strengthreps'])*$row['strengthsets'])));
array_push($user1force,(((number_format(($_POST["user1watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user1weight"]))* 4.45));
array_push($user2force,(((number_format(($_POST["user2watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user2weight"]))* 4.45));
array_push($user3force,(((number_format(($_POST["user3watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user3weight"]))* 4.45));
array_push($user4force,(((number_format(($_POST["user4watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user4weight"]))* 4.45));
array_push($user5force,(((number_format(($_POST["user5watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user5weight"]))* 4.45));
array_push($user6force,(((number_format(($_POST["user6watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user6weight"]))* 4.45));
array_push($user7force,(((number_format(($_POST["user7watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user7weight"]))* 4.45));
array_push($user8force,(((number_format(($_POST["user8watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user8weight"]))* 4.45));
array_push($user9force,(((number_format(($_POST["user9watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user9weight"]))* 4.45));
array_push($user10force,(((number_format(($_POST["user10watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user10weight"]))* 4.45));
array_push($user11force,(((number_format(($_POST["user11watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user11weight"]))* 4.45));
array_push($user12force,(((number_format(($_POST["user12watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["strengthreps"]*.025))*(1-($row["strengthsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user12weight"]))* 4.45));
};

foreach($tension_array as $ref) {
$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

array_push($distance,((($prod1f["Distance"]*$row['tensionreps'])*$row['tensionsets'])));
array_push($user1force,(((number_format(($_POST["user1watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user1weight"]))* 4.45));
array_push($user2force,(((number_format(($_POST["user2watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user2weight"]))* 4.45));
array_push($user3force,(((number_format(($_POST["user3watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user3weight"]))* 4.45));
array_push($user4force,(((number_format(($_POST["user4watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user4weight"]))* 4.45));
array_push($user5force,(((number_format(($_POST["user5watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user5weight"]))* 4.45));
array_push($user6force,(((number_format(($_POST["user6watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user6weight"]))* 4.45));
array_push($user7force,(((number_format(($_POST["user7watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user7weight"]))* 4.45));
array_push($user8force,(((number_format(($_POST["user8watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user8weight"]))* 4.45));
array_push($user9force,(((number_format(($_POST["user9watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user9weight"]))* 4.45));
array_push($user10force,(((number_format(($_POST["user10watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user10weight"]))* 4.45));
array_push($user11force,(((number_format(($_POST["user11watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user11weight"]))* 4.45));
array_push($user12force,(((number_format(($_POST["user12watts"] / (.525) / 4.45 * $prod1f["Max Ratio"]) * (1- ($row["tensionreps"]*.025))*(1-($row["tensionsets"]-1)*.05)/5)*5) + (($prod1f["Bodyweight Ratio"])*$_POST["user12weight"]))* 4.45));


}	


$clock1 = number_format(  (((array_sum($user1force)*array_sum($distance))/$_POST["user1watts"]) + array_sum($user1time) + ($number * $row["stabsets"] * $row["stabreps"])   )  /60,0, '.', '');

$clocksec1 =  number_format((((((array_sum($user1force)*array_sum($distance))/$_POST["user1watts"]) + array_sum($user1time))  /60) - floor(((((array_sum($user1force)*array_sum($distance))/$_POST["user1watts"]) + array_sum($user1time))  /60))) * 60);

if($clock1 > 60) {$time["groupmin1"] = 59;} else {$time["groupmin1"] = $clock1;}  
if($clocksec1 < 10) {$time["groupsec1"] = "0".$clocksec1;} else {$time["groupsec1"] = $clocksec1;}  



$clock2 = number_format(  (((array_sum($user2force)*array_sum($distance))/$_POST["user2watts"]) + array_sum($user2time)+ ($number * $row["stabsets"] * $row["stabreps"])  )  /60,0, '.', '');

$clocksec2 =  number_format((((((array_sum($user2force)*array_sum($distance))/$_POST["user2watts"]) + array_sum($user2time))  /60) - floor(((((array_sum($user2force)*array_sum($distance))/$_POST["user2watts"]) + array_sum($user2time))  /60))) * 60);

if($clock2 > 60) {$time["groupmin2"] = 59;} else {$time["groupmin2"] = $clock2;}
if($clocksec2 < 10) {$time["groupsec2"] = "0".$clocksec2;} else {$time["groupsec2"] = $clocksec2;} 


    

$clock3 = number_format(  (((array_sum($user3force)*array_sum($distance))/$_POST["user3watts"]) + array_sum($user3time) + ($number * $row["stabsets"] * $row["stabreps"])  )  /60,0, '.', '');

$clocksec3 =  number_format((((((array_sum($user3force)*array_sum($distance))/$_POST["user3watts"]) + array_sum($user3time))  /60) - floor(((((array_sum($user3force)*array_sum($distance))/$_POST["user3watts"]) + array_sum($user3time))  /60))) * 60);

if($clock3 > 60) {$time["groupmin3"] = 59;} else {$time["groupmin3"] = $clock3;}
if($clocksec3 < 10) {$time["groupsec3"] = "0".$clocksec3;} else {$time["groupsec3"] = $clocksec3;}




$clock4 = number_format(  (((array_sum($user4force)*array_sum($distance))/$_POST["user4watts"]) + array_sum($user4time) + ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec4 =  number_format((((((array_sum($user4force)*array_sum($distance))/$_POST["user4watts"]) + array_sum($user4time))  /60) - floor(((((array_sum($user4force)*array_sum($distance))/$_POST["user4watts"]) + array_sum($user4time))  /60))) * 60);

if($clock4 > 60) {$time["groupmin4"] = 59;} else {$time["groupmin4"] = $clock4;}
if($clocksec4 < 10) {$time["groupsec4"] = "0".$clocksec4;} else {$time["groupsec4"] = $clocksec4;} 




$clock5 = number_format(  (((array_sum($user5force)*array_sum($distance))/$_POST["user5watts"]) + array_sum($user5time) + ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec5 =  number_format((((((array_sum($user5force)*array_sum($distance))/$_POST["user5watts"]) + array_sum($user5time))  /60) - floor(((((array_sum($user5force)*array_sum($distance))/$_POST["user5watts"]) + array_sum($user5time))  /60))) * 60);

if($clock5 > 60) {$time["groupmin5"] = 59;} else {$time["groupmin5"] = $clock5;}
if($clocksec5 < 10) {$time["groupsec5"] = "0".$clocksec5;} else {$time["groupsec5"] = $clocksec5;} 




$clock6 = number_format(  (((array_sum($user6force)*array_sum($distance))/$_POST["user6watts"]) + array_sum($user6time) + ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec6 =  number_format((((((array_sum($user6force)*array_sum($distance))/$_POST["user6watts"]) + array_sum($user6time))  /60) - floor(((((array_sum($user6force)*array_sum($distance))/$_POST["user6watts"]) + array_sum($user6time))  /60))) * 60);

if($clock6 > 60) {$time["groupmin6"] = 59;} else {$time["groupmin6"] = $clock6;}
if($clocksec6 < 10) {$time["groupsec6"] = "0".$clocksec6;} else {$time["groupsec6"] = $clocksec6;} 




$clock7 = number_format(  (((array_sum($user7force)*array_sum($distance))/$_POST["user7watts"]) + array_sum($user7time) + ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec7 =  number_format((((((array_sum($user7force)*array_sum($distance))/$_POST["user7watts"]) + array_sum($user7time))  /60) - floor(((((array_sum($user7force)*array_sum($distance))/$_POST["user7watts"]) + array_sum($user7time))  /60))) * 60);

if($clock7 > 60) {$time["groupmin7"] = 59;} else {$time["groupmin7"] = $clock7;}
if($clocksec7 < 10) {$time["groupsec7"] = "0".$clocksec7;} else {$time["groupsec7"] = $clocksec7;} 




$clock8 = number_format(  (((array_sum($user8force)*array_sum($distance))/$_POST["user8watts"]) + array_sum($user8time)+ ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec8 =  number_format((((((array_sum($user8force)*array_sum($distance))/$_POST["user8watts"]) + array_sum($user8time))  /60) - floor(((((array_sum($user8force)*array_sum($distance))/$_POST["user8watts"]) + array_sum($user8time))  /60))) * 60);

if($clock8 > 60) {$time["groupmin8"] = 59;} else {$time["groupmin8"] = $clock8;}
if($clocksec8 < 10) {$time["groupsec8"] = "0".$clocksec8;} else {$time["groupsec8"] = $clocksec8;} 



$clock9 = number_format(  (((array_sum($user9force)*array_sum($distance))/$_POST["user9watts"]) + array_sum($user9time)+ ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec9 =  number_format((((((array_sum($user9force)*array_sum($distance))/$_POST["user9watts"]) + array_sum($user9time))  /60) - floor(((((array_sum($user9force)*array_sum($distance))/$_POST["user9watts"]) + array_sum($user9time))  /60))) * 60);

if($clock9 > 60) {$time["groupmin9"] = 59;} else {$time["groupmin9"] = $clock9;}
if($clocksec9 < 10) {$time["groupsec9"] = "0".$clocksec9;} else {$time["groupsec9"] = $clocksec9;} 



$clock10 = number_format(  (((array_sum($user10force)*array_sum($distance))/$_POST["user10watts"]) + array_sum($user10time)+ ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec10 =  number_format((((((array_sum($user10force)*array_sum($distance))/$_POST["user10watts"]) + array_sum($user10time))  /60) - floor(((((array_sum($user10force)*array_sum($distance))/$_POST["user10watts"]) + array_sum($user10time))  /60))) * 60);

if($clock10 > 60) {$time["groupmin10"] = 59;} else {$time["groupmin10"] = $clock10;}
if($clocksec10 < 10) {$time["groupsec10"] = "0".$clocksec10;} else {$time["groupsec10"] = $clocksec10;}


$clock11 = number_format(  (((array_sum($user11force)*array_sum($distance))/$_POST["user11watts"]) + array_sum($user11time)+ ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec11 =  number_format((((((array_sum($user11force)*array_sum($distance))/$_POST["user11watts"]) + array_sum($user11time))  /60) - floor(((((array_sum($user11force)*array_sum($distance))/$_POST["user11watts"]) + array_sum($user11time))  /60))) * 60);

if($clock11 > 60) {$time["groupmin11"] = 59;} else {$time["groupmin11"] = $clock11;}
if($clocksec11 < 11) {$time["groupsec11"] = "0".$clocksec11;} else {$time["groupsec11"] = $clocksec11;} 


$clock12 = number_format(  (((array_sum($user12force)*array_sum($distance))/$_POST["user12watts"]) + array_sum($user12time)+ ($number * $row["stabsets"] * $row["stabreps"]) )  /60,0, '.', '');

$clocksec12 =  number_format((((((array_sum($user12force)*array_sum($distance))/$_POST["user12watts"]) + array_sum($user12time))  /60) - floor(((((array_sum($user12force)*array_sum($distance))/$_POST["user12watts"]) + array_sum($user12time))  /60))) * 60);

if($clock12 > 60) {$time["groupmin12"] = 59;} else {$time["groupmin12"] = $clock12;}
if($clocksec12 < 12) {$time["groupsec12"] = "0".$clocksec12;} else {$time["groupsec12"] = $clocksec12;} 



}


}

 else {

echo "";

echo "Search Error!";

}




}


else {echo "";}


echo json_encode($time);

mysqli_close($con);


?>