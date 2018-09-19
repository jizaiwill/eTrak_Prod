<?php
// grouptraks.php
session_start();


$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);
$week= $_POST["week"];
$listname= $_POST["listname"];
$listinc;

	      
   if(isset($_POST["query2"]))  
 {  
	$query = "SELECT *FROM `TrakDatabase` Where `Trakname` = '".$_POST["query2"]."'";
        $response = @mysqli_query($con, $query);
        
         $query2 = "SELECT * FROM `Listloads` Where `Listname` = '".$listname."'";
         $response2 = @mysqli_query($con, $query2);
        
        while($load = @mysqli_fetch_array($response2)) { 
        
         for ($listinc = 0; $listinc <= 12; $listinc++) {
           if ($week == "WEEK $listinc") 
           { $ps = $load["ps$listinc"];
             $fs = $load["fs$listinc"];
             $ts = $load["ts$listinc"];
             $stas = $load["ps$listinc"];
             $pr = $load["pr$listinc"];
             $ar = $load["ar$listinc"];
             $vr = $load["vr$listinc"];
             $fr = $load["fr$listinc"];
             $tr = $load["tr$listinc"];
             $er = $load["er$listinc"];
             $star = $load["star$listinc"];
           }

         else {echo  "";}   
              
             
             }
        }       




// mysqli_fetch_array will return a row of data from the query
// until no further data is available

 if(mysqli_num_rows($response) > 0)  {

while($row = @mysqli_fetch_array($response)){

  if(empty($week)||$ps <=0) {$ps = $row["plyosets"];} else {null;}
  if(empty($week)||$pr <=0) {$pr = $row["plyoreps"];} else {null;}
  if(empty($week)||$ar <=0) {$ar = $row["accelreps"];} else {null;}
  if(empty($week)||$vr <=0) {$vr = $row["speedreps"];} else {null;}
  if(empty($week)||$fs <=0) {$fs = $row["strengthsets"];} else {null;}
  if(empty($week)||$fr <=0) {$fr = $row["strengthreps"];} else {null;}
  if(empty($week)||$ts <=0) {$ts = $row["tensionsets"];} else {null;}
  if(empty($week)||$tr <=0) {$tr = $row["tensionreps"];} else {null;}
  if(empty($week)||$er <=0) {$er = $row["intervals"];} else {null;}
  if(empty($week)||$stas <=0) {$stas = $row["stabsets"];} else {null;}
  if(empty($week)||$star <=0) {$star = $row["stabreps"];} else {null;}



$notes = $row["Notes:"];
 
$test = $_POST["link"];

$warmtable= 
'<table style = "width:100%; border:0px;"><tr><td style = "; font-size:11px;border:none;" ><span class = "zonetitle" style = "color:#333;">WARMUP</span></td>



<th style = "border:none; border:none; width:20px; text-align:right; ;" "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px; "><span class = "zonetitle" style = "color:#666;">'.$row['warmsets'].'</span></th>

<th style = "border:none; border:none; width:20px; text-align:right; "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px;"><span class = "zonetitle" style = "color:#666;">'.$row['warmreps'].'</span></th>

</table>

<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">
<div class = "row">';




$plyotable= 

'<table style = "width:100%; border:0px;"><tr><td style = "; font-size:11px;border:none;" ><span class = "zonetitle" style = "color:#333;">PLIABILITY</span></td>



<th style = "border:none; border:none; width:20px; text-align:right; ;" "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px; "><span class = "zonetitle" style = "color:#666;">'.$ps.'</span></th>

<th style = "border:none; border:none; width:20px; text-align:right; "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px;"><span class = "zonetitle" style = "color:#666;">'.$pr.'</span></th>

</table>

<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">
<div class = "row">';


$acceltable= '
<table style = "width:100%; border:0px;"><tr><td  style = "; font-size:11px; border:none;" ><span class = "zonetitle" style = "color:#333;">ACCELERATION</span></td>



<th style = "border:none; width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">INTERVALS</span></th> 

<th style = "border:none;  text-align:center; width:20px; "><span class = "zonetitle" style = "color:#666;" >'.$ar.'</span></th></table>
<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">
<div class = "row">';



$speedtable = '<table style = "width:100%; border:0px;"><tr><td  style = "; font-size:11px; border:none;" ><span class = "zonetitle" style = "color:#333;">VELOCITY</span></td>



<th style = "border:none; width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">INTERVALS</span></th> 

<th style = "border:none;  text-align:center; width:20px; "><span class = "zonetitle" style = "color:#666;" >'.$vr.'</span></th></table>
<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">
<div class = "row">';

$strengthtable=
'<table style = "width:100%; border:0px;"><tr><td  style = " font-size:11px; border:none;" ><span class = "zonetitle" style = "color:#333;">FORCE</span></td>



<th style = "border:none;  width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none;  text-align:center; width:20px; "><span class = "zonetitle" style = "color:#666;">'.$fs.'  </span></th>

<th style = "border:none;  width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none;  text-align:right; width:20px; "><span class = "zonetitle" style = "color:#666;">'.$fr.'</span></th>

</table>

<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">	    
<div class="row">
 <div class="col-xs-1" id="lanes">
	
     </div>
     
       <div class="col" style="width:6%;" id="numbers" >
     <h1 class= "lanes" style="color:#960101; font-size:25px;" >1<h1>

    </div>
    
      <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#db4c00;font-size:25px;" class = "lanes">2<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers"  >
     <h1 style="color:#a08800;font-size:25px;" class = "lanes">3<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#2b7700;font-size:25px;" class = "lanes">4<h1>

    </div>
    <div class="col" style="width:6%;" id="numbers" >
       <h1 style="color:#4a8474;font-size:25px;" class = "lanes">5<h1>

    </div>
    
      <div class="col"  style="width:6%;" id="numbers" >
     <h1 style="color:#0174b7;font-size:25px;" class =  "lanes">6<h1>

    </div>
    
    <div  class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#3c1bb5;font-size:25px;" class = "lanes">7<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#72036f;font-size:25px;" class = "lanes">8<h1>

    </div>
    <div class="col" style="width:6%;" id="numbers" >
       <h1 style="color:#7c9105;font-size:25px;" class = "lanes">9<h1>

    </div>
    
      <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#727171;font-size:25px;" class = "lanes">10<h1>

    </div>
    
   <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#592f00;font-size:25px;" class = "lanes">11<h1>

    </div>
    
   <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#f20085;font-size:25px;" class = "lanes">12<h1>

    </div>
    
</div>

';





$tensiontable= 

'</main><table style = "width:100%; border:0px;"><tr><td  style = " font-size:11px; border:none;" ><span class = "zonetitle" style = "color:#333;">TENSION</span></td>




<th style = "border:none; border:none; width:20px; text-align:right; ;" "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px; "><span class = "zonetitle" style = "color:#666;">'.$ts.'</span></th>

<th style = "border:none; border:none; width:20px; text-align:right; "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px;"><span class = "zonetitle" style = "color:#666;">'.$tr.'</span></th>

</table>

<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">	    
<div class="row">
 <div class="col-xs-1" id="lanes">
	
    </div>
     
       <div class="col" style="width:6%;" id="numbers" >
     <h1 class= "lanes" style="color:#960101; font-size:25px;" >1<h1>

    </div>
    
      <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#db4c00;font-size:25px;" class = "lanes">2<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers"  >
     <h1 style="color:#a08800;font-size:25px;" class = "lanes">3<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#2b7700;font-size:25px;" class = "lanes">4<h1>

    </div>
    <div class="col" style="width:6%;" id="numbers" >
       <h1 style="color:#4a8474;font-size:25px;" class = "lanes">5<h1>

    </div>
    
      <div class="col"  style="width:6%;" id="numbers" >
     <h1 style="color:#0174b7;font-size:25px;" class =  "lanes">6<h1>

    </div>
    
    <div  class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#3c1bb5;font-size:25px;" class = "lanes">7<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#72036f;font-size:25px;" class = "lanes">8<h1>

    </div>
    <div class="col" style="width:6%;" id="numbers" >
       <h1 style="color:#7c9105;font-size:25px;" class = "lanes">9<h1>

    </div>
    
      <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#727171;font-size:25px;" class = "lanes">10<h1>

    </div>
    
   <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#592f00;font-size:25px;" class = "lanes">11<h1>

    </div>
    
   <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#f20085;font-size:25px;" class = "lanes">12<h1>

    </div>
    
</div>

';



$endutable = 

'</main><table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; ;" ><span style


 = "color:#333;"  class = "zonetitle">ENDURANCE</span></td>

<th style = "border:none; ; width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">INTERVALS</span></th> 

<th style = "border:none; ; text-align:center; width:20px;  "><span style = "color:#666;" class = "zonetitle"  >'.$er.'</span></th>






</table>

<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">	    
<div class="row">
 <div class="col-xs-1" id="lanes">
	
   </div>
     
       <div class="col" style="width:6%;" id="numbers" >
     <h1 class= "lanes" style="color:#960101; font-size:25px;" >1<h1>

    </div>
    
      <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#db4c00;font-size:25px;" class = "lanes">2<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers"  >
     <h1 style="color:#a08800;font-size:25px;" class = "lanes">3<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#2b7700;font-size:25px;" class = "lanes">4<h1>

    </div>
    <div class="col" style="width:6%;" id="numbers" >
       <h1 style="color:#4a8474;font-size:25px;" class = "lanes">5<h1>

    </div>
    
      <div class="col"  style="width:6%;" id="numbers" >
     <h1 style="color:#0174b7;font-size:25px;" class =  "lanes">6<h1>

    </div>
    
    <div  class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#3c1bb5;font-size:25px;" class = "lanes">7<h1>

    </div>
    
    <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#72036f;font-size:25px;" class = "lanes">8<h1>

    </div>
    <div class="col" style="width:6%;" id="numbers" >
       <h1 style="color:#7c9105;font-size:25px;" class = "lanes">9<h1>

    </div>
    
      <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#727171;font-size:25px;" class = "lanes">10<h1>

    </div>
    
   <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#592f00;font-size:25px;" class = "lanes">11<h1>

    </div>
    
   <div class="col" style="width:6%;" id="numbers" >
     <h1 style="color:#f20085;font-size:25px;" class = "lanes">12<h1>

    </div>
    
</div>

';




$stabtable = 
'</main><table style = "width:100%; border:0px;"><tr><td style = "; font-size:11px;border:none;" ><span class = "zonetitle" style = "color:#333;">STABILITY</span></td>




<th style = "border:none; border:none; width:20px; text-align:right; ;" "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px; "><span class = "zonetitle" style = "color:#666;">'.$stas.'</span></th>

<th style = "border:none; border:none; width:20px; text-align:right; "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; border:none; text-align:center; width:20px;"><span class = "zonetitle" style = "color:#666;">'.$star.'</span></th>

</table>

<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">
<div class = "row">';



$mobtable = 
 
'</main><table style = "width:100%; border:0px;"><tr><td  style = "; color:#333; font-size:11px; border:none;" ><span class = "zonetitle" style = "color:#333">MOBILITY</span></td>



<th style = "border:none; width:20px; text-align:right; ;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none;  text-align:center; width:20px; ; "><span class = "zonetitle" style = "color:#666;" >'.$row ['mobsets'].'</span></th>

<th style = "border:none; width:20px; text-align:right; ;  "><span class = "zonetitle" style = "color:#333;">SECS</span></th> 

<th style = "border:none;  text-align:center; width:20px; ; "><span class = "zonetitle" style = "color:#666;" >'.$row ['mobreps'].'</span></th></table>
<main role="main" class="col-sm-100 pt-1 px-3" style="margin-left:5px;margin-right:5px;">
<div class = "row">';


$warmref1= $row['warm1'];
$warm_array = array($row['warm1'],
$row['warm2'],
$row['warm3'],
$row['warm4'],
$row['warm5'],
$row['warm6'],
$row['warm7'],
$row['warm8']);

$plyoref1= $row['plyo1'];

$stab_array = array($row['stability1'],
$row['stability2'],
$row['stability3'],
$row['stability4'],
$row['stability5'],
$row['stability6'],
$row['stability7'],
$row['stability8']);

$staref1 = $row['stability1'];



$plyo_array= array($row['plyo1'],
$row['plyo2'],
$row['plyo3'],
$row['plyo4'],
$row['plyo5'],
$row['plyo6'],
$row['plyo7'],
$row['plyo8']);

$plyoref1= $row['plyo1'];


$aref1 = $row['accel1'];
$aref2 = $row['accel2'];
$aref3 = $row['accel3'];
$aref4 = $row['accel4'];
$aref5 = $row['accel5'];



$mob_array =  array($row['mobility1'],
			$row['mobility2'],
			$row['mobility3'],
			$row['mobility4'],
			$row['mobility5'],
			$row['mobility6'],
			$row['mobility7'],
			$row['mobility8']);

$mobref1 = $row['mobility1'];



$accel_array = array(
  $row['accel1'],
  $row['accel2'],
  $row['accel3'],
  $row['accel4'],
  $row['accel5'],
  $row['accel6'],
  $row['accel7'],
  $row['accel8']);

$aref1 = $row['accel1'];


$speed_array = array(
$row['speed1'],
$row['speed2'],
$row['speed3'],
$row['speed4'],
$row['speed5'],
$row['speed6'],
$row['speed7'],
$row['speed8']);

$sref1 = $row['speed1'];



$ref1 = $row['strength1'];
$force_array = array( $row['strength1'],
		      $row['strength2'],
		      $row['strength3'],
		      $row['strength4'],
		      $row['strength5'],
		      $row['strength6'],
		      $row['strength7'],
		      $row['strength8']);

$tref1 = $row['tension1'];
$tension_array= array($row['tension1'],
		      $row['tension2'],
		      $row['tension3'],
		      $row['tension4'],
		      $row['tension5'],
		      $row['tension6'],
		      $row['tension7'],
		      $row['tension8']);

$eref1 = $row['Endurance1'];
$endu_array =  array(
		$row['Endurance1'],
		$row['Endurance2'],
		$row['Endurance3'],
		$row['Endurance4']);



}



} else {

echo "";

echo "Search Error!";

}



}

else {echo "";}





if(!empty($warmref1)) {echo ($warmtable);


foreach ($warm_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '

    <div class="col-xs-3" style="border-bottom: .5px solid #e6e6e6; text-align:center;">
    

   <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

};

}

echo '</div></main>';

;}


if(!empty($plyoref1)) {echo ($plyotable);


foreach ($plyo_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '

    <div class="col-xs-3" style="border-bottom: .5px solid #e6e6e6; text-align:center;">
    

   <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

};

}

echo '</div></main>';

;}




if(!empty($aref1)) {echo ($acceltable);

foreach ($accel_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{

echo '

    <div class="col-xs-3" style="border-bottom: .5px solid #e6e6e6; text-align:center;">
    <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

};

}

echo '</div></main>';

;}




if(!empty($sref1)) {echo ($speedtable);

foreach ($speed_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '

    <div class="col-xs-3" style="border-bottom: .5px solid #e6e6e6; text-align:center;">
    <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

};

}

echo '</div></main>';

;}

                  
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

if(!empty($ref1)) {echo ($strengthtable);};

foreach ($force_array as $ref) {


$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '<div class="row">

    <div class="col-xs-2" style="border-bottom: .5px solid #e6e6e6; width:23%;">
    <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

foreach ($users as $value) { 
	$query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
	$response = @mysqli_query($con, $query);
	$row = @mysqli_fetch_array($response);


	//User Queries

        $userq = "SELECT *FROM `Users` Where `Name` LIKE '".$name."'";
	$userq = @mysqli_query($con, $userq);
        $userf = @mysqli_fetch_array($userq);
        
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

if(empty($value)) {$tool= "";} else {

  

  
 $tool= (number_format(($loads[$value] / (.525) / 4.45 * $prod1f["Max Ratio"]) /$prod1f["Number"] * (1- 
	                  ($fr*.025))*(1-($fs-1)*.05)/5)*5); 
	                  
	                  }
	                  
if($tool < 1) {$tool="";}



echo '<div class="col" style="border-bottom: .5px solid #e6e6e6; width: 6%;">
   <h1 class ="loads" style ="color:#444;" >'.$tool.'<span class = "units">lbs.</span></h1> 

   </div>';

};}

echo'</div></div>';

};


if(!empty($tref1)) {echo ($tensiontable);};

foreach ($tension_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '<div class="row">

    <div class="col-xs-2" style="border-bottom: .5px solid #e6e6e6; width:23%;">
    <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

foreach ($users as $value) { 
	$query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
	$response = @mysqli_query($con, $query);
	$row = @mysqli_fetch_array($response);


	//User Queries

        $userq = "SELECT *FROM `Users` Where `Name` LIKE '".$value."'";
	$userq = @mysqli_query($con, $userq);
        $userf = @mysqli_fetch_array($userq);
        
   
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

if(empty($value)) {$tool= "";} else {

  

  
 $tool= (number_format(($loads[$value] / (.525) / 4.45 * $prod1f["Max Ratio"]) /$prod1f["Number"] * (1- 
	                  ($tr*.025))*(1-($ts-1)*.05)/5)*5); 
	                  
	                  }
	                  
if($tool < 1) {$tool="";}  

echo '<div class="col" style="border-bottom: .5px solid #e6e6e6; width: 6%;">
   <h1 class ="loads" style ="color:#444;" >'.$tool.'<span class = "units">lbs.</span></h1> 

   </div>';

};}

echo'</div></div>';

};



if(!empty($eref1)) {echo ($endutable);};

foreach ($endu_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '<div class="row">

    <div class="col-xs-2" style="border-bottom: .5px solid #e6e6e6; width:23%;">
    <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

foreach ($users as $value) { 
	$query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
	$response = @mysqli_query($con, $query);
	$row = @mysqli_fetch_array($response);


	//User Queries

        $userq = "SELECT *FROM `Users` Where `Name` LIKE '".$value."'";
	$userq = @mysqli_query($con, $userq);
        $userf = @mysqli_fetch_array($userq);
        
   
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


if(empty($value)) {$tool= "";} else {

if (number_format(((1-($loads[$value]/($weights[$value]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']) < 60)
	{$colon = ":";
	$tool = number_format(((1-($loads[$value]/($weights[$value]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load']);}
	
else {$colon = "";
	$tool = ltrim(date("i:s",number_format(((1-($loads[$value]/($weights[$value]/2.2)/11)) * $prod1f['Max Load']) + $prod1f['Max Load'])  ),0);}


  
	                  
	                  }
	                  
if($tool < 1) {$tool="";}  

echo '<div class="col" style="border-bottom: .5px solid #e6e6e6; width: 6%;">
   <h1 class ="loads" style ="color:#444;" >'.$colon.$tool.'<span class = "units"></span></h1> 

   </div>';

};}



echo'</div></div>';

};




if(!empty($staref1)) {echo ($stabtable);

foreach ($stab_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '

    <div class="col-xs-3" style="border-bottom: .5px solid #e6e6e6; text-align:center;">
    <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

};

}

echo '</div></main>';

;}




if(!empty($mobref1)) {echo ($mobtable);

foreach ($mob_array as $ref) {

$prod1 = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '$ref'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);

if(empty($ref)) {null;} else{


echo '

    <div class="col-xs-3" style="border-bottom: .5px solid #e6e6e6; text-align:center;">
    <h1 class ="groupstats" ><a href="#testmodal" id = "modalopen" data-toggle="modal" data-target="#testmodal">'.$ref.'</a></h1> 
   </div>';

};

}

echo '</div></main>';

;}

return (($notes));


// Close connection to the database
mysqli_close($con);


?>