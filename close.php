<?php

//close.php

  function runMyFunction() {
	    // remove all session variables
	session_unset(); 
	
	// destroy the session 
	session_destroy(); 
	
	 header("Location:http://etrakpro.com/signin.html");
  }

  if (isset($_GET['close'])) {
    runMyFunction();
  }
  
  
?>
