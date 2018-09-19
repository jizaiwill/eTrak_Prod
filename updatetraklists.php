<?php
// updatetraklists.php

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);

$tools = ($_POST["arr"]);
$nums = ($_POST["arrnum"]);
$name = ($_POST["listname"]);




$stmt = "UPDATE Traklists SET 
`Listname` = '$tools[0]',
`StartDate`= '$tools[1]',
`EndDate` = '$tools[2]',

`1` = '$tools[3]',
`2` = '$tools[4]',
`3` = '$tools[5]',
`4` = '$tools[6]',
`5` = '$tools[7]',
`6` = '$tools[8]',
`7` = '$tools[9]',
`8` = '$tools[10]',
`9` = '$tools[11]',
`10` = '$tools[12]',

`11` = '$tools[13]',
`12` = '$tools[14]',
`13` = '$tools[15]',
`14` = '$tools[16]',
`15` = '$tools[17]',
`16` = '$tools[18]',
`17` = '$tools[19]',
`18` = '$tools[20]',
`19` = '$tools[21]',
`20` = '$tools[22]',

`21` = '$tools[23]',
`22` = '$tools[24]',
`23` = '$tools[25]',
`24` = '$tools[26]',
`25` = '$tools[27]',
`26` = '$tools[28]',
`27` = '$tools[29]',
`28` = '$tools[30]',
`29` = '$tools[31]',
`30` = '$tools[32]',

`31` = '$tools[33]',
`32` = '$tools[34]',
`33` = '$tools[35]',
`34` = '$tools[36]',
`35` = '$tools[37]',
`36` = '$tools[38]',
`37` = '$tools[39]',
`38` = '$tools[40]',
`39` = '$tools[41]',
`40` = '$tools[42]',

`41` = '$tools[43]',
`42` = '$tools[44]',
`43` = '$tools[45]',
`44` = '$tools[46]',
`45` = '$tools[47]',
`46` = '$tools[48]',
`47` = '$tools[49]',
`48` = '$tools[50]',
`49` = '$tools[51]',
`50` = '$tools[52]',

`51` = '$tools[53]',
`52` = '$tools[54]',
`53` = '$tools[55]',
`54` = '$tools[56]',
`55` = '$tools[57]',
`56` = '$tools[58]',
`57` = '$tools[59]',
`58` = '$tools[60]',
`59` = '$tools[61]',
`60` = '$tools[62]',

`61` = '$tools[63]',
`62` = '$tools[64]',
`63` = '$tools[65]',
`64` = '$tools[66]',
`65` = '$tools[67]',
`66` = '$tools[68]',
`67` = '$tools[69]',
`68` = '$tools[70]',
`69` = '$tools[71]',
`70` = '$tools[72]',

`71` = '$tools[73]',
`72` = '$tools[74]',
`73` = '$tools[75]',
`74` = '$tools[76]',
`75` = '$tools[77]',
`76` = '$tools[78]',
`77` = '$tools[79]',
`78` = '$tools[80]',
`79` = '$tools[81]',
`80` = '$tools[82]',

`81` = '$tools[83]',
`82` = '$tools[84]',
`83` = '$tools[85]',
`84` = '$tools[86]'

WHERE `Traklists`.`Listname` LIKE '".$name."'";

$stmt2 = "UPDATE Listloads SET 
`ps1` = '$nums[1]',
`fs1` = '$nums[2]',
`ts1` = '$nums[3]',
`stas1` = '$nums[4]',
`pr1` = '$nums[5]',
`ar1` = '$nums[6]',
`vr1` = '$nums[7]',
`fr1` = '$nums[8]',
`tr1` = '$nums[9]',
`er1` = '$nums[10]',
`star1` = '$nums[11]',

`ps2` = '$nums[12]',
`fs3` = '$nums[13]',
`ts3` = '$nums[14]',
`stas2` = '$nums[15]',
`pr2` = '$nums[16]',
`ar2` = '$nums[17]',
`vr2` = '$nums[18]',
`fr2` = '$nums[19]',
`tr2` = '$nums[20]',
`er2` = '$nums[21]',
`star2` = '$nums[22]'



WHERE `Listloads`.`Listname` LIKE '".$name."'";



if (mysqli_query($con, $stmt)&&mysqli_query($con, $stmt2))  {
    $res="Traklist Updated!";
    echo json_encode($res);
   
} else {
    $error= "Traklist Load Error!";
     echo json_encode($error);
}



  
 

 ?>	