<?php
//master authentication


session_start();

if($_SESSION['masterpass']!=1) {

       header("Location:http://etrakpro.com/signin.html");
	exit();
 
}




?>