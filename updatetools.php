<?php
//updatetools.php

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);

$data= json_decode($_POST["ToolData"],true);
$oldname = $_POST["oldname"];
  
$Name = $data["Tool Name"];
$Distance = $data["Distance"];
$BodyweightRatio = $data["Bodyweight Ratio"];
$MaxRatio = $data["Max Ratio"];
$Number = $data["Number"];
$MaxLoad = $data["Max Load"];
$Scheme = $data["Scheme"];
$VideoLink = $data["Video Link"];
$Cues = $data["Cues"];

$stmt = "UPDATE  `Etrak Database`.`Toolshed` SET 

`Distance` = '".$Distance."',  
`Tool Name` = '".$Name."',  
`Bodyweight Ratio` = '".$BodyweightRatio."', 
`Max Ratio` = '".$MaxRatio."', 
`Number` = '".$Number."',
`Max Load` = '".$MaxLoad."',
`Scheme` = '".$Scheme."',
`Tool` = '".$Tool."',
`Video Link` = '".$VideoLink."',
`Cues` = '".$Cues."'

WHERE  `Toolshed`.`Tool Name` LIKE '$oldname'";


if (mysqli_query($con, $stmt)) {
    echo "Tool Updated!";
   
   
} else {
   echo mysqli_error($con);
   
}
     
   
