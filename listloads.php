<?php

//listloads.php
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";

$conn = new mysqli($servername, $username, $password, $dbName);


if(isset($_POST["listname"]))  
 {  
     $query = "SELECT * FROM `Listloads` Where `Listname` LIKE '%".$_POST["listname"]."%'";

  $response = @mysqli_query($conn, $query);
  
  if(mysqli_num_rows($response) > 0)  {
  $row = @mysqli_fetch_array($response);
   
 }
 
 else {echo('--');}
 
 }
 
  echo json_encode($row);
  
 
 ?>  


