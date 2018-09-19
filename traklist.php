 <?php
REQUIRE"auth.php";

?>


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
   



 
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    
    
  <title>Etrak Admin Traklist</title> 
    
    
    
    
</head>





 




<body id= "main" style= "margin-left:18%;">
   
   
<div id="progress">
   

		
		
   		<div class="spinner">
   		  <span style="font-family:Audiowide;">LOADING...</span>
		  <div class="rect1"></div>
		  <div class="rect2"></div>
		  <div class="rect3"></div>
		  <div class="rect4"></div>
		  <div class="rect5"></div>
		  <br>
		   <span id="bartext"></span>
		</div>
 	
	  <div id="myProgress">
	          
		 	
		     
		</div>
		


</div>	



<div id= "all">


<div class="navbar " class="rounded-0" id= "nav" class= "no-print">
<span class= "expand" style="font-size:30px;cursor:pointer; float:left; padding-right:10px;"  onclick= "openNav()" id="expand">&#9776;</span>

	



   <div class="col-xs-4">
  	<div class="input-group">
   	   <div class="input-group-prepend">
   		 <label class="input-group-text" style="background-color:white;border:none;">
   		 	<span class="glyphicon glyphicon-search" style="font-size:14px; color:#444;"></span>
   		 </label>
  	   </div>
  		<input name="tool"  id= "addlists" class="form-control-lg" placeholder= "Search Lists..." method= "POST" style="width:90%;" >
    			
  		
  	  </div>
   </div>

<button type="button" class="btn btn-outline-success " id= "admintraksetter" style= "margin-left:10px;"><span style = "margin-left:3px; font-family: Audiowide; font-size:14px;">SET LIST</span></button>

<button type="button" class="btn btn-outline-success"  id= "autoload1" style= "margin-left:10px;"><span style= "margin-left:3px; font-family: Audiowide; font-size:14px;">AUTOLOAD <span class="glyphicon glyphicon-triangle-right"></span></span></button> 

 

   
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
   <a class="navbar-text " href="close.php?close=true" style= "text-align:center;border-left: 1px solid grey; margin-left:10px;padding-left:20px; font-family:Audiowide;" name="logout" id="logout"><span class="glyphicon glyphicon-log-out" style="font-size:25px;"></span><br>LOGOUT</a>


   </div>	
 
  




 
 <div id="mySidenav" class="sidenav" style="width:18%;" >

 <div class="navbar  navbar-expand-md navbar-custom" class="rounded-0" id="nav" class= "no-print" style= "background-color:#333;">
 
 <img src = "/images/etraksm.png" height = 40px width = 45px><h1 class="nav" style="font-family:Audiowide; font-size:25px;color:white;margin-left:10px; width:100%;font-style:italic"> 
 

                   </div>

   <main role="main" class="col-lg-100 ml-sm-100  ol-md-100 pt-1 px-2" >
    
      <div class="row">
	   <div class="col"> 
   	 	<select class="custom-select" id= "traks" name="toolz" ></select>
   	  </div>  
  
  </div>
  <br>
   <div class="row">
	   <div class="col"> 
	        <button style="font-family:Audiowide;" id= "traksearcher" type="button" class="btn btn-success btn-md" id="submit">SEARCH</button>    
		<button style="font-family:Audiowide;" type="button" class="btn btn-success btn-md" id="submit">SUBMIT</button>
		<button style="font-family:Audiowide;" type="button" class="btn btn-dark btn-md" id="submit">UPDATE</button> 			    	    
					    
	  </div>  
  
  </div>			
		        
		        
     
     <hr>
	
		 <div class="row">
		        <div class="col">
		         <p style= "font-family:Audiowide;color:#333;">TRAK NAME</p>

			      </div>			     
			       </div>
		
					     
          	   <div class="row">
		         
		<div class="col">         
                          <input class="form-control"  name= "traktitle" id="traktitle" method= "post">
			   
               
                   </div>
                   </div>
                
            <hr>   
        

       <div class="row">
       
       <div class="col-xs-5">
         <p style = "font-family:Audiowide;color:#333;">WARMUP</p>
      </div>
      
     <div class="col"  >
    	 <p style = "font-family:Audiowide;color:#333;">SETS</p>
    </div>
    
    <div class="col"  >
    	 <p style = "font-family:Audiowide;color:#333;">REPS</p>
    </div> 
     
     
      </div>
       

     
    <div class="row">
     <div class="col-xs-5">
     </div>

         <div class="col">
         	<input  id="warmsets"  class= "form-control" style="text-align:center; color:#111; height:25px; font-size:18px; font-family:Russo One;">
        </div>
       

        
         <div class="col">
         	<input  id="warmreps"  class= "form-control" style="text-align:center; color:#111; font-size:18px; font-family:Russo One;">
        </div>
        
    </div>   
        


   
   <table class="table-responsive">
   <tbody >
           <tr>

                         <td style = "padding:3px;">
                         <form >
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool1">
				<datalist >
				<select id="toollist">



    				</select>
				</datalist>  
                          </form>
                        </td>
                 </tr>       
                         
                         
                 <tr>    
                  <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool2">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   </tr>
                        
                        
                     <tr>
                          <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool3">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                    </tr>
                         
                      <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool4">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                   
                    <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool5">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                       </tr>               
                        
                     <tr>   
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool6">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                       </tr>
                   <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool7">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                     </tr>
                        
                <tr>
                         <td style = "padding:3px; width:10%;">
                         <form method = "post">
                          <input class="form-control"  name="toolz" list="toollist" placeholder= " " id="tool8">
				<datalist id="toollist">
				</datalist>
                      
                          </form>
                        </td>
                        </tr>
                      </tr>   
                      
    
                
        <br>        
                </tbody>
 

            </table>
       
      
     </div> 

       
      
       </main>
       
    





<div id="findtraklists"></div>

      <main role="main" class="col-md-100 ml-sm-100  ol-lg-100 pt-3 px-4" style = "margin:0px;"> 
      <div class="no-print">
       <button type="button" class="btn btn-success btn-sm" id= "submitlist" style=  "margin-bottom:2px; position:absolute; top:97px; right:190px; float:right; font-size:12px;font-family:Audiowide">SUBMIT LIST</button>
       
       <button type="button" class="btn btn-dark btn-sm" id= "updatelist" style=  "margin-bottom:2px; position:absolute; top:97px; right:75px; float:right; font-size:12px;font-family:Audiowide">UPDATE LIST</button>
       
		<i class="glyphicon glyphicon-print" style="text-align:right; font-size:18px; position:absolute; top:95px; right:5px; float:right; padding-right:20px; padding-bottom:10px;" onclick = "myFunction();"></i><p style=" position:absolute; top:115px; right:13px;font-size:10px;">Print List</p>
	</div>
      
  
  <div class="modal" id= "alert" tabindex="-1" role="dialog" style="vertical-align:middle; background-color:black; font-family:Montserrat; font-size:14px; text-align:center; margin: auto; height: 10%; width: 30%; position:absolute; z-index:10;">
  
     			<span style="color:white;" id="message"></span>
        		<span class="glyphicon glyphicon-ok" ></span>
        		<br>
        		<hr>
        		
        		<button type="button" class="btn btn-outline-success" id="closemodal" style="vertical-align:sub" data-dismiss="alert"><span style= "margin-left:3px; font-family: Audiowide; font-size:12px; padding-bottom:8px;">CLOSE</span></button>
       		
       	      </div>
       
 
        

      
 
         <div class="row">
                    
                      <div class="col">
                         
                            <h1 style = "font-family:Audiowide;color:#333;">TRAK LIST </h1>
                        </div>
                        

                        
                        </div>

                     
                        
                        
                      <div class="row">
                    

                         <div class="col">
                         <form >
                          <input class="form-control" style= "font-family:Montserrat;font-size:12px;text-align:left;width:250px;" id= "searchlist" id="atool1" method= "post" required="true">
				
				
                          </form>
                          
                      </div>
                    
                        
 <div class='col-xs-3'>
              <label>Start Date: </label>
		<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
		    <input class="form-control" type="text" style="background-color:white;border: 1px solid #d2d2d2;" id="startdate" />
		    <span class="input-group-addon" style="background-color:#e9ecef;border: 1px solid #d8d8d8;border-left:none;"><i class="glyphicon glyphicon-calendar" ></i></span>
</div> 
        </div>
        
        <div class='col-xs-3'>
               <label>End Date: </label>
		<div id="datepicker2" class="input-group date" data-date-format="mm-dd-yyyy">
		    <input class="form-control" type="text" style="background-color:white;border: 1px solid #d2d2d2;" id="enddate"   />
		    <span class="input-group-addon" style="background-color:#e9ecef;border: 1px solid #d8d8d8;border-left:none;"><i class="glyphicon glyphicon-calendar" id="datesetter" ></i></span>
		</div>
                
            </div>

   
       
            
            
        </div>
        
 

<hr>


  <div class="modal" id= "alert" tabindex="-1" role="dialog" style="vertical-align:middle; background-color:black; font-family:Montserrat; font-size:14px; text-align:center; color:rgb(70,158,1);">

     			<span style ="color:white;" id="message"></span>
        		<span class="glyphicon glyphicon-ok" ></span>
        <button type="button" class="btn btn-outline-success" id="closemodal" style="vertical-align:sub" data-dismiss="alert"><span style= "margin-left:3px; font-family: Audiowide; font-size:18px;">CLOSE</span></button>
       		
       	      </div>



<!----------------------WEEK 1---------------------->


        <div class="row">
        <div class="col-xs-6" >
      
      
         <h1 style= "font-family:Audiowide;color:#333;">WEEK 1  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk1" style= "margin-bottom:2px; margin-left:30px; font-family:Audiowide; font-size:12px;">CLEAR WEEK</button><button type="button" class="btn btn-dark btn-sm" id= "viewwk1" style= "margin-bottom:2px; margin-left:10px; font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         
         </h1>
        
         </div>
         
         <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name="ps" type="number" id="ps1" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input name= "fs" type="number"  id="fs1" class="form-control input-sm"></td>
			      <td><input name= "ts" type="number" id="ts1" class="form-control input-sm"></td>
			      <td></td>
			      <td><input name= "stas" type="number"  id="stas1" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr1" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar1" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr1" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number" label= "1" id="fr1" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" label= "1" id="tr1" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er1" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star1" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name= "fload" id="fl1" class="align-middle"></td>
			      <td name= "tload" id= "tl1" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
        </div>
     
       
        <div class="row">
        <div class="col">
        	
        
        </div>
        </div>
       <br>
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p style="font-family:Montserrat; color:#666;" id= "date1" ></p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">1</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date2" class="dayz"></p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">2</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date3" class="dayz"></p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day <span class= "level">3</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date4" class="dayz"></p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">4</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date5" class="dayz"></p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">5</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date6" class="dayz"></p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">6</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date7" class="dayz"> 1/1/2018 </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">7</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist1"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select label= "trakz" class="custom-select" id="toollist2"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist3"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist4"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist5"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist6"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist7"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
      
       
      
       <br>
       
         <div class= "row" id= "trak1find">
         
        
                </div>
                        
 
	



<br>

    <hr>
    
  
<!----------------------WEEK 2---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 2  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk2" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk2" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk1" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps2" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs2" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts2" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas2" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr2" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar2" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr2" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr2" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr2" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er2" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star2" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl2" class="align-middle"></td>
			      <td name= "tload" id= "tl2" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">8</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">9</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">10</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">11</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">12</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">13</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">14</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist8"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist9"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist10"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist11"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist12"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist13"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist14"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak2find">
        
                </div>
                        
 
	


<br>

    <hr>   
    
    
  
    
  
  <!----------------------WEEK 3---------------------->


        <div class="row">
        <div class="col-xs-6" >
      
      
         <h1 style= "font-family:Audiowide;color:#333;">WEEK 3  
          <button type="button" class="btn btn-dark btn-sm" id= "clearwk3" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk3" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk2" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
         
         <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps3" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs3" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts3" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas3" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr3" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar3" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr3" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr3" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr3" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er3" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star3" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl3" class="align-middle"></td>
			      <td name= "tload" id= "tl3" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			   			
			</table>
       	 	</div>
       	 	
     
        </div>
     
       
        <div class="row">
        <div class="col">
        	
        
        </div>
        </div>
       <br>
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p class= "dayz" id= "date15" ></p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">15</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date16" class="dayz"></p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">16</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date17" class="dayz"></p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day <span class= "level">17</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date18" class="dayz"></p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">18</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date19" class="dayz"></p>
          </div>
         
           <div class="col">
          <p class="logo"> Day  <span class= "level">19</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date20" class="dayz"></p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">20</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id= "date21" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">21</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist15"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select label= "trakz" class="custom-select" id="toollist16"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist17"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist18"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist19"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist20"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist21"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
      
       
      
       <br>
       
         <div class= "row" id= "trak3find">
         
        
                </div>
                        
 
	



<br>

    <hr>
    
  
  <!----------------------WEEK 4---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 4  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk2" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk2" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk1" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps4" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs4" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts4" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas4" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr4" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar4" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr4" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr4" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr4" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er4" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star4" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl4" class="align-middle"></td>
			      <td name= "tload" id= "tl4" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date22" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">22</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date23" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">23</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date24" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">24</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date25" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">25</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date26" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">26</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date27" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">27</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date28" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">28</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist22"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist23"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist24"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist25"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist26"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist27"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist28"  name="toolz" >
	
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak4find">
        
                </div>
                        
 
	


<br>

    <hr>   
  
  
   <!----------------------WEEK 5---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 5  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk2" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk2" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk1" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			   <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps5" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs5" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts5" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas5" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr5" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar5" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr5" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr5" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr5" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er5" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star5" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl5" class="align-middle"></td>
			      <td name= "tload" id= "tl5" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date29" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">29</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date30" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">30</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date31" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">31</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">32</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">33</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">34</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">35</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist29"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist30"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist31"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist32"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist33"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist34"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist35"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak5find">
        
                </div>
                        
 
	

<br>

    <hr>   
  
   <!----------------------WEEK 6---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 6  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk5" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk5" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk5" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			   <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps6" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs6" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts6" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas6" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr6" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar6" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr6" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr6" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr6" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er6" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star6" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl6" class="align-middle"></td>
			      <td name= "tload" id= "tl6" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">36</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">37</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">38</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">39</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">40</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">41</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">42</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist36"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist37"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist38"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist39"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist40"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist41"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist42"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak6find">
        
                </div>
                        
 
	


<br>

    <hr>   
  
  
   <!----------------------WEEK 7---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 7  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk7" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk7" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk6" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">  </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			   <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps7" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs7" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts7" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas7" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr7" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar7" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr7" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr7" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr7" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er7" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star7" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl7" class="align-middle"></td>
			      <td name= "tload" id= "tl7" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">43</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">44</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">45</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">46</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">47</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">48</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">49</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist43"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist44"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist45"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist46"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist47"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist48"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist49"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak7find">
        
                </div>
                        
 
	


<br>

    <hr>   
  
  <!----------------------WEEK 8---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 8  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk8" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk8" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk7" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">  </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			   <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps8" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs8" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts8" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas2" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr8" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar8" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr8" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr8" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr8" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er8" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star8" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl8" class="align-middle"></td>
			      <td name= "tload" id= "tl8" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">50</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">51</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">52</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">53</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">54</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">55</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">56</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist50"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist51"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist52"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist53"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist54"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist55"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist56"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak8find">
        
                </div>
                        
 
	


<br>

    <hr>   
   
  
   <!----------------------WEEK 9---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 9  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk9" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk9" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk8" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			   <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps9" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs9" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts9" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas2" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr9" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar9" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr9" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr9" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr9" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er9" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star9" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl9" class="align-middle"></td>
			      <td name= "tload" id= "tl9" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">57</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">58</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">59</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">60</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">61</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">62</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">63</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist57"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist58"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist59"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist60"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist61"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist62"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist163"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak9find">
        
                </div>
                        
 
	


<br>

    <hr>   
  
  <!----------------------WEEK 10---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 10  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk10" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk10" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk9" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps10" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs10" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts10" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas10" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr10" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar10" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr10" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr10" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr10" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er10" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star10" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl10" class="align-middle"></td>
			      <td name= "tload" id= "tl10" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">64</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">65</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">66</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">67</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">68</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">69</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">70</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist64"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist65"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist66"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist67"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist68"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist69"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist70"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak10find">
        
                </div>
                        
 
	


<br>

    <hr>   
   
   <!----------------------WEEK 11---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 11  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk11" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk11" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk10" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			   <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps11" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs11" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts11" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas11" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr11" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar11" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr11" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr11" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr11" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er11" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star11" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl11" class="align-middle"></td>
			      <td name= "tload" id= "tl11" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">71</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">72</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">73</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">74</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">75</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">76</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">77</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist71"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist72"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist73"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist74"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist75"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist76"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist77"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak11find">
        
                </div>
                        
 
	

<br>

    <hr>   
  
     <!----------------------WEEK 12---------------------->


         <div class="row">
        <div class="col-xs-6" >
      
         <h1 style = "font-family:Audiowide;color:#333;">WEEK 12  
         <button type="button" class="btn btn-dark btn-sm" id= "clearwk10" style= "margin-bottom:10px; margin-left:30px; font-size:12px;">CLEAR WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "viewwk10" style= " margin-bottom:10px;font-family:Audiowide; font-size:12px;">VIEW WEEK</button>
         <button type="button" class="btn btn-dark btn-sm" id= "rptwk9" style= "margin-bottom:10px;  font-size:12px;">REPEAT WEEK</button>
         
         </h1>
        
         </div>
      <div class="col">
        		<table id="tableL" class="table table-striped">
			  <thead class="sets">
			    <tr>
			      <th scope="col">   </th>
			      <th scope="col" class="align-middle" >PLIABILITY</th>
			      <th scope="col" class="align-middle" >ACCELERATION</th>
			      <th scope="col" class="align-middle" >VELOCITY</th>
			      <th scope="col" class="align-middle" >FORCE</th>
			      <th scope="col" class="align-middle" >TENSION</th>
			      <th scope="col" class="align-middle" >ENDURANCE</th>
			      <th scope="col" class="align-middle" >STABILITY</th>
			    </tr>
			  </thead>
			   <tbody>
			    <tr>
			      <th scope="row" class="align-middle">SETS</th>
			      <td><input name= "ps" type="number" id="ps12" class="form-control input-sm"></td>
			      <td></td>
			      <td></td>
			      <td><input  name= "fs" type="number"  id="fs12" class="form-control input-sm"></td>
			      <td><input  name= "ts" type="number" id="ts12" class="form-control input-sm"></td>
			      <td></td>
			      <td><input   name= "stas"  type="number"  id="stas12" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th  scope="row" class="align-middle">REPS/INTERVALS</th>
			      <td><input name= "pr" type="number" id="pr12" class="form-control input-sm"></td>
			      <td><input name= "ar" type="number"  id="ar12" class="form-control input-sm"></td>
			      <td><input name= "vr" type="number" id="vr12" class="form-control input-sm"></td>
			      <td><input name= "fr" type="number"  id="fr12" class="form-control input-sm"></td>
			      <td><input name= "tr" type="number" id="tr12" class="form-control input-sm"></td>
			      <td><input name= "er" type="number"  id="er12" class="form-control input-sm"></td>
			      <td><input name= "star" type="number"  id="star12" class="form-control input-sm"></td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">LOAD %</th>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td name="fload" id="fl12" class="align-middle"></td>
			      <td name= "tload" id= "tl12" class="align-middle"></td>
			      <td></td>
			      <td></td>
			    </tr>
			   
			  </tbody>
			</table>
       	 	</div>
       	 	
     
     
        </div>
        <br>
       
            
        <div class="row">
        <div class="col">
           
             <div class="row">
           <div class="col">
          	<p id="date8" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">78</span> </p>
            </div>
            </div>
         
          </div>
          
          
          
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date9" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">79</span> </p>
            </div>
            </div>
        </div>
            
            
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date10" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day <span class= "level">80</span></p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date11" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">81</span> </p>
            </div>
            </div>
     
            
        </div>
          <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date12" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">82</span> </p>
            </div>
            </div>
        </div>
        
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date13" class="dayz">  </p>
          </div>
          
           <div class="col">
          <p class="logo"> Day  <span class= "level">83</span> </p>
            </div>
            </div>
        </div>
        
           <div class="col" style="margin:0px;">
             <div class="row">
           <div class="col">
          	<p id="date14" class="dayz"> </p>
          </div>
          
           <div class="col">
          <p  class="logo"> Day  <span class= "level">84</span> </p>
            </div>
            </div>
        </div>
         
        
        
        
        </div>
       
        <div class="row">
        <div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist78"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist79"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist80"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist81"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
<div class="col" style="margin:0px;">
       		
   
                          
                          <select class="custom-select" id="toollist82"  name="toolz" >
			
		        
		         </select>
                      
                        
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist83"  name="toolz" >
			
		        
		         </select>
                      
                      
			  </form>
       
       </div>
       <div class="col">
       		  <form method = "post">
                          <select class="custom-select" id="toollist84"  name="toolz" >
			
  		 </select>
                      
                      
			  </form>
       
       </div>
       



       </div>
       <br>
       
         <div class= "row" id= "trak12find">
        
                </div>
                        
 
	

</div>
<br>

   
    

</div>
 

            
 



    
 </main>
</div>
</body>

</html>