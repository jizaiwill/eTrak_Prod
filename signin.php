<?php

session_start();
$_SESSION['auth'] = 1;

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$con = new mysqli($servername, $username, $password, $dbName);

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($con, "SELECT `Email`,`Password` FROM `Login` WHERE `Email` LIKE '%".$_POST["username"]."%'");



$row = mysqli_fetch_array($query);
$numrows = mysqli_num_rows($con, $query);



 if($username == $row['Email'] && $password == $row['Password'])
 { $_SESSION['auth'] = 1;
   
  }
  else {
  
    $_SESSION['auth'] = 0;
      header("Location:http://etrakpro.com/signin.html");

  }
  
  session_write_close();
  header("Location:http://etrakpro.com/home.php");
  
 }
  else {
  
   header("Location:http://etrakpro.com");
    $username = "";
    $password = "";
  }



  ?>

