<?php

//Tooleditvalues.php

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";

$output;


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);


if(isset($_POST["toolname"]))  
 {  
  $query = "SELECT * FROM `Rosters` Where `RosterName` LIKE '%".$_POST["toolname"]."%'";

  $response = @mysqli_query($conn, $query);
  
  if(mysqli_num_rows($response) > 0)  {
  while($row = @mysqli_fetch_array($response)){
 
  $data["User1"] = $row["User1"];
  $data["User2"] = $row["User2"];
  $data["User3"] = $row["User3"];
  $data["User4"] = $row["User4"];
  $data["User5"] = $row["User5"];
  $data["User6"] = $row["User6"];
  $data["User7"] = $row["User7"];
  $data["User8"] = $row["User8"];
  $data["User9"] = $row["User9"];
  $data["User10"] = $row["User10"];
  $data["User11"] = $row["User11"];
  $data["User12"] = $row["User12"];
  
  $data["User1power"] = $row["User1power"];
  $data["User2power"] = $row["User2power"];
  $data["User3power"] = $row["User3power"];
  $data["User4power"] = $row["User4power"];
  $data["User5power"] = $row["User5power"];
  $data["User6power"] = $row["User6power"];
  $data["User7power"] = $row["User7power"];
  $data["User8power"] = $row["User8power"];
  $data["User9power"] = $row["User9power"];
  $data["User10power"] = $row["User10power"];
  $data["User11power"] = $row["User11power"];
  $data["User12power"] = $row["User12power"];
  
  $data["User1weight"] = $row["User1weight"];
  $data["User2weight"] = $row["User2weight"];
  $data["User3weight"] = $row["User3weight"];
  $data["User4weight"] = $row["User4weight"];
  $data["User5weight"] = $row["User5weight"];
  $data["User6weight"] = $row["User6weight"];
  $data["User7weight"] = $row["User7weight"];
  $data["User8weight"] = $row["User8weight"];
  $data["User9weight"] = $row["User9weight"];
  $data["User10weight"] = $row["User10weight"];
  $data["User11weight"] = $row["User11weight"];
  $data["User12weight"] = $row["User12weight"];
  

}


 }
 
 else {echo('Roster Not Loaded!');}
 
 echo json_encode($data);
  }

 ?>  


