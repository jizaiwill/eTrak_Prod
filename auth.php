 <?php

session_start();

if($_SESSION['auth']!=1) {

       header("Location:http://etrakpro.com/signin.html");
	exit();
 
}




?>