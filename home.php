<?php
REQUIRE"auth.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>


       
       
           <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="author" content="">
   
    
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel = "shortcut icon" type="image/png" href= "/images/etraklatest.png">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron|Oswald|Audiowide|Fjalla One|Exo 2|Rationale|Russo One|Oxygen|Montserrat">
 
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel = "stylesheet" href="dash.css">
       
         
          
 <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
<link rel = "stylesheet" href="TeamView.css">

  <script src= "https://printjs-4de6.kxcdn.com/print.min.js"> </script>
  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  


   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   <script src = "Scripts.js"></script>  
   <script src = "jquery.js"></script>   
      
  
      <title>Etrak Home</title>  
      

      
           
           
</head>

<body id="main">





<div class="navbar  navbar-expand-md navbar-custom" class="rounded-0" id= "nav" class= "no-print">
<span class= "expand" style="font-size:30px;cursor:pointer; "  onclick= "openNav()" id="expand">&#9776;</span>



<form method= "post" class= "form-inline" style= "width:100%;">

<input name="tool" id= "traks" class="dropdown" placeholder= "Search Traks..." method= "POST"  style= "width:50%;">



<button type="button" class="btn btn-outline-success" id = "traksetter" style= "margin-left:10px;" ng-click="myFunction()" onclick= "start()"><span style = "margin-left:3px; font-family: Audiowide; font-size:14px;">SEARCH </span><i class="glyphicon glyphicon-search"></i></button>


</form>
 

        
 <a class="navbar-text" href="home.php" style= "text-align:center;"><span class="glyphicon glyphicon-eye-open" style="font-size:20px;"></span>VIEW</a>
  <a class="navbar-text" href="admin.php" style= "text-align:center;"><span class="glyphicon glyphicon-calendar" style="font-size:20px;"></span>
BUILD</a>
  <a class="navbar-text" href="toolshed.php" style= "text-align:center;"><span class="glyphicon glyphicon-wrench" style="font-size:20px;"></span>TOOLS</a>
  <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-fire" style="font-size:20px;"></span>FUEL</a>
   <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-dashboard" style="font-size:20px;"></span>TEST</a>
    <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-stats" style="font-size:20px;"></span>REPORTS</a>
    <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-user" style="font-size:20px;"></span>CLIENTS</a>
   <a class="navbar-text" href="index.html" style= "text-align:center;border-left: 1px solid grey; margin-left:10px;padding-left:20px;" name="logout" id="logout"><span class="glyphicon glyphicon-log-out" style="font-size:20px;"></span>LOGOUT</a>
  
  
</div>

</div>
	
 <div id="traklist"></div> 

 
 <div  class= "no-print">
  <div id="mySidenav" class="sidenav" id="sidenav">
 <div class="navbar  navbar-expand-md navbar-custom" class="rounded-0" id="nav" class= "no-print" style= "background-color:#333; width:100%;">
 <img src = "/images/etraksm.png" height= 40px width= 45px><h1 class="nav" style="font-family:Audiowide; font-size:12px;color:#999;margin-left:10px;">  LEADERBOARD</h1>

   <a href="#" >
          <i class="glyphicon glyphicon-remove" onclick="closeNav()" style="font-size:16px; padding-right:5px;"></i>
        </a>

  
   </div>

<main role="main" class="col-lg-100 ml-sm-100  ol-md-100 pt-1 px-2" style= "margin:0px;" >
          <table class="table responsive" >
          <thead class='title';>  	
          	<th class= "names" style="width:80%;">Name</th>
          	<th class= "names" style=  "text-align:center;"><span class ="text">E</span>SCORE</th>
       
          	
          	</thead >
          	<tbody>
          		<tr>
          		    <td class="data" id= "name1board"  ></td>
          		    <td class= "points" id= "escore1"></td>
          		</tr>
          		<tr>
          		    <td class="data"  id= "name2board"></td>
          		    <td class= "points" id= "escore2"></td>
          		</tr>    
          		<tr>
          		    <td class="data" id= "name3board"></td>
          		    <td class= "points" id= "escore3"></td>
          		</tr>    
          		<tr>
          		    <td class="data" id= "name4board"></td>
          		    <td class= "points" id= "escore4"></td>
          		</tr>    
          		    
          	</tbody>
          	
         </table>
    </main>
 
 </div>
 
 
</div>



<div class= "no-print">
<div class="col" style="margin-top:0px;">
  <div class="row">
  <div class="col">
     <h1 class= "zonetitle" style="color:#777;text-align:left;font-size:14px;">STOPWATCH<h1>
    </div>
    
    <div class="col-sm" >
     <h1 class= "zonetitle" style=" color:#777;text-align:center;font-size:14px;">TIMER</h1>
    </div>
    
    <div class="col-sm" style="text-align:right;">
     <h1 class= "zonetitle" style="color:#777;text-align:right;font-size:14px;">INTERVALS<h1>
    </div>
   
  </div>
  
  
  
  <div class="row">
  
    <div class="col"><br>
   <span class= "time" class= "no-print" id="minutes">00</span> <span class="time" class= "no-print" >:</span><span class= "time" class= "no-print" id="seconds">00</span><span class="time" class= "no-print">.</span><span class= "time" class= "no-print"  id="tens">00</span><br>
   
   <div class= "clock">
		<button type="button" class="btn btn-dark btn-lg"  id="button-reset" style="width:70px; color:rgb(70,158,1);">RESET</button>
		<button type="button" class="btn btn-dark btn-lg"   id="button-start" style="width:70px; color:rgb(70,158,1);">START</button>
		<button type="button" class="btn btn-dark btn-lg"   id="button-stop" style="width:70px; color:rgb(70,158,1);">STOP</button>
 	      </div>      

    </div>
    
       <div class="col" style="text-align:center;">
       <br>
   </span><input class= "time" class= "no-print" id="minutes2" style="text-align:right;" method= "post"><span class="time" class= "no-print">:</span><input class= "time" class= "no-print"  id="seconds2" style="text-align:left;"><br>
   
    <div class= "clock">
		<button type="button" class="btn btn-dark btn-lg"  id="button-resetclock" style="width:70px; color:rgb(70,158,1);">SET</button>
		<button type="button" class="btn btn-dark btn-lg"  id="button-startclock" style="width:70px;color:rgb(70,158,1);">START</button>
		<button type="button" class="btn btn-dark btn-lg"   id="button-stopclock" style="width:70px; color:rgb(70,158,1);">STOP</button>
 	      </div>     
   
   

    </div>
 
   <div class="col-sm" style="text-align:right;" >
   <p><span style= "color:rgb(70,158,1); font-family:Montserrat;">ROUNDS</span>  /  <span style= "color:#111; font-family:Montserrat;">WORK</span>  /  <span style= "color:#777; font-family:Montserrat;">REST</span></p>
    <input class= "rounds" class= "no-print" id="rounds" method= "post"><span class="time" class= "no-print"> :</span><input class= "time" class= "no-print" id="work" style="text-align:left;" method= "post"><span class="time" class= "no-print" style="color:#777;"> :</span><input class= "time" class= "no-print"  id="rest" style="text-align:left; color:#777;">
    <br>

 <div class= "clock" style="text-align:right;">
 
 <button type="button" class="btn btn-dark btn-lg"   id="button-setrounds" style="width:70px; color:rgb(70,158,1);">RESET</button>
		<button type="button" class="btn btn-dark btn-lg"   id="button-startrounds" style="width:70px; color:rgb(70,158,1);">START</button>
		<button type="button" class="btn btn-dark btn-lg"   id="button-stoprounds" style="width:70px; color:rgb(70,158,1);">STOP</button>
 	      </div>   


    		</div>
   	      </div>
            </div>
	</div>
      </div>
     </div>
<br>


</div>









<main role="main" class="col-md-100 ml-sm-100  ol-lg-100 pt-3 px-4" style= "margin:0px;">


<div class= "no-print">

 <h1 class= "zonetitle" style="color:#111;text-align:left;font-size:24px;">LOADS <div class="levelz2" style="float:left;margin-right:10px;"><span class="glyphicon glyphicon-collapse-down" style="font-size:20px;cursor:pointer;" id="levelz2"></span></div></h1>
 
 <div class= "row" style="width:85%;" id="loadtable">
   <div class="col-sm">
  	<div class="input-group mb-6">
   	   <div class="input-group-prepend">
   		 <label class="input-group-text" for="gender" style="font-family: Audiowide;  font-size:12px;">GENDER</label>
  	   </div>
  		<select class="custom-select" id="gender" style="font-family:Montserrat;font-size:12px; height:29px;">
    			<option value="1" selected>Male</option>
    			<option value=".67">Female</option>
    			<option value=".84">Male/Female</option>
  		</select>
  	  </div>
   </div>
      <div class="col-sm">
  	<div class="input-group mb-1">
   	   <div class="input-group-prepend">
   		 <label class="input-group-text" for="age" style="font-family: Audiowide;font-size:12px;">AGE RANGE</label>
  	   </div>
  		<select class="custom-select" id="age" style="font-family:Montserrat;font-size:12px; height:29px;">
    			<option value=".55"><15 Years</option>
    			<option value=".85">16-20 Years</option>
    			<option value="1" selected>21-29 Years</option>
    			<option value=".9">30-39 Years</option>
    			<option value=".75">40-49 Years</option>
    			<option value=".65">>50 Years</option>
  		</select>
  	  </div>
   </div>
   
   <div class="col-sm">
  	<div class="input-group mb-1">
   	   <div class="input-group-prepend">
   		 <label class="input-group-text" for="units" style="font-family: Audiowide; font-size:12px;">UNITS</label>
  	   </div>
  		<select class="custom-select" id="units" style="font-family:Montserrat;font-size:12px; height:29px;">
    			<option value="1" selected>Imperial</option>
    			<option value="2.2">Metric</option>
  		</select>
  	  </div>
   </div>

 </div>
    <hr>
</div>


	<div class="no-print">
		<i class="glyphicon glyphicon-print" style="text-align:right; font-size:18px; float:right; padding-right:10px; padding-bottom:10px;" onclick = "myFunction();"></i>
	</div>

</div>

 
   
   
          
          <div class="table-responsive">
          
          
            <div class="table table-striped table-md" id= "strengthfind" style= "width:100%;">
       
     
               </div>

          </div>
     <div class= "no-print">
	<h1 class= "zonetitle" style="color:#111;text-align:left;font-size:24px;">NOTES: <div class="levelz" style="float:left;margin-right:10px;"><span class="glyphicon 			glyphicon-collapse-down" style="font-size:20px;cursor:pointer;" id="levelz3"></span>
        </h1>
  <textarea class="form-control" style=" height:150px; font-family:Montserrat; font-size:14px;" id="notes"></textarea><br>
  
  
  </div>  
        </main>
      </div>
    </div>
     </div>

<br>
<br>

 

<div class= "no-print" >
<div class="col-md-50 ml-sm-50 ol-lg-10pt-3 px-4" style= "margin:0px;">
 <h1 class= "zonetitle" style="color:#111;text-align:left;font-size:24px;">LEVELS <div class= "levelz" style= "float:left; margin-right:10px;"><span class="glyphicon glyphicon-collapse-down" style="font-size:20px;cursor:pointer;" id="levelz"></span></div></h1>
 <br>
    
  
<div class="row" style="width:100%;" id="levelztable">
<div class="col">
          <table class="table table-striped" id="eleveltable">
          <thead id="level1x" >  	
          	<th class= "names" style="width:200px;color:#333;">Name</th>	
          	<th class= "names" style=  "text-align:center;width:50px;color:#333;"><span class ="text">E</span>LEVEL</th>
          	<th style=  "text-align:center;width:50px;color:#333;">10s Watts</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              
          	
          	
          	</thead >
          	
          	<tbody>
          		<tr style="border-none;">
          		  <td><input class="form-control" style= "padding:4px; text-align:left; font-size:12px;height:24px;background-color:#efefef;"  method= "post" id= "name1"></td>
          		  
          		  
          		  <td class= "level" style="font-size:16px;" id="EL1"></td>
          		  <td style= "width:80px;"><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"   method= "post" id="etest"></td>
			
			  
  

          		  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets1"name="score1"></td>
          		  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets2" name="score1"></td>
			  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets3" name="score1"></td>
			  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets4" name="score1"></td>
          		  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets5" name="score1"></td>
			  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets6" name="score1"></td>
			  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets7" name="score1"></td>
          		  <td><input class="form-control" align="middle" style= "padding:4px; height:24px;font-family:Audiowide;background-color:#efefef; font-size:16px; text-align:center;"  method= "post" id= "ets8" name="score1"></td>
		</tr>
		
		
		
	
          		      		
          	</tbody> 
         </table>
  </div>

 

</div>
</div>
</div>
</div>




</div>
</div>
</div>
<br>
<br>

</body>
</html>