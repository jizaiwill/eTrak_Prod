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
  	<link rel = "shortcut icon" type="image/png" href = "/images/etraklatest.png">
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
    

    
    
  <title>Etrak Admin</title> 
    
    
    
    
</head>




<body id = "main">



<div class="navbar  navbar-expand-md navbar-custom" class="rounded-0" id="nav" class= "no-print">
<span class= "expand" style="font-size:30px;cursor:pointer; " onclick="openNav()" id="expand">&#9776;</span>









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
<button type="button" class="btn btn-dark btn-md" id="update">UPDATE TRAK</button>
<button type="button" class="btn btn-dark btn-md" id="newtrak">NEW TRAK</button>
<button type="button" class="btn btn-success btn-md" id="submit">SUBMIT</button>

  </div>      
        
</div>


 <div id="traklist"></div> 
 
 <div id="mySidenav" class="sidenav">

 <div class="navbar  navbar-expand-md navbar-custom" class="rounded-0" id="nav" class= "no-print" style= "background-color:#333;">
 
 <img src = "/images/etraksm.png" height = 40px width = 45px><h1 class="nav" style="font-family:Audiowide; font-size:12px;color:#999;margin-left:10px;">  QUICKVIEW</h1>
 <a href="#" style="float:right;">
          <span class="glyphicon glyphicon-remove" onclick="closeNav()"></span>
        </a>
 
 
 




 
 
 
  </div>
  	<div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          

 
  </thead>   
</table>
   <main role="main" class="col-lg-100 ml-sm-100  ol-md-100 pt-1 px-2" style= "top:0px;" >
   <h1 style = "font-family:Audiowide;color:#333;font-size:14px;">SELECT TRAKS...</h1>
   <table class="table-responsive">
   <thead>

	   <tr>
                         <th style = "padding:3px; width:10%;">
                         <form >
                          <input class="form" style= "font-family:Audiowide;font-size:10px;text-align:left;width:100%;padding:4px; text-transform:uppercase;background-color:#333; color:#efefef;" list="trak1" placeholder= " " method="post" id="trak1input">
				<datalist id="trak1">
					<select id="trak1"></select>
				</datalist>
                          </form>
                        </th>
              </tr>          
                   <tr><td class="active" style= "text-align:left;"><div id= "trak1find" style= "margin-left:7px;"></div></td></tr>      
                         
                <tr>     
                  <th style = "padding:3px; width:10%;">
                         <form method= "post">
                         <input class="form" style= "font-family:Audiowide;font-size:10px;text-align:left;width:100%;padding:4px; text-transform:uppercase;background-color:#333; color:#efefef;" list="trak2" placeholder= " " method="post" id="trak2input">
				<datalist id="trak2">
				</datalist>
                      
                          </form>
                        </th>             
                 </tr>
                 	<tr><td class="active" style= "text-align:left;"><div id= "trak2find" style= "margin-left:7px;"></div></td></tr>      
                  
                        
                        
                <tr>
                          <th style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form" style= "font-family:Audiowide;font-size:10px;text-align:left;width:100%;padding:4px; text-transform:uppercase;background-color:#333; color:#efefef;" list="trak3" placeholder= " " method="post" id="trak3input">
				<datalist id="trak3">
				</datalist>
                      
                          </form>
                        </th>
                 </tr>  
                         <tr><td class="active" style= "text-align:left;"><div id= "trak3find" style= "margin-left:7px;"></div></td></tr>      
                    <tr>  
                         <th style = "padding:3px; width:10%;">
                         <form method = "post">
                           <input class="form" style= "font-family:Audiowide;font-size:10px;text-align:left;width:100%;padding:4px; text-transform:uppercase;background-color:#333; color:#efefef;" list="trak4" placeholder= " " method="post" id="trak4input">
                           	<datalist id="trak4">
				</datalist>
				<tr><td class="active" style= "text-align:left;"><div id= "trak4find" style= "margin-left:7px;"></div></td></tr>      
                      
                          </form>
                        </th>
                   </tr>

                
        <br>        
                </thead>
 

            </table>
       </main>
       
    

</div>





</div>



      <main role="main" class="col-md-100 ml-sm-100  ol-lg-100 pt-3 px-4" style = "margin:0px;"> 
      <br>
      
      <div id= "alert" class="alert alert-success" role="alert" style="font-family:Montserrat; font-size:14px; text-align:center; display:none;">
       
        <span id="message"></span>
        <span class="glyphicon glyphicon-remove" id="loadbutton" style="float:right; cursor:pointer; padding:0px;"></span>

</div>
      
      
  <table style="width:100%;"> 
                    
                      <thead><th> <h1 style = "font-family:Audiowide;color:#333;">TRAK NAME</h1></th>
          	      <th  style="text-align:center;padding:6px; color:#111;font-size:12px;width:60px;font-family:Montserrat;">COMPLETION TIME (m:ss)</th></thead>
          	      
          	       <tbody >
		           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;width:250px;" name= "traktitle" id="traktitle" method= "post">
				
                          </form>
                        </td>
                        
                        <td style="width:200px;text-align:center;"><span class= "time" style="padding:0px;" id="adminmin">0</span> <span class="time">:00</span></td>
                        
                        
 </table>
<hr>

        <div class="row">
         
        </div>
      
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">CONTROL</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;font-family:Audiowide;">SETS</th>
        <th><input type= "number" style="width:50px;" id="warmsets"  style="text-align:center;padding:2px; color:#111;font-size:22px;font-family:Audiowide;"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REPS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;font-family:Audiowide;"> <input type= "number" style="width:50px;" id="warmreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool1">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool2">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool3">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool4">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool5">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool6">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool7">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool8">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
       
    

</div>


            
            
           </div>
        </div>
    <hr>
    
      <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">PLYABILITY</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">SETS</th>
        <th><input type= "number" style="width:50px;" id= "plyosets"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REPS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id= "plyoreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool11">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool12">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool13">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool14">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool15">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool16">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool17">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool18">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
       
    

</div>


            
            
           </div>
        </div>
    <hr>
    
    
    
    
      <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">ACCELERATION</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">SETS</th>
        <th><input type= "number" style="width:50px;" id="accelsets"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REPS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id="accelreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool21">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool22">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool23">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool24">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;"  name="toolz" list="toollist" placeholder= " " id="tool25">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool26">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool27">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool28">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
       
    

</div>

  
           </div>
        </div>
    <hr>
    
      <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">VELOCITY</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">SETS</th>
        <th><input type= "number" style="width:50px;" id="speedsets"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REPS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id="speedreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool31">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool32">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool33">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool34">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool35">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool36">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool37">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool38">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
       
    

</div>


            
            
           </div>
        </div>
    <hr>
    
    
      <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">FORCE</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">SETS</th>
        <th><input type= "number" style="width:50px;" id="strengthsets"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REPS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id="strengthreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool41">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool42">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool43">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool44">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool45">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool46">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;"  name="toolz" list="toollist" placeholder= " " id="tool47">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool48">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
       
    

</div>


            
            
           </div>
        </div>
    <hr>
    
      <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">TENSION</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">SETS</th>
        <th><input type= "number" style="width:50px;" id="tensionsets"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REPS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id="tensionreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool51">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool52">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool53">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool54">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool55">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool56">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool57">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool58">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
       
    

</div>


            
            
           </div>
        </div>
    <hr>
    
      <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">ENDURANCE</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">INTERVALS</th>
        <th><input type= "number" style="width:50px;" id="intervals"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REST</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id="interrest"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <thead>
           <tr>

                         <th style = "padding:3px; width:10%;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool59">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </th>
                        
                         
                         
                     
                  <th style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool60">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </th>
                  
                        
                        
                     
                          <th style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool61">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </th>
                   
                         
                      
                         <th style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool62">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </th>
                   

                
        <br>        
                </thead>
 

            </table>
       
       
    

</div>


            
            
           </div>
        </div>
    <hr>
    
      <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">STABILITY</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">SETS</th>
        <th><input type= "number" style="width:50px;" id="stabsets"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">REPS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id="stabreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool63">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " "  id="tool64">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " "  id="tool65">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " "  id="tool66">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " "  id="tool67">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " "  id="tool68">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " "  id="tool69">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " "  id="tool70">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       <hr>
       
    

</div>

  <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">MOBILITY</h1></th>
        
         <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;width:60px;">SETS</th>
        <th><input type= "number" style="width:50px;" id="mobsets"></th>
        
        
        <th class = "zonetitle" style ="text-align:right;padding:6px; color:#111;font-size:12px;">SECS</th>
        <th style ="text-align:center;padding:2px; color:#111;font-size:22px;"> <input type= "number" style="width:50px;" id="mobreps"></th>
        

 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool71">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                        
                         
                         
                     
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool72">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                  
                        
                        
                     
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool73">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                         
                      
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool74">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool75">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                                     
                        
                        
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool76">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                      
                   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool77">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    
                        
                
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;" name="toolz" list="toollist" placeholder= " " id="tool78">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                        
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
     <hr>  
    

</div>


 <div class="row">
         
        </div>
        
   
        <div class="table-responsive">
            
                         <table class="table-responsive"> 
                    
                      <thead>
          <th style = "width:90%;"> <h1 style = "font-family:Audiowide;color:#333;">NOTES:</h1></th>
 
  </thead>   
</table>
   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px; width:10%;">
                         <form >
                         <textarea class="form-control" style="width:100%; font-family:Montserrat; font-size:14px;" id="adminnotes"></textarea>
				
                          </form>
                        </td>
                        
              
                 
            </table>
       
     <hr>  
    

</div>
 

            
 

            
            
           </div>
        </div>
 
 
            
            
           </div>
        </div>
    
      <br>
        <br> 
          <br> 
            <br> 
             
    <hr>
    
 </main>
</body>

</html>