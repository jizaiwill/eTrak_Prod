<!DOCTYPE html>
<html lang="en">
<head>


     <link rel = "stylesheet" href="TeamView.css">
       <script src = "Scripts.js"></script> 
       <script type ="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"</script>      
       <script type = "text/javascript">
       
       function searchq () {
       
       var searchTxt = $("input[name ='search']").val();
       
       $.post("search.php", {searchVal: searchTxt}, function (output) {
       $("#output").html(output);
       
       });
       
       }          

       </script>

    
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Orbitron|Oswald|Audiowide|Fjalla One|Exo 2|Rationale|Russo One|Oxygen|Montserrat">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

</head>

<body>
 

 

<img src = "/images/etrackcircle copy.png" height = 50px width = 55px>
<div class = "top">
 
<ul class = "header">

  <li><a class="active" href="#teamview">Team View</a></li>
  <li><a class="active" href="#individualview">Individual View</a></li>
  <li><a href="#mealbuilder">Meal Builder</a></li>
  <li><a href="#trakbuiilder">Trak Builder</a></li>
   <li><a href="#Myteam">My Trak</a></li>
   <li><a href="#clients">Clients</a></li>
   <li><a href="#reports">Reports</a></li>
    <li><a href="#reports">Evaluation</a></li>

</ul>


<br>
<br>
<br>

<form class = "search" action = "TeamView.php" method = "post">
<input type = "text" placeholder = "search traks..." name = "search" onkeydown = "searchq();">
<i class = "glyphicon glyphicon-search"></i></button>

</form>

<div id = "output">

</div>

</body>
</html>