 <?php
REQUIRE"auth.php";

?>



<!-- ETRAK GROUP -->

<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121375057-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121375057-1');
</script>
       
       
           <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=.67">
    
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel = "shortcut icon" type="image/png" href= "/images/etraklatest.png">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron|Oswald|Audiowide|Fjalla One|Exo 2|Rationale|Russo One|Oxygen|Montserrat">
 
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


       
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
          
 <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
<link rel = "stylesheet" href="TeamView.css">

  <script src= "https://printjs-4de6.kxcdn.com/print.min.js"> </script>
  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   <script src = "Scripts.js"></script>  
   <script src = "jquery.js"></script>   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.min.css">
  
      <title>Etrak Group</title>  
      

      
           
           
</head>

<body id="main" style="margin-left:18%;">
  
 <div id="all"> 
  
   
 <div class="navbar " class="rounded-0" id= "nav" class= "no-print">
<span class= "expand" style="font-size:30px;cursor:pointer; float:left; padding-right:10px;"  onclick= "openNav()" id="expand">&#9776;</span>


   <div class="col-xs-4">
  	<div class="input-group">
   	   <div class="input-group-prepend">
   		 <label class="input-group-text" for="grouptraks" style="background-color:white;border:none;">
   		 	<span class="glyphicon glyphicon-search" style="font-size:14px; color:#444;"></span>
   		 </label>
  	   </div>
  		<input name="tool"  id= "grouptraks" class="form-control-lg" placeholder= "Search Lists..." method= "POST" style="width:90%;" >
    			
  		
  	  </div>
   </div>
	
	
	
       
	

<button type="button" class="btn btn-outline-success " id= "grouptraksetter" onclick= "start()"><span style = "margin-left:3px; font-family: Audiowide; font-size:14px;">SET TRAK</span></button>

<button type="button" class="btn btn-outline-success"  id= "clockstart" style= "margin-left:10px;"><span style= "margin-left:3px; font-family: Audiowide; font-size:14px;">START <span class="glyphicon glyphicon-triangle-right"></span></span></button> 

         
	

   
 <div class="dropdown ml-auto">	  
		<a class="navbar-text " href="teamview.php" style= "text-align:center; font-family:Audiowide;"><span class="glyphicon glyphicon-eye-open" style="font-size:25px;width:40px; "></span><br>VIEW</a>
		
		<div class="dropdown-content">
		    <a href="teamview.php">Team Mode</a>
		    <a href="groupmode.php">Group Mode</a>
		    <a href="#">Individual Mode</a>
		    <a href="#">Compete Mode</a>
		    
		  
		  </div>
		</div>
		
 
 
 
 
 
<div class="dropdown">	
		  <a class="navbar-text" href="admin.php" style= "text-align:center;font-family:Audiowide;"><span class="glyphicon glyphicon-calendar" style="font-size:25px;width:40px;"></span><br>
		BUILD</a>
		
		<div class="dropdown-content">
		    <a href="admin.php">Trakbuilder</a>
		    <a href="traklist.php">Traklist</a>
		    <a href="#">Mealbuilder</a>
		    <a href="#">Meallist</a>
		    
		  
		  </div>
		  </div>


  <a class="navbar-text" href="toolshed.php" style= "text-align:center; font-family:Audiowide;"><span class="glyphicon glyphicon-wrench" style="font-size:25px;"></span><br>TOOLS</a>

   <a class="navbar-text" href="#" style= "text-align:center;font-family:Audiowide;"><span class="glyphicon glyphicon-dashboard" style="font-size:25px;"></span><br>TEST</a>
    
    <a class="navbar-text" href="#" style= "text-align:center;font-family:Audiowide;"><span class="glyphicon glyphicon-user" style="font-size:25px;"></span><br>CLIENTS</a>
   <a class="navbar-text " href="index.html" style= "text-align:center;border-left: 1px solid grey; margin-left:10px;padding-left:20px; font-family:Audiowide;" name="logout" id="logout"><span class="glyphicon glyphicon-log-out" style="font-size:25px;"></span><br>LOGOUT</a>


   </div>	
  
  
</div>

</div>
</div>






 <div class="no-print">
 <div id="mySidenav" class="sidenav"  style="width:18%;" >
 <div class="navbar  navbar-expand-md navbar-custom" class="rounded-0" id="nav" class= "no-print" style= "background-color:#333; width:100%;">
  <img src = "/images/etraksm.png" height = 40px width = 45px><h1 class="nav" style="font-family:Audiowide; font-size:25px;color:white;margin-left:10px; width:100%;font-style:italic">  ETRAK</h1>

  
   </div>

<main role="main" class="col-sm-100 pt-1 px-3">

<div class="rosterdiv" style="float:left;margin-right:10px;">
 <h1 class= "zonetitle" style="color:#111;text-align:left;font-size:20px;">ROSTERS: </h1>
 <select class="custom-select" id="rosters" style= "margin-left:5px;margin-right:5pxfont-family:Audiowide;font-size:14px;text-align:left; height:32px;"></select>
  <hr> 
 
  
<!-- USER 1 -->

    <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#960101; font-size:18px; color:#d2d2d2;float:left;">1</div>
		    <input  class="form-control input-sm" id="user1" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#960101;" >
		  </div>
    </div>
    </div>
   
    
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user1watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#960101;">Peak Power</label>
		    <input class="form-control input-sm" id="user1watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#960101;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user1weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#960101;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user1weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#960101;"  >
		  </div>
       
  
     </div>
     
     
     <hr>
<!-------------------------------------------------------------->




<!-- USER 2 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#db4c00; font-size:18px; color:#d2d2d2;float:left;">2</div>
		    <input  class="form-control input-sm" id="user2" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#db4c00;" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user2watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#db4c00;">Peak Power</label>
		    <input class="form-control input-sm" id="user2watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#db4c00;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user2weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#db4c00;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user2weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#db4c00;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 3 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#a08800; font-size:18px; color:#d2d2d2;float:left;">3</div>
		    <input  class="form-control input-sm" id="user3" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#d1b504;" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user3watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#a08800;">Peak Power</label>
		    <input class="form-control input-sm" id="user3watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#d1b504;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user3weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#a08800;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user3weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#a08800;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 4 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#2b7700; font-size:18px; color:#d2d2d2;float:left;">4</div>
		    <input  class="form-control input-sm" id="user4" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#2b7700;" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user4watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#2b7700;">Peak Power</label>
		    <input class="form-control input-sm" id="user4watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#2b7700;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user4weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#2b7700;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user4weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#2b7700;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 5 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#4a8474; font-size:18px; color:#d2d2d2;float:left;">5</div>
		    <input  class="form-control input-sm" id="user5" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#4a8474;" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user5watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#4a8474;">Peak Power</label>
		    <input class="form-control input-sm" id="user5watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#4a8474;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user5weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#4a8474;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user5weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#4a8474;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 6 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#0174b7; font-size:18px; color:#d2d2d2;float:left;">6</div>
		    <input  class="form-control input-sm" id="user6" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#0174b7;" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user6watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#0174b7;">Peak Power</label>
		    <input class="form-control input-sm" id="user6watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#0174b7;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user6weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#0174b7;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user6weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#0174b7;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 7 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#3c1bb5; font-size:18px; color:#d2d2d2;float:left;">7</div>
		    <input  class="form-control input-sm" id="user7" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#3c1bb5;" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user7watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#3c1bb5;">Peak Power</label>
		    <input class="form-control input-sm" id="user7watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#3c1bb5;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user7weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#3c1bb5;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user7weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#3c1bb5;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 8 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#72036f; font-size:18px; color:#d2d2d2;float:left;">8</div>
		    <input  class="form-control input-sm" id="user8" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#72036f" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user8watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#72036f;">Peak Power</label>
		    <input class="form-control input-sm" id="user8watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#72036f;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user8weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#72036f;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user8weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#72036f;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->


<!-- USER 9 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#7c9105; font-size:18px; color:#d2d2d2;float:left;">9</div>
		    <input  class="form-control input-sm" id="user9" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#7c9105" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user9watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:7c9105;">Peak Power</label>
		    <input class="form-control input-sm" id="user9watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#7c9105;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user9weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:7c9105;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user9weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#7c9105;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 10 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#727171; font-size:18px; color:#d2d2d2;float:left;">10</div>
		    <input  class="form-control input-sm" id="user10" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#727171" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user10watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#727171;">Peak Power</label>
		    <input class="form-control input-sm" id="user10watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#727171;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user10weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#727171;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user10weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#727171;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 11 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#592f00; font-size:18px; color:#d2d2d2;float:left;">11</div>
		    <input  class="form-control input-sm" id="user11" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#592f00" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user11watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#592f00;">Peak Power</label>
		    <input class="form-control input-sm" id="user11watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#592f00;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user11weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#592f00;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user11weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#592f00;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->

<!-- USER 12 -->
<div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
     <div class="col" style="padding:5px;text-align:center;">
		   <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon" style="width:20%;font-family:Audiowide;background-color:#f20085; font-size:18px; color:#d2d2d2;float:left;">12</div>
		    <input  class="form-control input-sm" id="user12" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#f20085" >
		  </div>
    </div>
    </div>
    
   <div class="row" style="margin-left:5px;margin-right:5px;text-align:center;">
    <div class="col" style="padding:5px;text-align:center;">
   
		    
		    <label for="user12watts" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#f20085;">Peak Power</label>
		    <input class="form-control input-sm" id="user12watts" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#f20085;">
		  
      
    </div>
    
    <div class="col" style="padding:5px;text-align:center;">
		     
		    <label for="user12weight" style = "text-align:left; font-family:Montserrat; font-size:10px;vertical-align:middle;color:#f20085;">Weight (lbs.)</label>
		    <input type="password" class="form-control input-sm" id="user12weight" style="font-family:Russo One; text-align:center; font-size:15px;vertical-align:middle;color:#f20085;"  >
		  </div>
       
  
     </div>
     <hr>
<!-------------------------------------------------------------->


</main>
</div>

</div>
</div>





<div id="grouptraklist"></div>

<main role="main" class="col-sm-100 pt-1 px-3">	
<!--------------------------TRAKLIST DIV------------------------------------>

 <div class= "no-print">
 
 <div class= "row" >
 	<div class="col">
		<h1 class= "zonetitle" style="color:#111;text-align:left;font-size:24px;">TRAKLISTS: 
		<div style="float:left;margin-right:10px;"><span class="glyphicon glyphicon-collapse-down" style="font-size:20px;cursor:pointer;" id="traklistdrop"></span>
	         </h1>  
	</div>        
        
   
   <div class="col-xs-4 ml-auto" id="traklistset">
  	<div class="input-group mb-6">
   	   <div class="input-group-prepend">
   		 <label class="input-group-text" for="viewlists" style="font-family: Audiowide;  font-size:12px;">LIST</label>
  	   </div>
  		<select class="custom-select" id="viewlists" style="font-family:Montserrat;font-size:12px; height:29px;">
    			
  		</select>
  	  </div>
   </div>
   
      <div class="col-xs-4 ml-auto" id="traklistset2">
  	<div class="input-group mb-1">
   	   <div class="input-group-prepend">
   		 <label class="input-group-text" for="viewz" style="font-family: Audiowide;font-size:12px;">TRAKS</label>
  	   </div>
  		<select class="custom-select" id="viewz"  style="font-family:Montserrat;font-size:12px; height:29px;">
    	           
  		</select>
  	  </div>
   </div>
  </div> 

        
        
        
        
           </div>
  
  </div> 
  
  <!-------------------------------------------------------------->
  
  
  
<!--------------------------VIDEO MODAL------------------------------------>  

<div class="modal" id="testmodal" style="vertical-align:middle; background-color:black; font-family:Montserrat; font-size:14px; text-align:center; color:rgb(70,158,1);margin: auto; position:absolute; height:60%; width:70%; z-index:1;">

     			<span class="glyphicon glyphicon-remove-sign" id="closemodal" style="font-size:18px;width:40px; cursor:pointer; color:white; float:right; padding:5px;"></span>
       			<iframe id="video" src=""  autoplay="1" muted="true"></iframe>
       			<hr>
       			<button type="button" class="btn btn-outline-danger" id="closemodal" style="vertical-align:sub" data-dismiss="testmodal"><span style= "margin-left:3px; font-family: Audiowide; font-size:18px; padding-bottom:8px;">CLOSE</span></button>
       			
       			
       	      </div>

<!-------------------------------------------------------------->


<hr>





 	<div class="no-print">
		<i class="glyphicon glyphicon-print" style="text-align:right; font-size:18px; position:absolute; top:160px; right:10px; float:right; padding-right:20px; padding-bottom:10px;" onclick = "myFunction();"></i>
	</div>


 <table style="  margin: auto;">

  <tbody>
      <tr style="border-bottom: .5px solid #d2d2d2;">
      <td class="time2" style= "background-color:#960101;">1</td>
	<td>	    
		    <input class="time2" id="groupmin1"  method= "post" style="color:#960101; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#960101;">:</span>
		    <input class="time2" id="groupsec1"  method= "post" style="color:#960101; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
  
      
   
<td class="time2" style= "background-color:#a08800;">3</td>
	<td>	    
		    <input class="time2" id="groupmin3"  method= "post" style="color:#a08800; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#a08800;">:</span>
		    <input class="time2" id="groupsec3"  method= "post" style="color:#a08800; width:50px;height:40px;text-align:left;" value="00">
                   
      </td> 
   
     <td class="time2" style= "background-color:#4a8474;">5</td>
	<td>	    
		    <input class="time2" id="groupmin5"  method= "post" style="color:#4a8474; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#4a8474;">:</span>
		    <input class="time2" id="groupsec5"  method= "post" style="color:#4a8474; width:50px;height:40px;text-align:left;" value="00">
                   
      </td> 
 
     <td class="time2" style= "background-color:#3c1bb5;">7</td>
	<td>	    
		    <input class="time2" id="groupmin7"  method= "post" style="color:#3c1bb5; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#3c1bb5;">:</span>
		    <input class="time2" id="groupsec7"  method= "post" style="color:#3c1bb5; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
      
      
      <td class="time2" style= "background-color:#7c9105;">9</td>
	<td>	    
		    <input class="time2" id="groupmin9"  method= "post" style="color:#7c9105; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#7c9105;">:</span>
		    <input class="time2" id="groupsec9"  method= "post" style="color:#7c9105; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
      
           <td class="time2" style= "background-color:#592f00;">11</td>
	<td>	    
		    <input class="time2" id="groupmin11"  method= "post" style="color:#592f00; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#592f00;">:</span>
		    <input class="time2" id="groupsec11"  method= "post" style="color:#592f00; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
    
  </tr>
  <tr>
  
      <td class="time2" style= "background-color:#db4c00;">2</td>
	<td>	    
		    <input class="time2" id="groupmin2"  method= "post" style="color:#db4c00; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#db4c00;">:</span>
		    <input class="time2" id="groupsec2"  method= "post" style="color:#db4c00; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
      
 
    <td class="time2" style= "background-color:#2b7700;">4</td>
	<td>	    
		    <input class="time2" id="groupmin4"  method= "post" style="color:#2b7700; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#2b7700;">:</span>
		    <input class="time2" id="groupsec4"  method= "post" style="color:#2b7700; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>  
      
      <td class="time2" style= "background-color:#0174b7;">6</td>
	<td>	    
		    <input class="time2" id="groupmin6"  method= "post" style="color:#0174b7; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#0174b7;">:</span>
		    <input class="time2" id="groupsec6"  method= "post" style="color:#0174b7; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
       
    <td class="time2" style= "background-color:#72036f;">8</td>
	<td>	    
		    <input class="time2" id="groupmin8"  method= "post" style="color:#72036f; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#72036f;">:</span>
		    <input class="time2" id="groupsec8"  method= "post" style="color:#72036f; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
   
   
   
    <td class="time2" style= "background-color:#727171;">10</td>
	<td>	    
		    <input class="time2" id="groupmin10"  method= "post" style="color:#727171; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#727171;">:</span>
		    <input class="time2" id="groupsec10"  method= "post" style="color:#727171; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
   
      
         <td class="time2" style= "background-color:#f20085;">12</td>
	<td>	    
		    <input class="time2" id="groupmin12"  method= "post" style="color:#f20085; width:50px;height:40px;text-align:right;" value="00">
		    <span class="time2" style="color:#f20085;">:</span>
		    <input class="time2" id="groupsec12"  method= "post" style="color:#f20085; width:50px;height:40px;text-align:left;" value="00">
                   
      </td>
   
    </tr>
    
  
    
  </tbody>
</table>  
 
              	           

    
<hr> 
   <div class= "clock" style= "text-align:left;margin-left:10px;">
		
		
 	      </div>
            <br>
      <div class="table table-striped table-md" id= "groupstrengthfind"  > </div> 	 
       

    


 
     
 

 <br>



     <div class= "no-print">
	<h1 class= "zonetitle" style="color:#111;text-align:left;font-size:24px;">NOTES: <div class="levelz" style="float:left;margin-right:10px;"><span class="glyphicon 			glyphicon-collapse-down" style="font-size:20px;cursor:pointer;" id="levelz3"></span>
        </h1>
  <textarea class="form-control" style=" height:150px; font-family:Montserrat; font-size:14px;" id="notes"></textarea><br>
  
  
  </div>  
    
</main>

     
  




</div>
</body>

</html>