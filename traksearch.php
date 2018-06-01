<?php
// Get a connection for the database

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);
	$gender= $_POST["gender"];
	$age= $_POST["age"];
	$units= $_POST["units"];
	$adjustment = $age * $gender;
	
	

   if(isset($_POST["query2"]))  
 {  
	$query = "SELECT *FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
   
       $warmsets = "SELECT `warmsets`,`warmreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $warmsetsq = @mysqli_query($con, $warmsets);
       $warmsetsf = @mysqli_fetch_array($warmsetsq);
       
       
	
	$acc1 = "SELECT `accel1` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
	$acc1q = @mysqli_query($con, $acc1);
	
	
       $plyosets= "SELECT `plyosets`,`plyoreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $plyosetsq= @mysqli_query($con, $plyosets);
       $plyosetsf= @mysqli_fetch_array($plyosetsq);
	
	
	
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
       
       $tensets= "SELECT `tensionsets`,`tensionreps` FROM `TrakDatabase` Where `Trakname` LIKE '%".$_POST["query2"]."%'";
       $tensetsq= @mysqli_query($con, $tensets);
       $tensetsf= @mysqli_fetch_array($tensetsq);
       $tenpercent = 1 - ($tensetsf['tensionsets'] * .025);
       
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
      
     
      
       
        $KB = '<img src = "/images/KB.png" height = 68px width = 78px>';
	$KBKB = '<img src = "/images/KB KB.png" height = 18px width = 28px>';
	$DB = '<img src = "/images/DB.png" height = 15px width = 20px>';
	$DBDB = '<img src = "/images/KB KB.png" height = 18px width = 28px>';
	$SPRINT = '<img src = "/images/Sprint.png" height = 48px width = 58px>';

$testq = "SELECT `image` FROM `Toolshed` WHERE `Tool Name` = \'550m Row\'";

$testresponse = @mysqli_query($con, $testq);

$test = @mysqli_fetch_array($testresponse);



    




// mysqli_fetch_array will return a row of data from the query
// until no further data is available

 if(mysqli_num_rows($response) > 0)  {
 
 
while($row = @mysqli_fetch_array($response)){

$notes = $row["Notes:"];
 

$loadtable = '


		



 <table style = "width: 100%; margin-top:0px;">
<tr>
 <th class = "adminhead">LEVEL 1</th>
  <th class = "adminhead">LEVEL 2</th>
   <th class = "adminhead">LEVEL 3</th>
    <th class = "adminhead">LEVEL 4</th>
    <th class = "adminhead">LEVEL 5</th>
    <th class = "adminhead">LEVEL 6</th>
    <th class = "adminhead">LEVEL 7</th>
    <th class = "adminhead">LEVEL 8</th>
    <th class = "adminhead">LEVEL 9</th>
    <th class = "adminhead">LEVEL 10</th>

</tr>

<tr>
<td class = "load1">100<span class = "units">watts</span></td>
 <td class = "load2">210<span class = "units">watts</span></td>
 <td class = "load3">320<span class = "units">watts</span></td>
 <td class = "load4">430<span class = "units">watts</span></td>
 <td class = "load5">540<span class = "units">watts</span></td>
 <td class = "load6">650<span class = "units">watts</span></td>
 <td class = "load7">760<span class = "units">watts</span></td>
 <td class = "load8">870<span class = "units">watts</span></td>
  <td class = "load9">980<span class = "units">watts</span></td>
 <td class = "load10">1090<span class = "units">watts</span></td>

		</tr></table><br><br>



';

$plyotable= 


'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">PLIABILITY</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$plyosetsf['plyosets'].'</span></th>

<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$plyosetsf['plyoreps'].'</span></th>


</table>';


$acceltable = 


'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none;background-color:rgb(70,158,1)" ><span class = "zonetitle">ACCELERATION</span></td>



<th style = "border:none; width:20px; text-align:right; background-color:rgb(70,158,1) "><span class = "zonetitle" style = "color:#333;">INTERVALS</span></th> 

<th style = "border:none; text-align:center; width:20px;background-color:rgb(70,158,1) "><span class = "zonetitle" >'.$accelsetsf ['accelreps'].'</span></th>
</table>';

$speedtable = 

'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">VELOCITY</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">INTERVALS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$speedrepsf ['speedsets'].'</span></th>
</table>';


$tensiontable= 

'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">TENSION</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$tensetsf['tensionsets'].'</span></th>

<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$tensetsf['tensionreps'].'</span></th>


</table>';







$endutable = 

'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">ENDURANCE</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">INTERVALS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$intervalsf ['intervals'].'</span></th>

<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">REST</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$intervalsf ['interrest'].'</span></th>


</table>';



$stabtable = 
'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">STABILITY</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$stabsetsf ['stabsets'].'</span></th>

<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$stabsetsf ['stabreps'].'</span></th></table>';

$staref1 = $row['stability1'];
$staref2 = $row['stability2'];
$staref3 = $row['stability3'];
$staref4 = $row['stability4'];
$staref5 = $row['stability5'];
$staref6 = $row['stability6'];
$staref7 = $row['stability7'];
$staref8 = $row['stability8'];


$stabv1 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref1%'";
$stabq1= @mysqli_query($con, $stabv1);
$stab1f= @mysqli_fetch_array($stabq1);

$stabv2 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref2%'";
$stabq2= @mysqli_query($con, $stabv2);
$stab2f= @mysqli_fetch_array($stabq2);


$stabv3 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref3%'";
$stabq3= @mysqli_query($con, $stabv3);
$stab3f= @mysqli_fetch_array($stabq3);

$stabv4 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref4%'";
$stabq4= @mysqli_query($con, $stabv4);
$stab4f= @mysqli_fetch_array($stabq4);

$stabv5 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref5%'";
$stabq5= @mysqli_query($con, $stabv5);
$stab5f= @mysqli_fetch_array($stabq5);

$stabv6 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref6%'";
$stabq6= @mysqli_query($con, $stabv6);
$stab6f= @mysqli_fetch_array($stabq6);


$stabv7 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref7%'";
$stabq7= @mysqli_query($con, $stabv7);
$stab7f= @mysqli_fetch_array($stabq7);

$stabv8 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$staref8%'";
$stabq8= @mysqli_query($con, $stabv8);
$stab8f= @mysqli_fetch_array($stabq8);



$stab1=
'<table><tr><td class = "stats2" style = "padding:10px;" ><a href = "'.$stab1f['Video Link'].'"target="_blank">'.$staref1.'</a></td>';

$stab2=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$stab2f['Video Link'].'"target="_blank">'.$staref2.'</a></td>';
      
$stab3=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$stab3f['Video Link'].'"target="_blank">'.$staref3.'</a></td>';

$stab4=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$stab4f['Video Link'].'"target="_blank">'.$staref4.'</a></td>';

$stab5=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$stab5f['Video Link'].'"target="_blank">'.$staref5.'</a></td>';

$stab6=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$stab6f['Video Link'].'"target="_blank">'.$staref6.'</a></td>';

$stab7=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$stab7f['Video Link'].'"target="_blank">'.$staref7.'</a></td>';

$stab8=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$stab8f['Video Link'].'"target="_blank">'.$staref8.'</a></td></tr></table>';

$plyoref1= $row['plyo1'];
$plyoref2= $row['plyo2'];
$plyoref3= $row['plyo3'];
$plyoref4= $row['plyo4'];
$plyoref5= $row['plyo5'];
$plyoref6= $row['plyo6'];
$plyoref7= $row['plyo7'];
$plyoref8= $row['plyo8'];


$plyov1= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref1%'";
$plyoq1= @mysqli_query($con, $plyov1);
$plyof1= @mysqli_fetch_array($plyoq1);

$plyov2= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref2%'";
$plyoq2= @mysqli_query($con, $plyov2);
$plyof2= @mysqli_fetch_array($plyoq2);

$plyov3= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref3%'";
$plyoq3= @mysqli_query($con, $plyov3);
$plyof3= @mysqli_fetch_array($plyoq3);

$plyov4= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref4%'";
$plyoq4= @mysqli_query($con, $plyov4);
$plyof4= @mysqli_fetch_array($plyoq4);

$plyov5= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref5%'";
$plyoq5= @mysqli_query($con, $plyov5);
$plyof5= @mysqli_fetch_array($plyoq5);

$plyov6= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref6%'";
$plyoq6= @mysqli_query($con, $plyov6);
$plyof6= @mysqli_fetch_array($plyoq6);


$plyov7= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref7%'";
$plyoq7= @mysqli_query($con, $plyov7);
$plyof7= @mysqli_fetch_array($plyoq7);

$plyov8= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$plyoref8%'";
$plyoq8= @mysqli_query($con, $plyov8);
$plyof8= @mysqli_fetch_array($plyoq8);



$plyo1=
'<table><tr><td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo1f['Video Link'].'"target="_blank">'.$plyoref1.'</a></td>';

$plyo2=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo2f['Video Link'].'"target="_blank">'.$plyoref2.'</a></td>';
      
$plyo3=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo3f['Video Link'].'"target="_blank">'.$plyoref3.'</a></td>';

$plyo4=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo4f['Video Link'].'"target="_blank">'.$plyoref4.'</a></td>';

$plyo5=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo5f['Video Link'].'"target="_blank">'.$plyoref5.'</a></td>';

$plyo6=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo6f['Video Link'].'"target="_blank">'.$plyoref6.'</a></td>';

$plyo7=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo7f['Video Link'].'"target="_blank">'.$plyoref7.'</a></td>';

$plyo8=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$plyo8f['Video Link'].'"target="_blank">'.$plyoref8.'</a></td></tr></table>';








$aref1 = $row['accel1'];
$aref2 = $row['accel2'];
$aref3 = $row['accel3'];
$aref4 = $row['accel4'];
$aref5 = $row['accel5'];


$mobtable = 
 
'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">RANGE</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$mobsetsf ['mobsets'].'</span></th>

<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SECS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$mobsetsf ['mobreps'].'</span></th></table>';





$mobref1 = $row['mobility1'];
$mobref2 = $row['mobility2'];
$mobref3 = $row['mobility3'];
$mobref4 = $row['mobility4'];
$mobref5 = $row['mobility5'];
$mobref6 = $row['mobility6'];
$mobref7 = $row['mobility7'];
$mobref8 = $row['mobility8'];



$mobv1= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref1%'";
$mobq1= @mysqli_query($con, $mobv1);
$mob1f= @mysqli_fetch_array($mobq1);

$mobv2= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref2%'";
$mobq2= @mysqli_query($con, $mobv2);
$mob2f= @mysqli_fetch_array($mobq2);


$mobv3= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref3%'";
$mobq3= @mysqli_query($con, $mobv3);
$mob3f= @mysqli_fetch_array($mobq3);

$mobv4= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref4%'";
$mobq4= @mysqli_query($con, $mobv4);
$mob4f= @mysqli_fetch_array($mobq4);

$mobv5= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref5%'";
$mobq5= @mysqli_query($con, $mobv5);
$mob5f= @mysqli_fetch_array($mobq5);

$mobv6= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref6%'";
$mobq6= @mysqli_query($con, $mobv6);
$mob6f= @mysqli_fetch_array($mobq6);


$mobv7= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref7%'";
$mobq7= @mysqli_query($con, $mobv7);
$mob7f= @mysqli_fetch_array($mobq7);


$mobv8= "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$mobref8%'";
$mobq8= @mysqli_query($con, $mobv8);
$mob8f= @mysqli_fetch_array($mobq8);







$mob1=
'<table><tr><td class = "stats2" style = "padding:10px;" ><a href = "'.$mob1f['Video Link'].'"target="_blank">'.$mobref1.'</a></td>';


$mob2=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$mob2f['Video Link'].'"target="_blank">'.$mobref2.'</a></td>';

$mob3=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$mob3f['Video Link'].'"target="_blank">'.$mobref3.'</a></td>';

$mob4=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$mob4f['Video Link'].'"target="_blank">'.$mobref4.'</a></td>';

$mob5=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$mob5f['Video Link'].'"target="_blank">'.$mobref5.'</a></td>';

$mob6=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$mob6f['Video Link'].'"target="_blank">'.$mobref6.'</a></td>';

$mob7=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$mob7f['Video Link'].'"target="_blank">'.$mobref7.'</a></td>';

$mob8=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$mob8f['Video Link'].'"target="_blank">'.$mobref8.'</a></td>
</table>
</div>';



$strengthtable=



'<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">FORCE</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$strsetsf ['strengthsets'].'</span></th>

<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$strsetsf ['strengthreps'].'</span></th>

';



$warmuptable = '
<table style = "width:100%; border:0px;"><tr><td  style = "color:#333; font-size:11px; border:none; background-color:rgb(70,158,1);" ><span class = "zonetitle">WARMUP</span></td>



<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">SETS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$warmsetsf ['warmsets'].'</span></th>

<th style = "border:none; background-color:rgb(70,158,1); width:20px; text-align:right;  "><span class = "zonetitle" style = "color:#333;">REPS</span></th> 

<th style = "border:none; background-color:rgb(70,158,1); text-align:center; width:20px; "><span class = "zonetitle" >'.$warmsetsf ['warmreps'].'</span></th></table>';



$wref1 = $row['warm1'];
$wref2 = $row['warm2'];
$wref3 = $row['warm3'];
$wref4 = $row['warm4'];
$wref5 = $row['warm5'];
$wref6 = $row['warm6'];
$wref7 = $row['warm7'];
$wref8 = $row['warm8'];

$warmv1 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref1%'";
$warm1q= @mysqli_query($con, $warmv1);
$warm1f= @mysqli_fetch_array($warm1q);

$warmv2 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref2%'";
$warm2q= @mysqli_query($con, $warmv2);
$warm2f= @mysqli_fetch_array($warm2q);

$warmv3 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref3%'";
$warm3q= @mysqli_query($con, $warmv3);
$warm3f= @mysqli_fetch_array($warm3q);

$warmv4 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref4%'";
$warm4q= @mysqli_query($con, $warmv4);
$warm4f= @mysqli_fetch_array($warm4q);

$warm51 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref5%'";
$warm5q= @mysqli_query($con, $warmv5);
$warm5f= @mysqli_fetch_array($warm5q);

$warmv6 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref6%'";
$warm6q= @mysqli_query($con, $warmv6);
$warm6f= @mysqli_fetch_array($warm6q);

$warmv7 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref7%'";
$warm7q= @mysqli_query($con, $warmv7);
$warm7f= @mysqli_fetch_array($warm7q);

$warmv8 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref8%'";
$warm8q= @mysqli_query($con, $warmv8);
$warm8f= @mysqli_fetch_array($warm8q);



$warmv1 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$wref1%'";
$warm1q= @mysqli_query($con, $warmv1);
$warm1f= @mysqli_fetch_array($warm1q);



$warmup1= 
'<table ><tr><td class = "stats2" style = "padding:10px;" ><a href = "'.$warm1f['Video Link'].'"target="_blank">'.$wref1.'</a></td>';

$warmup2=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$warm2f['Video Link'].'"target="_blank">'.$wref2.'</a></td>';
      

$warmup3=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$warm3f['Video Link'].'"target="_blank">'.$wref3.'</a></td>';

$warmup4=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$warm4f['Video Link'].'"target="_blank">'.$wref4.'</a></td>';

$warmup5=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$warm5f['Video Link'].'"target="_blank">'.$wref5.'</a></td>';

$warmup6=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$warm6f['Video Link'].'"target="_blank">'.$wref6.'</a></td>';

$warmup7=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$warm7f['Video Link'].'"target="_blank">'.$wref7.'</a></td>';

$warmup8=
'<td class = "stats2" style = "padding:10px;" ><a href = "'.$warm8f['Video Link'].'"target="_blank">'.$wref8.'</a></td></tr></table>';









$aref1 = $row['accel1'];
$aref2 = $row['accel2'];
$aref3 = $row['accel3'];
$aref4 = $row['accel4'];
$aref5 = $row['accel5'];
$aref6 = $row['accel6'];
$aref7 = $row['accel7'];
$aref8 = $row['accel8'];



$ap1 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref1%'";
$ap1q = @mysqli_query($con, $ap1);
$ap1f = @mysqli_fetch_array($ap1q);



$ap2 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref2%'";
$ap2q = @mysqli_query($con, $ap2);
$ap2f = @mysqli_fetch_array($ap2q);

$ap3 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref3%'";
$ap3q = @mysqli_query($con, $ap3);
$ap3f = @mysqli_fetch_array($ap3q);

$ap4 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref4%'";
$ap4q = @mysqli_query($con, $ap4);
$ap4f = @mysqli_fetch_array($ap4q);

$ap5 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref5%'";
$ap5q = @mysqli_query($con, $ap5);
$ap5f = @mysqli_fetch_array($ap5q);

$ap6 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref6%'";
$ap6q = @mysqli_query($con, $ap6);
$ap6f = @mysqli_fetch_array($ap6q);

$ap7 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref7%'";
$ap7q = @mysqli_query($con, $ap7);
$ap7f = @mysqli_fetch_array($ap7q);

$ap8 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$aref8%'";
$ap8q = @mysqli_query($con, $ap8);
$ap8f = @mysqli_fetch_array($ap8q);



$acoutput1 =
 '<table style = "width: 100%;">

<tr>
<td class = "zonetitle" style = "background-color:rgb(110,110,110);padding:10px;"><span style = "color:rgb(70,158,1);">E</span>LEVEL</td>
<td class = "load1" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;"><span style = "color:rgb(70,158,1);"> 1<span class = "units"> sec</span></td>
<td class = "load2" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 2<span class = "units"> sec</span></td>
<td class = "load3" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 3<span class = "units"> sec</span></td>
<td class = "load4" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 4<span class = "units"> sec</span></td>
<td class = "load5" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 5<span class = "units"> sec</span></td>
<td class = "load6" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 6<span class = "units"> sec</span></td>
<td class = "load7" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 7<span class = "units"> sec</span></td>
<td class = "load8" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 8<span class = "units"> sec</span></td>
<td class = "load9" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 9<span class = "units"> sec</span></td>
<td class = "load10" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 10<span class = "units"> sec</span></td>
		</tr>

		
<tr>


	        <td class = "stats" class="align-middle" ><a href = "'.$ap1f['Video Link'].'">'.$row['accel1'].'</a></td> 
		<td class = "loads">'.number_format($ap1f['Max Load']* $adjustment * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap1f['Max Load']* (1+(1-$adjustment)),2).'</td>
</tr>'
;  

$acoutput2 =
 '<tr>


	         <td class = "stats" class="align-middle" ><a href = "'.$ap2f['Video Link'].'">'.$row['accel2'].'</a></td> 
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap2f['Max Load']* (1+(1-$adjustment)),2).'</td>

</tr>'
;  


$acoutput3 =
 '<tr>


	         <td class = "stats" class="align-middle" ><a href = "'.$ap3f['Video Link'].'">'.$row['accel3'].'</a></td> 
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap3f['Max Load']* (1+(1-$adjustment)),2).'</td>

</tr>'
;  


$acoutput4 =
 '<tr>


	         <td class = "stats" class="align-middle" ><a href = "'.$ap4f['Video Link'].'">'.$row['accel4'].'</a></td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap4f['Max Load']* (1+(1-$adjustment)),2).'</td>

</tr>'
;  

$acoutput5 =
 '<tr>


	         <td class = "stats" class="align-middle" ><a href = "'.$ap5f['Video Link'].'">'.$row['accel5'].'</a></td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap5f['Max Load']* (1+(1-$adjustment)),2).'</td>

</tr>'
;  

$acoutput6 =
 '<tr>


	         <td class = "stats" class="align-middle" ><a href = "'.$ap6f['Video Link'].'">'.$row['accel6'].'</a></td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap6f['Max Load']* (1+(1-$adjustment)),2).'</td>

</tr>'
;  

$acoutput7 =
 '<tr>


	         <td class = "stats" class="align-middle" ><a href = "'.$ap7f['Video Link'].'">'.$row['accel7'].'</a></td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap7f['Max Load']* (1+(1-$adjustment)),2).'</td>

</tr>'
;  

$acoutput8 =
 '<tr>


	         <td class = "stats" class="align-middle" ><a href = "'.$ap8f['Video Link'].'">'.$row['accel8'].'</a></td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.315,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.28,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.245,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.21,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.175,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.14,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.105,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.07,2).'</td>
		<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)) * 1.035,2).'</td>
	 	<td class = "loads">'.number_format($ap8f['Max Load']* (1+(1-$adjustment)),2).'</td>
	 	
	 	

</tr></table>'
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

'<table style = "width: 100%;">

<tr>
<td class = "zonetitle" style = "background-color:rgb(110,110,110);padding:10px;"><span style = "color:rgb(70,158,1);">E</span>LEVEL</td>
<td class = "load1" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;"><span style = "color:rgb(70,158,1);"> 1<span class = "units"> sec</span></td>
<td class = "load2" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 2<span class = "units"> sec</span></td>
<td class = "load3" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 3<span class = "units"> sec</span></td>
<td class = "load4" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 4<span class = "units"> sec</span></td>
<td class = "load5" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 5<span class = "units"> sec</span></td>
<td class = "load6" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 6<span class = "units"> sec</span></td>
<td class = "load7" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 7<span class = "units"> sec</span></td>
<td class = "load8" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 8<span class = "units"> sec</span></td>
<td class = "load9" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 9<span class = "units"> sec</span></td>
<td class = "load10" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 10<span class = "units"> sec</span></td>
		</tr>




<table style = "width: 100%;">		
<tr>
	<td class = "stats">' .$row['speed1']. '</td> 
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp1f['Max Load']* (1+(1-$adjustment)),2).'</td>  
</tr>';

$spoutput2 =
'<td class = "stats">' .$row['speed2']. '</td> 
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp2f['Max Load']* (1+(1-$adjustment)),2).'</td>  
</tr>';

$spoutput3 =
'</tr>
<td class = "stats">' .$row['speed3']. '</td> 
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp3f['Max Load']* (1+(1-$adjustment)),2).'</td>  
</tr>';

$spoutput4 =
'</tr>
<td class = "stats">' .$row['speed4']. '</td> 
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp4f['Max Load']* (1+(1-$adjustment)),2).'</td>  
</tr>';


$spoutput5 =
'</tr>
<td class = "stats">' .$row['speed5']. '</td> 
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp5f['Max Load']* (1+(1-$adjustment)),2).'</td>  
</tr>';


$spoutput6 =
'</tr>
<td class = "stats">' .$row['speed6']. '</td> 
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp6f['Max Load']* (1+(1-$adjustment)),2).'</td>  

</tr>';

$spoutput7 =
'<td class = "stats">' .$row['speed7']. '</td> 
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp7f['Max Load']* (1+(1-$adjustment)),2).'</td>    
</tr>';

$spoutput8 =
'</tr>
<td class = "stats">' .$row['speed8']. '</td> 
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.45,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.4,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.35,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.3,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.25,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.2,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.15,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.1,2).'</td>
		<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)) * 1.05,2).'</td>
	 	<td class = "loads">'.number_format($sp8f['Max Load']* (1+(1-$adjustment)),2).'</td>  
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





$prod1 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref1%'";
$prod1q = @mysqli_query($con, $prod1);
$prod1f = @mysqli_fetch_array($prod1q);


$prod2 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref2%'";
$prod2q = @mysqli_query($con, $prod2);
$prod2f = @mysqli_fetch_array($prod2q);


$prod3 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref3%'";
$prod3q = @mysqli_query($con, $prod3);
$prod3f = @mysqli_fetch_array($prod3q);

$prod4 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref4%'";
$prod4q = @mysqli_query($con, $prod4);
$prod4f = @mysqli_fetch_array($prod4q);

$prod5 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref5%'";
$prod5q = @mysqli_query($con, $prod5);
$prod5f = @mysqli_fetch_array($prod5q);

$prod6 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref6%'";
$prod6q = @mysqli_query($con, $prod6);
$prod6f = @mysqli_fetch_array($prod6q);

$prod7 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref7%'";
$prod7q = @mysqli_query($con, $prod7);
$prod7f = @mysqli_fetch_array($prod7q);

$prod8 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$ref8%'";
$prod8q = @mysqli_query($con, $prod8);
$prod8f = @mysqli_fetch_array($prod8q);



$stroutput1 = 

'<table style = "width: 100%;">

<tr>
<td class = "zonetitle" style = "background-color:rgb(110,110,110);padding:10px;"><span style = "color:rgb(70,158,1);">E</span>LEVEL</td>
<td class = "load1" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;"><span style = "color:rgb(70,158,1);"> 1<span class = "units"> lbs</span></td>
<td class = "load2" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 2<span class = "units"> lbs</span></td>
<td class = "load3" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 3<span class = "units"> lbs</span></td>
<td class = "load4" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 4<span class = "units"> lbs</span></td>
<td class = "load5" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 5<span class = "units"> lbs</span></td>
<td class = "load6" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 6<span class = "units"> lbs</span></td>
<td class = "load7" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 7<span class = "units"> lbs</span></td>
<td class = "load8" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 8<span class = "units"> lbs</span></td>
<td class = "load9" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 9<span class = "units"> lbs</span></td>
<td class = "load10" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 10<span class = "units"> lbs</span></td>
		</tr>

		
<tr>		
	<td class = "stats"><a href = "'.$prod1f['Video Link'].'"target="_blank">'.$row['strength1'].'</a></td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod1f ['Max Load'] * $percent * $adjustment /5)*5).'</td>  	 
</tr>';
	 

$stroutput2 = 	 
'<td class = "stats"><a href = "'.$prod2f['Video Link'].'"target="_blank">'.$row['strength2'].'</a></td> 
		<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod2f ['Max Load'] * $percent * $adjustment / 5)*5).'</td> 		


</tr>';

$stroutput3 = 
       '<td class = "stats"><a href = "'.$prod3f['Video Link'].'"target="_blank">'.$row['strength3'].'</a></td> 
		<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod3f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 		 


</tr>';


$stroutput4 = 
'<td class = "stats"><a href = "'.$prod4f['Video Link'].'"target="_blank">'.$row['strength4'].'</a></td> 
		<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod4f ['Max Load'] * $percent * $adjustment  /5)*5).'</td> 

</tr>';


$stroutput5 = 
'<td class = "stats"><a href = "'.$prod5f['Video Link'].'"target="_blank">'.$row['strength5'].'</a></td> 	 	
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod5f ['Max Load'] * $percent * $adjustment  /5)*5).'</td> 	


</tr>';

$stroutput6 = 
'<td class = "stats"><a href = "'.$prod6f['Video Link'].'"target="_blank">'.$row['strength6'].'</a></td> 
		<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod6f ['Max Load'] * $percent * $adjustment  /5)*5).'</td> 

</tr>';

$stroutput7 = 
'<td class = "stats"><a href = "'.$prod7f['Video Link'].'"target="_blank">'.$row['strength7'].'</a></td> 
		<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod7f ['Max Load'] * $percent * $adjustment  /5)*5).'</td> 		


</tr>';

$stroutput8 = 
'<td class = "stats"><a href = "'.$prod8f['Video Link'].'"target="_blank">'.$row['strength8'].'</a></td> 
		<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($prod8f ['Max Load'] * $percent * $adjustment  /5)*5).'</td> 
		
</tr>
</table>';



$tref1 = $row['tension1'];
$tref2 = $row['tension2'];
$tref3 = $row['tension3'];
$tref4 = $row['tension4'];
$tref5 = $row['tension5'];
$tref6 = $row['tension6'];
$tref7 = $row['tension7'];
$tref8 = $row['tension8'];





$tprod1 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref1%'";
$tprod1q = @mysqli_query($con, $tprod1);
$tprod1f = @mysqli_fetch_array($tprod1q);


$tprod2 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref2%'";
$tprod2q = @mysqli_query($con, $tprod2);
$tprod2f = @mysqli_fetch_array($tprod2q);


$tprod3 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref3%'";
$tprod3q = @mysqli_query($con, $tprod3);
$tprod3f = @mysqli_fetch_array($tprod3q);

$tprod4 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref4%'";
$tprod4q = @mysqli_query($con, $tprod4);
$tprod4f = @mysqli_fetch_array($tprod4q);

$tprod5 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref5%'";
$tprod5q = @mysqli_query($con, $tprod5);
$tprod5f = @mysqli_fetch_array($tprod5q);

$tprod6 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref6%'";
$tprod6q = @mysqli_query($con, $tprod6);
$tprod6f = @mysqli_fetch_array($tprod6q);

$tprod7 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref7%'";
$tprod7q = @mysqli_query($con, $tprod7);
$tprod7f = @mysqli_fetch_array($tprod7q);

$tprod8 = "SELECT `Max Load`,`Video Link` FROM `Toolshed` WHERE `Tool Name` LIKE '%$tref8%'";
$tprod8q = @mysqli_query($con, $tprod8);
$tprod8f = @mysqli_fetch_array($tprod8q);



$toutput1= 

'<table style = "width: 100%;">

<tr>
<td class = "zonetitle" style = "background-color:rgb(110,110,110);padding:10px;"><span style = "color:rgb(70,158,1);">E</span>LEVEL</td>
<td class = "load1" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;"><span style = "color:rgb(70,158,1);"> 1<span class = "units"> lbs</span></td>
<td class = "load2" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 2<span class = "units"> lbs</span></td>
<td class = "load3" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 3<span class = "units"> lbs</span></td>
<td class = "load4" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 4<span class = "units"> lbs</span></td>
<td class = "load5" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 5<span class = "units"> lbs</span></td>
<td class = "load6" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 6<span class = "units"> lbs</span></td>
<td class = "load7" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 7<span class = "units"> lbs</span></td>
<td class = "load8" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 8<span class = "units"> lbs</span></td>
<td class = "load9" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 9<span class = "units"> lbs</span></td>
<td class = "load10" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 10<span class = "units"> lbs</span></td>
		</tr>

		
<tr>
	<td class = "stats"><a href = "'.$tprod1f['Video Link'].'"target="_blank">'.$row['tension1'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod1f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	 
</tr>';
	 

$toutput2= 

'<tr>
	<td class = "stats"><a href = "'.$tprod2f['Video Link'].'"target="_blank">'.$row['tension2'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod2f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	  
</tr>';


$toutput3= 

'<tr>
	<td class = "stats"><a href = "'.$tprod3f['Video Link'].'"target="_blank">'.$row['tension3'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod3f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	 	 
</tr>';


$toutput4= 

'<tr>
	<td class = "stats"><a href = "'.$tprod4f['Video Link'].'"target="_blank">'.$row['tension4'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod4f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	 
</tr>';

$toutput5= 

'<tr>
	<td class = "stats"><a href = "'.$tprod5f['Video Link'].'"target="_blank">'.$row['tension5'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod5f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	 	 
</tr>';

$toutput6= 

'<tr>
	<td class = "stats"><a href = "'.$tprod6f['Video Link'].'"target="_blank">'.$row['tension6'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod6f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	 	 
</tr>';

$toutput7= 

'
<tr>
	<td class = "stats"><a href = "'.$tprod1f['Video Link'].'"target="_blank">'.$row['tension7'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod7f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	  
</tr>';

$toutput8= 

'


<tr>
	<td class = "stats"><a href = "'.$tprod8f['Video Link'].'"target="_blank">'.$row['tension8'].'</a></td> 
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .1/5)*5).'</td>  	 	
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .2/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .3/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .4/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .5/5)*5).'</td>  
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .6/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .7/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .8/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment * .9/5)*5).'</td> 
	 	<td class = "loads">'.(ceil($tprod8f ['Max Load'] * $percent * $adjustment /5)*5).'</td> 	  
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

'<table style = "width:100%;">



<tr>
<td class = "zonetitle" style = "background-color:rgb(110,110,110);padding:10px;"><span style = "color:rgb(70,158,1);">E</span>LEVEL</td>
<td class = "load1" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;"><span style = "color:rgb(70,158,1);"> 1<span class = "units"> m:ss</span></td>
<td class = "load2" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 2<span class = "units"> m:ss</span></td>
<td class = "load3" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 3<span class = "units"> m:ss</span></td>
<td class = "load4" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 4<span class = "units"> m:ss</span></td>
<td class = "load5" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 5<span class = "units"> m:ss</span></td>
<td class = "load6" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 6<span class = "units"> m:ss</span></td>
<td class = "load7" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 7<span class = "units"> m:ss</span></td>
<td class = "load8" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 8<span class = "units"> m:ss</span></td>
<td class = "load9" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 9<span class = "units"> m:ss</span></td>
<td class = "load10" valign="middle" style = "font-family:Audiowide; text-align:center;font-size:20px;""><span style = "color:rgb(70,158,1);"> 10<span class = "units"> m:ss</span></td>
		</tr>

		
<tr>


	<td class = "stats">' . $row['Endurance1'] . '</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod1f['Max Load']* (1+(1-$adjustment)) * 60)),0).'</td>    	 
</tr>';
	 

$eoutput2 = 	 
'<td class = "stats">' .$row['Endurance2'] . '</td>
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod2f['Max Load']* (1+(1-$adjustment)) * 60)),0).'</td>    	     		


</tr>';

$eoutput3 = 
       '<td class = "stats">' .$row['Endurance3'] . '</td>
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod3f['Max Load']* (1+(1-$adjustment)) * 60)),0).'</td>    	 		 


</tr>';


$eoutput4 = 
'<td class = "stats">' . $row['Endurance4'] . '</td>
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.9*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.8*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.7*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.6*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.5*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.4*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.3*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.2*60)),0).'</td> 
		<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 1.1*60)),0).'</td>  
	 	<td class = "loads">'.ltrim(date("i:s", ($eprod4f['Max Load']* (1+(1-$adjustment)) * 60)),0).'</td>    	


</tr>
</table>';









}



} else {

echo "";

echo "Search Error!";

}



}

else {echo "";}



if(!empty($wref1)) {echo ($warmuptable);};
if(!empty($wref1)) {echo ($warmup1);};
if(!empty($wref2)) {echo ($warmup2);};
if(!empty($wref3)) {echo ($warmup3);};
if(!empty($wref4)) {echo ($warmup4);};
if(!empty($wref5)) {echo ($warmup5);};
if(!empty($wref6)) {echo ($warmup6);};
if(!empty($wref7)) {echo ($warmup7);};
if(!empty($wref8)) {echo ($warmup8);};

if(!empty($plyoref1)) {echo ($plyotable);};
if(!empty($plyoref1)) {echo ($plyo1);};
if(!empty($plyoref2)) {echo ($plyo2);};
if(!empty($plyoref3)) {echo ($plyo3);};
if(!empty($plyoref4)) {echo ($plyo4);};
if(!empty($plyoref5)) {echo ($plyo5);};
if(!empty($plyoref6)) {echo ($plyo6);};
if(!empty($plyoref7)) {echo ($plyo7);};
if(!empty($plyoref8)) {echo ($plyo8);};

if(!empty($aref1)) {echo ($acceltable);};
if(!empty($aref1)) {echo ($acoutput1);};
if(!empty($aref2)) {echo ($acoutput2);};
if(!empty($aref3)) {echo ($acoutput3);};
if(!empty($aref4)) {echo ($acoutput4);};
if(!empty($aref5)) {echo ($acoutput5);};
if(!empty($aref6)) {echo ($acoutput6);};
if(!empty($aref7)) {echo ($acoutput7);};
if(!empty($aref8)) {echo ($acoutput8);}; 



if(!empty($sref1)) {echo ($speedtable);};
if(!empty($sref1)) {echo ($spoutput1);};
if(!empty($sref2)) {echo ($spoutput2);};
if(!empty($sref3)) {echo ($spoutput3);};
if(!empty($sref4)) {echo ($spoutput4);};
if(!empty($sref5)) {echo ($spoutput5);};
if(!empty($sref6)) {echo ($spoutput6);};
if(!empty($sref7)) {echo ($spoutput7);};
if(!empty($sref8)) {echo ($spoutput8);};



if(!empty($ref1)) {echo ($strengthtable);};
if(!empty($ref1)) {echo ($stroutput1);};
if(!empty($ref2)) {echo ($stroutput2);};
if(!empty($ref3)) {echo ($stroutput3);};
if(!empty($ref4)) {echo ($stroutput4);};
if(!empty($ref5)) {echo ($stroutput5);};
if(!empty($ref6)) {echo ($stroutput6);};
if(!empty($ref7)) {echo ($stroutput7);};
if(!empty($ref8)) {echo ($stroutput8);};

if(!empty($tref1)) {echo ($tensiontable);};
if(!empty($tref1)) {echo ($toutput1);};
if(!empty($tref2)) {echo ($toutput2);};
if(!empty($tref3)) {echo ($toutput3);};
if(!empty($tref4)) {echo ($toutput4);};
if(!empty($tref5)) {echo ($toutput5);};
if(!empty($tref6)) {echo ($toutput6);};
if(!empty($tref7)) {echo ($toutput7);};
if(!empty($tref8)) {echo ($toutput8);};



if(!empty($eref1)) {echo ($endutable);};
if(!empty($eref1)) {echo ($eoutput1);};
if(!empty($eref2)) {echo ($eoutput2);};
if(!empty($eref3)) {echo ($eoutput3);};
if(!empty($eref4)) {echo ($eoutput4);};


if(!empty($staref1)) {echo ($stabtable);};
if(!empty($staref1)) {echo ($stab1);};
if(!empty($staref2)) {echo ($stab2);};
if(!empty($staref3)) {echo ($stab3);};
if(!empty($staref4)) {echo ($stab4);};
if(!empty($staref5)) {echo ($stab5);};
if(!empty($staref6)) {echo ($stab6);};
if(!empty($staref7)) {echo ($stab7);};
if(!empty($staref8)) {echo ($stab8);};


if(!empty($mobref1)) {echo ($mobtable);};
if(!empty($mobref1)) {echo ($mob1);};
if(!empty($mobref2)) {echo ($mob2);};
if(!empty($mobref3)) {echo ($mob3);};
if(!empty($mobref4)) {echo ($mob4);};
if(!empty($mobref5)) {echo ($mob5);};
if(!empty($mobref6)) {echo ($mob6);};
if(!empty($mobref7)) {echo ($mob7);};
if(!empty($mobref8)) {echo ($mob8);};

return (($notes));

// Close connection to the database
mysqli_close($con);


?>