 <?php
REQUIRE"auth.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel = "shortcut icon" type="image/png" href= "/images/etraklatest.png">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron|Oswald|Audiowide|Fjalla One|Exo 2|Rationale|Russo One|Oxygen|Montserrat">
 
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
 
        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
       
         
          
 <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
<link rel = "stylesheet" href="TeamView.css">


  <script src= "https://printjs-4de6.kxcdn.com/print.min.js"> </script>
  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">

   
   <script src = "Scripts.js"></script>  
   <script src = "jquery.js"></script>   
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    

    
    
  <title>Etrak Toolshed</title> 
    
    
    
    
</head>




<body id = "main">



<div class="navbar  navbar-expand-md navbar-custom" class="rounded-0" id="nav" class= "no-print">
<a class="navbar-text" href="home.php" style= "text-align:center;"><img src = "/images/etraksm.png" height= 40px width= 45px></a>









<form method = "post" class= "form-inline" style = "width:100%;">

<input name="tool" id= "traks" class="dropdown" placeholder= "Search Traks..." method = "POST"  style= "width:50%;">



<button type="button" class="btn btn-outline-success" id= "traksearcher" style = "margin-left:10px;"><span style = "margin-left:3px; font-family: Audiowide; font-size:14px;">SEARCH </span><i class="glyphicon glyphicon-search"></i></button>
</form>

<a class="navbar-text" href="home.php" style= "text-align:center;"><span class="glyphicon glyphicon-eye-open" style="font-size:20px;"></span>VIEW</a>
  <a class="navbar-text" href="admin.php" style= "text-align:center;"><span class="glyphicon glyphicon-calendar" style="font-size:20px;"></span>
BUILD</a>
  <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-wrench" style="font-size:20px;"></span>TOOLS</a>
  <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-fire" style="font-size:20px;"></span>FUEL</a>
   <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-dashboard" style="font-size:20px;"></span>TEST</a>
    <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-stats" style="font-size:20px;"></span>REPORTS</a>
   <a class="navbar-text" href="#" style= "text-align:center;"><span class="glyphicon glyphicon-user" style="font-size:20px;"></span>CLIENTS</a>
      <a class="navbar-text" href="index.html" style= "text-align:center;border-left: 1px solid grey; margin-left:10px;padding-left:20px;" name="logout" id="logout"><span class="glyphicon glyphicon-log-out" style="font-size:20px;"></span>LOGOUT</a>

</div>
	

<div class = "admin" >
<button type="button" class="btn btn-dark btn-md" id="update">UPDATE TOOLs</button>
<button type="button" class="btn btn-success btn-md" id="submit">POST TOOLS</button>

  </div>      
        
</div>


 <div id="traklist"></div> 
 
 



</div>



      <main role="main" class="col-md-100 ml-sm-100  ol-lg-100 pt-3 px-4" style = "margin:0px;"> 
      <br>
      
      <div id= "alert" class="alert alert-success" role="alert" style="font-family:Montserrat; font-size:14px; text-align:center; display:none;">
       
        <span id="message"></span>
        <span class="glyphicon glyphicon-remove" id="loadbutton" style="float:right; cursor:pointer; padding:0px;"></span>

</div>
      
 <br>
 <table class="table table-striped" >
          <thead  > 
        	<th class= "names" style="width:8%; color:#333; text-align:center;">Distance (m)</th> 	
          	<th class= "names" style="color:#333; text-align:center;">Tool</th>	
          	<th class= "names" style="color:#333; text-align:center;">Base</th>
          	<th class= "names" style="color:#333; text-align:center;">Joint</th>
                <th class= "names" style="color:#333; text-align:center;">Single Movement</th>
                <th class= "names" style="color:#333; text-align:center;">Single Movement</th>
                <th class= "names" style="color:#333; text-align:center;">Multi Movement</th>
                <th class= "names" style="color:#333; text-align:center;">Multi Movement</th>
              
              
          	
          	
          	</thead >
          	
          	<tbody>
          		<tr style="border-none;">
          		   <td><input class="form-control" style= " text-align:center; font-size:12px;"  method= "post" ></td>
          		  
          		  <td> <form >
                          	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">AB</option>
    					<option value="2">BB</option>
    					<option value="2">BD</option>
    					<option value="3">BSU</option>
    					<option value="4">CB</option>
    					<option value="5">DB</option>
    					<option value="6">DB DB</option>
    					<option value="7">GL</option>
    					<option value="8">KB</option>
    					<option value="9">KB KB</option>
    					<option value="9">LM</option>
    					<option value="10">MB</option>
    					<option value="11">SB</option>
    					<option value="12">SWB</option>
    					<option value="13">TRX</option>
    					<option value="14">TF</option>
  			       </select>
  			       </form>
  			   </td>
          		  
          		  
          		 <td><form >
                          	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">Seated</option>
    					<option value="2">Lying</option>
    					<option value="3">Bench</option>
    					<option value="4">Pistol</option>
    					<option value="5">Overhead</option>
    					<option value="6">Plank</option>
    					<option value="7">Split</option>
    					<option value="9">Rear Leg Elevated</option>
    					<option value="10">Single Arm</option>
    					<option value="11">Single Leg</option>
    					<option value="12">Kneeling</option>
    					<option value="13">4pt.</option>
    					<option value="14">3pt.</option>
  			       </select>
  			       </form>
  			    </td>
          		 <td><form >
                          	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">Ankle</option>
    					<option value="2">Knee</option>
    					<option value="3">Hip</option>
    					<option value="4">Shoulder</option>
    					<option value="5">Trunk</option>
    					<
    					
  			       </select>
  			       </form>
  			    </td>
          		  
          		 <td>
          		 	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">Flexion</option>
    					<option value="2">Extension</option>
    					<option value="3">Adduction</option>
    					<option value="4">Abduction</option>
    					<option value="5">Internal Rotation</option>
    					<option value="6">External Rotation</option>
    					<option value="7">Forward</option>
    					<option value="8">Lateral</option>
    					<option value="9">Reverse</option>
    					<option value="9">Vertical</option>
    					<option value="9">Rotational</option>
    					<option value="10">Front</option>
    					<option value="11">Back</option>
    					
  			       </select>
  			 </td>
          		  
          		 <td>
          		 	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">Jump</option>
    					<option value="1">Box Jump</option>
    					<option value="2">Sprint</option>
    					<option value="3">Hop</option>
    					<option value="9">Squat</option>
    					<option value="9">Clean</option>
    					<option value="9">Snatch</option>
    					<option value="9">Throw</option>
    					<option value="9">Swing</option>
    					<option value="9">Slam</option>
    					<option value="9">Row</option>
    					<option value="9">Press</option>
    					<option value="9">Pull</option>
    					<option value="9">Bike</option>
    					<option value="9">Swim</option>
  			       </select>
  			     </td>
          		 
          		 <td>
          		  <select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">Flexion</option>
    					<option value="2">Extension</option>
    					<option value="3">Adduction</option>
    					<option value="4">Abduction</option>
    					<option value="5">Internal Rotation</option>
    					<option value="6">External Rotation</option>
    					<option value="7">Forward</option>
    					<option value="8">Lateral</option>
    					<option value="9">Reverse</option>
    					<option value="9">Vertical</option>
    					<option value="9">Rotational</option>
    					<option value="10">Front</option>
    					<option value="11">Back</option>
  			       </select>
          		 
          		 
          		 </td>
          		 
          		 <td>
          		  <select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">Jump</option>
    					<option value="1">Box Jump</option>
    					<option value="2">Sprint</option>
    					<option value="3">Hop</option>
    					<option value="9">Squat</option>
    					<option value="9">Clean</option>
    					<option value="9">Snatch</option>
    					<option value="9">Throw</option>
    					<option value="9">Swing</option>
    					<option value="9">Slam</option>
    					<option value="9">Row</option>
    					<option value="9">Press</option>
    					<option value="9">Pull</option>
    					<option value="9">Bike</option>
    					<option value="9">Swim</option>
  			       </select>
          		 
          		 
          		 </td>
          		
		   </tr>
		  </tbody>
		 </table>  

<hr>
  
<div class="row" style="width:100%;" >
<div class="col">
          <table class="table table-striped" >
          <thead  >  	
          	<th class= "names" style="width:25%; color:#333;">Tool Name</th>	
          	<th class= "names" style="width:100px; color:#333; text-align:center;">Distance (m)</th>
          	<th class= "names" style="width:150px; color:#333; text-align:center;">Bodyweight Ratio</th>
                <th class= "names" style="width:150px; color:#333; text-align:center;">Max Reference</th>
                <th class= "names" style="width:100px; color:#333; text-align:center;">Max Ratio</th>
                <th class= "names" style="width:100px; color:#333; text-align:center;">Tool(#)</th>
                <th class= "names" style="color:#333; text-align:center;">Video Link</th>
              
              
          	
          	
          	</thead >
          	
          	<tbody>
          		<tr style="border-none;">
          		  <td> <form >
                          <input class="form-control" style= " text-align:left;font-size:12px;"name="toolz" list="toollist">
				<datalist id="toollist">
			
				</datalist>  
                          </form></td>
          		  
          		  
          		 <td><input class="form-control" style= " text-align:center;font-size:12px;"  method= "post" ></td>
          		 <td><input class="form-control" style= " text-align:center;font-size:12px;"  method= "post" ></td>
          		  
          		 <td>
          		 	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">10s Power</option>
    					<option value="2">Lower</option>
    					<option value="3">Push</option>
    					<option value="4">Pull</option>
  			       </select>
  			 </td>
          		 <td><input class="form-control" style= " text-align:center; font-family:Montserrat;font-size:12px;"  method= "post" ></td>
          		  
          		 <td>
          		 	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">0</option>
    					<option value="2">1</option>
    					<option value="3">2</option>
  			       </select>
  			     </td>
          		 <td><input class="form-control" style= " text-align:center; font-size:10px;"  method= "post" ></td>
			  
  		</tr>

          	<tr style="border-none;">
          		  <td> <form >
                          <input class="form-control" style= " text-align:left;font-size:12px;" name="toolz" list="toollist">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form></td>
          		  
          		  
          		 <td><input class="form-control" style= " text-align:center;font-size:12px;"  method= "post" ></td>
          		 <td><input class="form-control" style= " text-align:center;font-size:12px;"  method= "post" ></td>
          		  
          		 <td>
          		 	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">10s Power</option>
    					<option value="2">Lower</option>
    					<option value="3">Push</option>
    					<option value="4">Pull</option>
  			       </select>
  			 </td>
          		 <td><input class="form-control" style= " text-align:center; font-family:Montserrat;font-size:12px;"  method= "post" ></td>
          		  
          		 <td>
          		 	<select class="form-control" style="height:34px;font-family:Montserrat;font-size:12px;text-align:center;">
    					<option value="0"></option>
    					<option value="1">0</option>
    					<option value="2">1</option>
    					<option value="3">2</option>
  			       </select>
  			     </td>
          		 <td><input class="form-control" style= " text-align:center; font-size:10px;"  method= "post" ></td>
			  
  		</tr>	 
		
		
		
	
          		      		
          	</tbody> 
         </table>

    <hr>
    
     
</div>
 
    
 </main>
</body>

</html>