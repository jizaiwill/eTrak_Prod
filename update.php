<?php
// Get a connection for the database

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);

if(isset($_POST["traktitle"]))  {

$name = $_POST["name"];
$trakname= $_POST["traktitle"];
$warmsets = $_POST["warmsets"];
$warmreps= $_POST["warmreps"];
$warm1= $_POST["warm1"];
$warm2= $_POST["warm2"];
$warm3= $_POST["warm3"];
$warm4= $_POST["warm4"];
$warm5= $_POST["warm5"];
$warm6= $_POST["warm6"];
$warm7= $_POST["warm7"];
$warm8= $_POST["warm8"];

$plyosets= $_POST["plyosets"];
$plyoreps= $_POST["plyoreps"];
$plyo1= $_POST["plyo1"];
$plyo2= $_POST["plyo2"];
$plyo3= $_POST["plyo3"];
$plyo4= $_POST["plyo4"];
$plyo5= $_POST["plyo5"];
$plyo6= $_POST["plyo6"];
$plyo7= $_POST["plyo7"];
$plyo8= $_POST["plyo8"];

$accelsets = $_POST["accelsets"];
$accelreps= $_POST["accelreps"];
$accel1= $_POST["accel1"];
$accel2= $_POST["accel2"];
$accel3= $_POST["accel3"];
$accel4= $_POST["accel4"];
$accel5= $_POST["accel5"];
$accel6= $_POST["accel6"];
$accel7= $_POST["accel7"];
$accel8= $_POST["accel8"];

$speedsets = $_POST["speedsets"];
$speedreps= $_POST["speedreps"];
$speed1= $_POST["speed1"];
$speed2= $_POST["speed2"];
$speed3= $_POST["speed3"];
$speed4= $_POST["speed4"];
$speed5= $_POST["speed5"];
$speed6= $_POST["speed6"];
$speed7= $_POST["speed7"];
$speed8= $_POST["speed8"];

$strengthsets = $_POST["strengthsets"];
$strengthreps= $_POST["strengthreps"];
$strength1= $_POST["strength1"];
$strength2= $_POST["strength2"];
$strength3= $_POST["strength3"];
$strength4= $_POST["strength4"];
$strength5= $_POST["strength5"];
$strength6= $_POST["strength6"];
$strength7= $_POST["strength7"];
$strength8= $_POST["strength8"];

$tensionsets = $_POST["tensionsets"];
$tensionreps= $_POST["tensionreps"];
$tension1= $_POST["tension1"];
$tension2= $_POST["tension2"];
$tension3= $_POST["tension3"];
$tension4= $_POST["tension4"];
$tension5= $_POST["tension5"];
$tension6= $_POST["tension6"];
$tension7= $_POST["tension7"];
$tension8= $_POST["tension8"];

$intervals = $_POST["intervals"];
$interrest= $_POST["interrest"];
$Endurance1= $_POST["Endurance1"];
$Endurance2= $_POST["Endurance2"];
$Endurance3= $_POST["Endurance3"];
$Endurance4= $_POST["Endurance4"];

$stabsets = $_POST["stabsets"];
$stabreps= $_POST["stabreps"];
$stability1= $_POST["stability1"];
$stability2= $_POST["stability2"];
$stability3= $_POST["stability3"];
$stability4= $_POST["stability4"];
$stability5= $_POST["stability5"];
$stability6= $_POST["stability6"];
$stability7= $_POST["stability7"];
$stability8= $_POST["stability8"];

$mobsets = $_POST["mobsets"];
$mobreps= $_POST["mobreps"];
$mobility1= $_POST["mobility1"];
$mobility2= $_POST["mobility2"];
$mobility3= $_POST["mobility3"];
$mobility4= $_POST["mobility4"];
$mobility5= $_POST["mobility5"];
$mobility6= $_POST["mobility6"];
$mobility7= $_POST["mobility7"];
$mobility8= $_POST["mobility8"];

$notes= $_POST["notes"];


$stmt = "UPDATE  `Etrak Database`.`TrakDatabase` SET  
`Trakname` = '".$trakname."', 
`warmsets` = '".$warmsets."', 
`warmreps` = '".$warmreps."', 
`warm1` = '".$warm1."', 
`warm2` = '".$warm2."',
`warm3` = '".$warm3."',
`warm4` = '".$warm4."',
`warm5` = '".$warm5."',
`warm6` = '".$warm6."',
`warm7` = '".$warm7."',
`warm8` = '".$warm8."',

`plyosets` = '".$plyosets."', 
`plyoreps` = '".$plyoreps."', 
`plyo1` = '".$plyo1."', 
`plyo2` = '".$plyo2."',
`plyo3` = '".$plyo3."',
`plyo4` = '".$plyo4."',
`plyo5` = '".$plyo5."',
`plyo6` = '".$plyo6."',
`plyo7` = '".$plyo7."',
`plyo8` = '".$plyo8."',

`accelsets` = '".$accelsets."', 
`accelreps` = '".$accelreps."', 
`accel1` = '".$accel1."', 
`accel2` = '".$accel2."',
`accel3` = '".$accel3."',
`accel4` = '".$accel4."',
`accel5` = '".$accel5."',
`accel6` = '".$accel6."',
`accel7` = '".$accel7."',
`accel8` = '".$accel8."',

`speedsets` = '".$speedsets."', 
`speedreps` = '".$speedreps."', 
`speed1` = '".$speed1."', 
`speed2` = '".$speed2."',
`speed3` = '".$speed3."',
`speed4` = '".$speed4."',
`speed5` = '".$speed5."',
`speed6` = '".$speed6."',
`speed7` = '".$speed7."',
`speed8` = '".$speed8."',

`strengthsets` = '".$strengthsets."', 
`strengthreps` = '".$strengthreps."', 
`strength1` = '".$strength1."', 
`strength2` = '".$strength2."',
`strength3` = '".$strength3."',
`strength4` = '".$strength4."',
`strength5` = '".$strength5."',
`strength6` = '".$strength6."',
`strength7` = '".$strength7."',
`strength8` = '".$strength8."',

`tensionsets` = '".$tensionsets."', 
`tensionreps` = '".$tensionreps."', 
`tension1` = '".$tension1."', 
`tension2` = '".$tension2."',
`tension3` = '".$tension3."',
`tension4` = '".$tension4."',
`tension5` = '".$tension5."',
`tension6` = '".$tension6."',
`tension7` = '".$tension7."',
`tension8` = '".$tension8."',

`intervals` = '".$intervals."', 
`interrest` = '".$interrest."', 
`Endurance1` = '".$Endurance1."', 
`Endurance2` = '".$Endurance2."',
`Endurance3` = '".$Endurance3."',
`Endurance4` = '".$Endurance4."',

`stabsets` = '".$stabsets."', 
`stabreps` = '".$stabreps."', 
`stability1` = '".$stability1."', 
`stability2` = '".$stability2."',
`stability3` = '".$stability3."',
`stability4` = '".$stability4."',
`stability5` = '".$stability5."',
`stability6` = '".$stability6."',
`stability7` = '".$stability7."',
`stability8` = '".$stability8."',

`mobsets` = '".$mobsets."', 
`mobreps` = '".$mobreps."', 
`mobility1` = '".$mobility1."', 
`mobility2` = '".$mobility2."',
`mobility3` = '".$mobility3."',
`mobility4` = '".$mobility4."',
`mobility5` = '".$mobility5."',
`mobility6` = '".$mobility6."',
`mobility7` = '".$mobility7."',
`mobility8` = '".$mobility8."',

`Notes:` = '".$notes."'

WHERE  `TrakDatabase`.`Trakname` LIKE '".$name."'";


if (mysqli_query($con, $stmt)) {
    $res="Trak Updated!";
   echo json_encode($res);
   
} else {
    $error="Trak Loading Error...";
    echo json_encode($error);
}


}

else {echo "sql error";}



 ?>	