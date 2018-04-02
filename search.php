<!DOCTYPE html>
<html lang="en">
<head>


       <link rel = "stylesheet" href="TeamView.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
       <link rel="stylesheet"
       href="https://fonts.googleapis.com/css?family=Orbitron|Oswald|Audiowide|Fjalla One|Exo 2|Rationale|Russo One|Oxygen|Montserrat">
 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
 
 
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      
   <script src = "Scripts.js"></script>      


<script>  
 $(document).ready(function(){  
      $('#traks').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"suggest.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#traklist').fadeIn();  
                          $('#traklist').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#traks').val($(this).text());  
           $('#traklist').fadeOut();  
      });  
 });  
 
 
 </script>   
 <style>  

 
           ul{  
                background-color:#333;  
                color:white;
                cursor:pointer;  
                font-family:"Montserrat";
                font-size:12px;
             
           }  
           li{  
                padding:12px;  
           }  
           
           li:hover {
   
         color:rgb(70,158,1);
}


           </style>  
</head>

<body>

<div class = "top">
<img src = "/images/etrackcircle copy.png" height = 50px width = 55px>
<p class = "logo" >TRAK<span class = "texter"</span>PRO</p>

<div class = "form">
<form action = "home.php" method = "post">
<span class="glyphicon glyphicon-search" style = "font-size:20px; top:16px; background-color:inherit; margin-left:9px;"></span>
<input list="tools" name="tool" id= "search" placeholder = "Search Traks..."  class = "search">

	<div id="searchlist" class = "list"></div>  