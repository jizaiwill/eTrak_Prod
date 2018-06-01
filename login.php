 <?php

session_start();

if(!$_SESSION['$username']) {

    header("Location:http://etrakpro.com/signin.html");
 exit();
}



?>

