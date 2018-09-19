 <?php

REQUIRE"auth.php";


 
 //listtraks.php
$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";




//create connection
$conn = new mysqli($servername, $username, $password, $dbName);
$incr = 0;


        $name = $_POST["name"];
 	$query = "SELECT * FROM `Traklists` WHERE `Listname` = '$name'";
 
         $result = mysqli_query($conn, $query);  
  
           while($row = mysqli_fetch_array($result))  
           {  
              
              $date= date_create($row["StartDate"]);
              echo "<optgroup label='WEEK 1'>";
	      
	             
	            	
              for ($x = 0; $x <= 6; $x++) {
              $date= date_create($row["StartDate"]);
               $z = $x + 1;
               
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                          
		  if(empty($row["$z"])) {null;} else {echo  "<option value='".$row["$z"]."'>".$newdate. "&nbsp| &nbsp".$row["$z"]."";}			  
		  
		  
		  
		    	
		} 
	  
	      echo  "</optgroup>" ;
	      
	      
	      
	      
	      
	        echo "<optgroup label='WEEK 2'>";
              for ($x = 8; $x <= 14; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		     if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ;
	      
	       echo "<optgroup label='WEEK 3'>";
              for ($x = 15; $x <= 21; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		       if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}		
		} 
	  
	      echo  "</optgroup>" ;
	      
	       echo "<optgroup label='WEEK 4'>";
              for ($x = 22; $x <= 28; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		     if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ;
               
               echo "<optgroup label='WEEK 5'>";
              for ($x = 29; $x <= 35; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		     if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ; 
	      
	       echo "<optgroup label='WEEK 6'>";
              for ($x = 36; $x <= 42; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		    if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}		
		} 
	  
	      echo  "</optgroup>" ; 
	      
	      
	      echo "<optgroup label='WEEK 7'>";
              for ($x = 43; $x <= 49; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		      if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ; 
	      
	      
	      echo "<optgroup label='WEEK 8'>";
              for ($x = 50; $x <= 56; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		     if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ; 
	      
	      
	      echo "<optgroup label='WEEK 9'>";
              for ($x = 57; $x <= 63; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		     if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ; 
	      
	      
	       echo "<optgroup label='WEEK 10'>";
              for ($x = 64; $x <= 70; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		     if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ; 
	      
	      
	       echo "<optgroup label='WEEK 11'>";
              for ($x = 71; $x <= 77; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		    if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ; 
	      
	      
	      
	      echo "<optgroup label='WEEK 12'>";
              for ($x = 78; $x <= 84; $x++) {
              $date= date_create($row["StartDate"]);
               date_add($date,date_interval_create_from_date_string("$x days"));
               $newdate= date_format($date,"m/d");
              
                             
		     if(empty($row["$x"])) {null;} else {echo  "<option value='".$row["$x"]."'>".$newdate. "&nbsp| &nbsp".$row["$x"]."";}	
		} 
	  
	      echo  "</optgroup>" ; 
	      
                  
              
           }  
   
  
 

     
  
 
 ?>  