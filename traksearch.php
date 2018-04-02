<?php
// Get a connection for the database

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);



   if(isset($_POST["query2"]))  
 {  	$tool = $_POST['tool'];
			$query = "SELECT  	`warm1`,`warm2`,`warm3`,`warm4`,`warm5`,`warm6`,`warm7`,`warm8`,`speed1`,`speed2`,`speed3`,`speed4`,`speed5`,`speed6`,`speed7`,`speed8`, `accel1`,`accel2`,`accel3`,`accel4`,`accel5`,`accel6`,`accel7`,`accel8`, `strength1`,`strength2`,`strength3`,`strength4`,`strength5`,
		`strength6`,`strength7`,`strength8`,`Endurance1`,`Endurance2`,`Endurance3`,`Endurance4`, `stability1`,`stability2`,`stability3`,`stability4`,`stability5`,`stability6`,`stability7`,`stability8`,
		`mobility1`,`mobility2`,`mobility3`,`mobility4`,`mobility5`,`mobility6`,`mobility7`,`mobility8`
		
		FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
   
       $warmsets = "SELECT `warmsets`,`warmreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $warmsetsq = @mysqli_query($con, $warmsets);
       $warmsetsf = @mysqli_fetch_array($warmsetsq);
       
       
	$accel1 = $row['accel1'];
	$acc1 = "SELECT `accel1` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
	$acc1q = @mysqli_query($con, $acc1);
	
	
	
       $accelreps = "SELECT `accelsets`,`accelreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $accelsetsq = @mysqli_query($con, $accelreps);
       $accelsetsf = @mysqli_fetch_array($accelsetsq);
       
       
       $speedreps = "SELECT `speedsets`,`speedreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $speedrepsq = @mysqli_query($con, $speedreps);
       $speedrepsf = @mysqli_fetch_array($speedrepsq);
       
   
       $strsets = "SELECT `strengthsets`,`strengthreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $strsetsq = @mysqli_query($con, $strsets);
       $strsetsf = @mysqli_fetch_array($strsetsq);
       $strtag = $strsetsf ['strengthsets'];
       $percent = 1 - ($strsetsf ['strengthreps'] * .025);
       
       $intervals = "SELECT `intervals`,`interrest` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $intervalsq = @mysqli_query($con, $intervals);
       $intervalsf = @mysqli_fetch_array($intervalsq);
       
       $stabsets = "SELECT `stabsets`,`stabreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $stabsetsq = @mysqli_query($con, $stabsets);
       $stabsetsf = @mysqli_fetch_array($stabsetsq);
       
       $mobsets = "SELECT `mobsets`,`mobreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $mobsetsq = @mysqli_query($con, $mobsets);
       $mobsetsf = @mysqli_fetch_array($mobsetsq);
       
       
       $response = @mysqli_query($con, $query);
       $minutes = 21;
       
        $KB = '<img src = "/images/KB.png" height = 68px width = 78px>';
	$KBKB = '<img src = "/images/KB KB.png" height = 18px width = 28px>';
	$DB = '<img src = "/images/DB.png" height = 15px width = 20px>';
	$DBDB = '<img src = "/images/KB KB.png" height = 18px width = 28px>';
	$SPRINT = '<img src = "/images/Sprint.png" height = 48px width = 58px>';

$testq = "SELECT `image` FROM `Toolshed` WHERE `Tool Name` = \'550m Row\'";

$testresponse = @mysqli_query($con, $testq);

$test = @mysqli_fetch_array($testresponse);



    echo json_encode($minutes);




// mysqli_fetch_array will return a row of data from the query
// until no further data is available

 if(mysqli_num_rows($response) > 0)  {
 
 
while($row = @mysqli_fetch_array($response)){

$acceltable = 
'<div id = "acceltable">
<table style = "width:95%;">
<br>
<br>
<th class = "section" style = "width:83%;">ACCELERATION
<th class = "sethead">Sets</th>
<th class = "sets">'.$accelsetsf ['accelreps'].'</th>


</table>
<table class = "loads" >
<th class = "zonefive">MOVEMENT <span class = "text"></span> </th>
<th class = "loads">LV<span class = "text"> 1</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 2</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 3</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 4</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 5</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 6</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 7</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 8</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 9</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 10</span><span class = "units"> sec</span> </th>';

$speedtable = 
'<div id = "speedtable">
<table style = "width:95%;">
<br>
<br>
<th class = "section" style = "width:83%;">VELOCITY 
<th class = "sethead">Sets</th>
<th class = "sets">'.$speedrepsf ['speedreps'].'</th>


</table>
<table class = "loads" >
<th class = "zonefive">MOVEMENT <span class = "text"></span> </th>
<th class = "loads">LV<span class = "text"> 1</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 2</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 3</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 4</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 5</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 6</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 7</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 8</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 9</span><span class = "units"> sec</span> </th>
<th class = "loads">LV<span class = "text"> 10</span><span class = "units"> sec</span> </th>';

$strengthtable = '<table style = "width:95%;">
<br>
<br>
<th class = "section" style = "width:83%;">FORCE
<th class = "sethead">Sets</th>
<th class = "sets">'.$strsetsf ['strengthsets'].'</th>
<th class = "sethead">Reps</th>
<th class = "sets">'.$strsetsf ['strengthreps'].'</th>

</table>

<table class = "loads" >
<th class = "zonefive">MOVEMENT<span class = "text"></span> </th>
<th class = "loads">LV<span class = "text"> 1</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 2</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 3</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 4</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 5</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 6</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 7</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 8</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 9</span><span class = "units"> lbs</span> </th>
<th class = "loads">LV<span class = "text"> 10</span><span class = "units"> lbs</span> </th>';

$endutable = '<table style = "width:95%;">
<br>
<br>
<th class = "section" style = "width:83%;">ENDURANCE 

<th class = "sethead">Intervals</th>
<th class = "sets">'.$intervalsf ['intervals'].'</th>
<th class = "sethead">REST</th>
<th class = "sets" style = "width:10%;">'.ltrim(date("i:s",$intervalsf ['interrest']*60),0).'</th>
</table>

<table class = "loads" >
<th class = "zonefive">MOVEMENT<span class = "text"></span> </th>
<th class = "loads">LV<span class = "text"> 1</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 2</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 3</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 4</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 5</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 6</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 7</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 8</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 9</span><span class = "units"> m:ss</span> </th>
<th class = "loads">LV<span class = "text"> 10</span><span class = "units"> m:ss</span> </th>';

$stabtable = 
  '<div id = "stabilitytable" style = "width:47%; float:left;">
<table style = "width:47%; float:left;">
<br>
<br>
<th class = "section" style = "width:47%;">STABILITY
<th class = "sethead">Sets</th>
<th class = "sets">'.$stabsetsf ['stabsets'].'</th>
<th class = "sethead">Reps</th>
<th class = "sets">'.$stabsetsf ['stabreps'].'</th>
</table>
<br>
<br>
<br>

<table class = "loads" style = "width:46%; float:left;">
<th class = "zonefive">MOVEMENT<span class = "text"></span></th>';

$staref1 = $row['stability1'];
$staref2 = $row['stability2'];
$staref3 = $row['stability3'];
$staref4 = $row['stability4'];
$staref5 = $row['stability5'];
$staref6 = $row['stability6'];
$staref7 = $row['stability7'];
$staref8 = $row['stability8'];

$stab1=
'<tr>
<td class = "stats" style = "width:47%;">'.$staref1.'</td>  
</tr>';

$stab2=
'<tr>
<td class = "stats" style = "width:47%;">'.$staref2.'</td>  
</tr>';

$stab3=
'<tr>
<td class = "stats" style = "width:47%;">'.$staref3.'</td>  
</tr>';

$stab4=
'<tr>
<td class = "stats">'.$staref4.'</td>  
</tr>';

$stab5=
'<tr>
<td class = "stats">'.$staref5.'</td>  
</tr>';

$stab6=
'<tr>
<td class = "stats">'.$staref6.'</td>  
</tr>';

$stab7=
'<tr>
<td class = "stats">'.$staref7.'</td>  
</tr>';

$stab8=
'<tr>
<td class = "stats">'.$staref8.'</td>    
</tr>
</table>
</div>';


$mobtable = 
'<div id = "stabilitytable" style = "width:100%; float:left;">
<table style = "width:47%; float:left;">
<br>
<br>
<th class = "section" style = "width:47%;">MOBILITY
<th class = "sethead">Sets</th>
<th class = "sets">'.$mobsetsf ['mobsets'].'</th>
<th class = "sethead">SECS</th>
<th class = "sets">'.$mobsetsf ['mobreps'].'</th>
</table>
<br>
<br>
<br>

<table class = "loads" style = "width:46%; float:left;">
<th class = "zonefive">MOVEMENT<span class = "text"></span></th>';;

$mobref1 = $row['mobility1'];
$mobref2 = $row['mobility2'];
$mobref3 = $row['mobility3'];
$mobref4 = $row['mobility4'];
$mobref5 = $row['mobility5'];
$mobref6 = $row['mobility6'];
$mobref7 = $row['mobility7'];
$mobref8 = $row['mobility8'];

$mob1=
'<tr>
<td class = "stats">'.$mobref1.'</td>  
</tr>';

$mob2=
'<tr>
<td class = "stats">'.$mobref2.'</td>  
</tr>';

$mob3=
'<tr>
<td class = "stats">'.$mobref3.'</td>  
</tr>';

$mob4=
'<tr>
<td class = "stats">'.$mobref4.'</td>  
</tr>';

$mob5=
'<tr>
<td class = "stats">'.$mobref5.'</td>  
</tr>';

$mob6=
'<tr>
<td class = "stats">'.$mobref7.'</td>  
</tr>';

$mob7=
'<tr>
<td class = "stats">'.$mobref7.'</td>  
</tr>';

$mob8=
'<tr>
<td class = "stats">'.$mobref8.'</td>    
</tr>
</table>
</div>';

$warmuptable = 
  '<div id = "warmuptable">
<table style = "width:47%;">
<th class = "section" style = "width:100%;">Warmup
<th class = "sethead">Sets</th>
<th class = "sets">'.$warmsetsf ['warmsets'].'</th>
<th class = "sethead">Reps</th>
<th class = "sets">'.$warmsetsf ['warmreps'].'</th>

</table>

<table class = "loads" style = "width:47%;">
<th class = "zonefive">MOVEMENT<span class = "text"></span> </th>';

$wref1 = $row['warm1'];
$wref2 = $row['warm2'];
$wref3 = $row['warm3'];
$wref4 = $row['warm4'];
$wref5 = $row['warm5'];
$wref6 = $row['warm6'];
$wref7 = $row['warm7'];
$wref8 = $row['warm8'];

$warmup1=
'<tr>
<td class = "stats">'.$wref1.'</td>  
</tr>';

$warmup2=
'<tr>
<td class = "stats">'.$wref2.'</td>   
</tr>';

$warmup3=
'<tr>
<td class = "stats">'.$wref3.'</td>   
</tr>';

$warmup4=
'<tr>
<td class = "stats">'.$wref4.'</td>   
</tr>';

$warmup5=
'<tr>
<td class = "stats">'.$wref5.'</td>  
</tr>';

$warmup6=
'<tr>
<td class = "stats">'.$wref6.'</td>  
</tr>';

$warmup7=
'<tr>
<td class = "stats">'.$wref7.'</td>    
</tr>';

$warmup8=
'<tr>
<td class = "stats">'.$wref8.'</td>    
</tr>
</table>
</div>';



$aref1 = $row['accel1'];
$aref2 = $row['accel2'];
$aref3 = $row['accel3'];
$aref4 = $row['accel4'];
$aref5 = $row['accel5'];
$aref6 = $row['accel6'];
$aref7 = $row['accel7'];
$aref8 = $row['accel8'];



$ap1 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref1%'";
$ap1q = @mysqli_query($con, $ap1);
$ap1f = @mysqli_fetch_array($ap1q);


$ap2 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref2%'";
$ap2q = @mysqli_query($con, $ap2);
$ap2f = @mysqli_fetch_array($ap2q);

$ap3 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref3%'";
$ap3q = @mysqli_query($con, $ap3);
$ap3f = @mysqli_fetch_array($ap3q);

$ap4 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref4%'";
$ap4q = @mysqli_query($con, $ap4);
$ap4f = @mysqli_fetch_array($ap4q);

$ap5 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref5%'";
$ap5q = @mysqli_query($con, $ap5);
$ap5f = @mysqli_fetch_array($ap5q);

$ap6 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref6%'";
$ap6q = @mysqli_query($con, $ap6);
$ap6f = @mysqli_fetch_array($ap6q);

$ap7 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref7%'";
$ap7q = @mysqli_query($con, $ap7);
$ap7f = @mysqli_fetch_array($ap7q);

$ap8 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref8%'";
$ap8q = @mysqli_query($con, $ap8);
$ap8f = @mysqli_fetch_array($ap8q);



$acoutput1 =
 '<tr>


	        <td class = "stats">'.$SPRINT.'</td> 
		<td class = "loads">'.number_format($ap1f['Max Load']*1.315,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.28,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.245,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.21,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.175,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.14,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.105,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.07,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']*1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap1f['Max Load'],2).'</td>

</tr>'
;  

$acoutput3 =
 '<tr>


	        <td class = "stats">' .$SPRINT. '</td> 
		<td class = "loads">'.number_format($ap3f['Max Load']*1.315,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.28,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.245,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.21,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.175,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.14,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.105,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.07,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']*1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap3f['Max Load'],2).'</td>

</tr>'
;  

$acoutput4 =
 '<tr>


	        <td class = "stats">' .$row['accel4']. '</td> 
		<td class = "loads">'.number_format($ap4f['Max Load']*1.315,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.28,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.245,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.21,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.175,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.14,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.105,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.07,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']*1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap4f['Max Load'],2).'</td>

</tr>'
;  

$acoutput5 =
 '<tr>


	        <td class = "stats">' .$row['accel5']. '</td> 
		<td class = "loads">'.number_format($ap5f['Max Load']*1.315,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.28,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.245,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.21,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.175,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.14,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.105,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.07,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']*1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap5f['Max Load'],2).'</td>

</tr>'
;  

$acoutput6 =
 '<tr>


	        <td class = "stats">' .$row['accel6']. '</td> 
		<td class = "loads">'.number_format($ap6f['Max Load']*1.315,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.28,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.245,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.21,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.175,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.14,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.105,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.07,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']*1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap6f['Max Load'],2).'</td>

</tr>'
;  

$acoutput7 =
 '<tr>


	        <td class = "stats">' .$row['accel7']. '</td> 
		<td class = "loads">'.number_format($ap7f['Max Load']*1.315,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.28,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.245,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.21,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.175,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.14,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.105,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.07,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']*1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap7f['Max Load'],2).'</td>

</tr>'
;  

$acoutput8 =
 '<tr>


	        <td class = "stats">' .$row['accel8']. '</td> 
		<td class = "loads">'.number_format($ap8f['Max Load']*1.315,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.28,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.245,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.21,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.175,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.14,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.105,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.07,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']*1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap8f['Max Load'],2).'</td>

</tr>
</table>'
;  




$sref1 = $row['speed1'];
$sref2 = $row['speed2'];
$sref3 = $row['speed3'];
$sref4 = $row['speed4'];
$sref5 = $row['speed5'];
$sref6 = $row['speed6'];
$sref7 = $row['speed7'];
$sref8 = $row['speed8'];


$sp1 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref1%'";
$sp1q = @mysqli_query($con, $sp1);
$sp1f = @mysqli_fetch_array($sp1q);


$sp2 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref2%'";
$sp2q = @mysqli_query($con, $sp2);
$sp2f = @mysqli_fetch_array($sp2q);

$sp3 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref3%'";
$sp3q = @mysqli_query($con, $sp3);
$sp3f = @mysqli_fetch_array($sp3q);

$sp4 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref4%'";
$sp4q = @mysqli_query($con, $sp4);
$sp4f = @mysqli_fetch_array($sp4q);

$sp5 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref5%'";
$sp5q = @mysqli_query($con, $sp5);
$sp5f = @mysqli_fetch_array($sp5q);

$sp6 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref6%'";
$sp6q = @mysqli_query($con, $sp6);
$sp6f = @mysqli_fetch_array($sp6q);

$sp7 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref7%'";
$sp7q = @mysqli_query($con, $sp7);
$sp7f = @mysqli_fetch_array($sp7q);

$sp8 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$sref8%'";
$sp8q = @mysqli_query($con, $sp8);
$sp8f = @mysqli_fetch_array($sp8q);


$spoutput1 = 
'<tr>
	<td class = "stats">' .$row['speed1']. '</td> 
		<td class = "loads">'.number_format($sp1f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp1f['Max Load'],2).'</td>  
</tr>';

$spoutput2 =
'<td class = "stats">' .$row['speed2']. '</td> 
		<td class = "loads">'.number_format($sp2f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp2f['Max Load'],2).'</td>  
</tr>';

$spoutput3 =
'</tr>
<td class = "stats">' .$row['speed3']. '</td> 
		<td class = "loads">'.number_format($sp3f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp3f['Max Load'],2).'</td>  
</tr>';

$spoutput4 =
'</tr>
<td class = "stats">' .$row['speed4']. '</td> 
		<td class = "loads">'.number_format($sp4f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp4f['Max Load'],2).'</td>   
</tr>';


$spoutput5 =
'</tr>
<td class = "stats">' .$row['speed5']. '</td> 
		<td class = "loads">'.number_format($sp5f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp5f['Max Load'],2).'</td>    
</tr>';


$spoutput6 =
'</tr>
<td class = "stats">' .$row['speed6']. '</td> 
		<td class = "loads">'.number_format($sp6f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp6f['Max Load'],2).'</td>  

</tr>';

$spoutput7 =
'<td class = "stats">' .$row['speed7']. '</td> 
		<td class = "loads">'.number_format($sp7f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp7f['Max Load'],2).'</td>    
</tr>';

$spoutput8 =
'</tr>
<td class = "stats">' .$row['speed8']. '</td> 
		<td class = "loads">'.number_format($sp8f['Max Load']*1.45,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.4,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.35,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.3,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.25,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.2,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.15,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.1,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']*1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp8f['Max Load'],2).'</td>    
</tr>
</table>';



;





$ref1 = $row['strength1'];
$ref2 = $row['strength2'];
$ref3 = $row['strength3'];
$ref4 = $row['strength4'];
$ref5 = $row['strength5'];
$ref6 = $row['strength6'];
$ref7 = $row['strength7'];
$ref8 = $row['strength8'];





$prod1 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref1%'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);


$prod2 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref2%'";
$prod2q = @mysqli_query($con, $prod2);
$prod2f = @mysqli_fetch_array($prod2q);


$prod3 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref3%'";
$prod3q = @mysqli_query($con, $prod3);
$prod3f = @mysqli_fetch_array($prod3q);

$prod4 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref4%'";
$prod4q = @mysqli_query($con, $prod4);
$prod4f = @mysqli_fetch_array($prod4q);

$prod5 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref5%'";
$prod5q = @mysqli_query($con, $prod5);
$prod5f = @mysqli_fetch_array($prod5q);

$prod6 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref6%'";
$prod6q = @mysqli_query($con, $prod6);
$prod6f = @mysqli_fetch_array($prod6q);

$prod7 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref7%'";
$prod7q = @mysqli_query($con, $prod7);
$prod7f = @mysqli_fetch_array($prod7q);

$prod8 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref8%'";
$prod8q = @mysqli_query($con, $prod8);
$prod8f = @mysqli_fetch_array($prod8q);



$stroutput1 = 

'<tr>
	<td class = "stats">' . $row['strength1'] . '</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent /5)*5).'</td> 	 
</tr>';
	 

$stroutput2 = 	 
'<td class = "stats">' .$row['strength2'] . '</td>
		<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent /5)*5).'</td> 		


</tr>';

$stroutput3 = 
       '<td class = "stats">' .$row['strength3'] . '</td>
		<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent /5)*5).'</td> 		 


</tr>';


$stroutput4 = 
'<td class = "stats">' . $row['strength4'] . '</td>
		<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent /5)*5).'</td> 


</tr>';


$stroutput5 = 
'<td class = "stats">' .$row['strength5'] . '</td>	 	
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent /5)*5).'</td> 	


</tr>';

$stroutput6 = 
'<td class = "stats">' . $row['strength6'] . '</td>
		<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent /5)*5).'</td> 	 	


</tr>';

$stroutput7 = 
'<td class = "stats">' .$row['strength7'] . '</td>
		<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent /5)*5).'</td> 		


</tr>';

$stroutput8 = 
'<td class = "stats">' . $row['strength8'] . '</td>
		<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent /5)*5).'</td> 

		
</tr>
</table>';


$eref1 = $row['Endurance1'];
$eref2 = $row['Endurance2'];
$eref3 = $row['Endurance3'];
$eref4 = $row['Endurance4'];



$eprod1 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$eref1%'";
$eprod1q = @mysqli_query($con, $eprod1);
$eprod1f = @mysqli_fetch_array($eprod1q);


$eprod2 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$eref2%'";
$eprod2q = @mysqli_query($con, $eprod2);
$eprod2f = @mysqli_fetch_array($eprod2q);


$eprod3 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$eref3%'";
$eprod3q = @mysqli_query($con, $eprod3);
$eprod3f = @mysqli_fetch_array($eprod3q);

$eprod4 = "SELECT `Max Load` FROM `Toolshed` WHERE `Tool Name` LIKE '%$eref4%'";
$eprod4q = @mysqli_query($con, $eprod4);
$eprod4f = @mysqli_fetch_array($eprod4q);


$eoutput1 = 

'<tr>
	<td class = "stats">' . $row['Endurance1'] . '</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']*60)),0).'</td>    	 
</tr>';
	 

$eoutput2 = 	 
'<td class = "stats">' .$row['Endurance2'] . '</td>
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']*60)),0).'</td>     		


</tr>';

$eoutput3 = 
       '<td class = "stats">' .$row['Endurance3'] . '</td>
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']*60)),0).'</td>   		 


</tr>';


$eoutput4 = 
'<td class = "stats">' . $row['Endurance4'] . '</td>
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']*60)),0).'</td>  


</tr>
</table>';









}



} else {

echo "";

echo mysqli_error($con);

}



}

else {echo "There's an error running the script";}

echo ($warmuptable);
if(!empty($wref1)) {echo ($warmup1);};
if(!empty($wref2)) {echo ($warmup2);};
if(!empty($wref3)) {echo ($warmup3);};
if(!empty($wref4)) {echo ($warmup4);};
if(!empty($wref5)) {echo ($warmup5);};
if(!empty($wref6)) {echo ($warmup6);};
if(!empty($wref7)) {echo ($warmup7);};
if(!empty($wref8)) {echo ($warmup8);};

if(!empty($aref1)) {
echo ($acceltable);
if(!empty($aref1)) {echo ($acoutput1);};
if(!empty($aref2)) {echo ($acoutput2);};
if(!empty($aref3)) {echo ($acoutput3);};
if(!empty($aref4)) {echo ($acoutput4);};
if(!empty($aref5)) {echo ($acoutput5);};
if(!empty($aref6)) {echo ($acoutput6);};
if(!empty($aref7)) {echo ($acoutput7);};
if(!empty($aref8)) {echo ($acoutput8);};

}

else {};

if(!empty($sref1)) {
echo ($speedtable);
if(!empty($sref1)) {echo ($spoutput1);};
if(!empty($sref2)) {echo ($spoutput2);};
if(!empty($sref3)) {echo ($spoutput3);};
if(!empty($sref4)) {echo ($spoutput4);};
if(!empty($sref5)) {echo ($spoutput5);};
if(!empty($sref6)) {echo ($spoutput6);};
if(!empty($sref7)) {echo ($spoutput7);};
if(!empty($sref8)) {echo ($spoutput8);};

}

else {};


if(!empty($ref1)) {
echo ($strengthtable);
if(!empty($ref1)) {echo ($stroutput1);};
if(!empty($ref2)) {echo ($stroutput2);};
if(!empty($ref3)) {echo ($stroutput3);};
if(!empty($ref4)) {echo ($stroutput4);};
if(!empty($ref5)) {echo ($stroutput5);};
if(!empty($ref6)) {echo ($stroutput6);};
if(!empty($ref7)) {echo ($stroutput7);};
if(!empty($ref8)) {echo ($stroutput8);};


}

if(!empty($eref1)) {
echo ($endutable);
if(!empty($eref1)) {echo ($eoutput1);};
if(!empty($eref2)) {echo ($eoutput2);};
if(!empty($eref3)) {echo ($eoutput3);};
if(!empty($eref4)) {echo ($eoutput4);};

}


if(!empty($staref1)) {
echo ($stabtable);
if(!empty($staref1)) {echo ($stab1);};
if(!empty($staref2)) {echo ($stab2);};
if(!empty($staref3)) {echo ($stab3);};
if(!empty($staref4)) {echo ($stab4);};
if(!empty($staref5)) {echo ($stab5);};
if(!empty($staref6)) {echo ($stab6);};
if(!empty($staref7)) {echo ($stab7);};
if(!empty($staref8)) {echo ($stab8);};


}


if(!empty($mobref1)) {
echo ($mobtable);
if(!empty($mobref1)) {echo ($mob1);};
if(!empty($mobref2)) {echo ($mob2);};
if(!empty($mobref3)) {echo ($mob3);};
if(!empty($mobref4)) {echo ($mob4);};
if(!empty($mobref5)) {echo ($mob5);};
if(!empty($mobref6)) {echo ($mob6);};
if(!empty($mobref7)) {echo ($mob7);};
if(!empty($mobref8)) {echo ($mob8);};


}




// Close connection to the database
mysqli_close($con);


?>