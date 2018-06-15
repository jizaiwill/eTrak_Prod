$(document).ready(function(){
    $.get("traks.php", function(data){
         
         $('#trak2').html(data);
         $('#trak3').html(data);
         $('#trak4').html(data);
      
       
         
    });
});


$(document).ready(function(){  
  $('#trak1input').keyup(function(){  
       var query = $(this).val();  
       if(query != '')  
       {  
            $.ajax({  
                 url:"traks.php",  
                 method:"POST",  
                 data:{query:query},  
                 success:function(data)  
                 {  
                      $('#trak1').fadeIn();  
                      $('#trak1').html(data);
                      
                   
                 }  
            });  
       }  
  });  


  $(document).on('click', '#trakz', function(){ 
       $('#trak1input').val($(this).text());     
       $('#trak1').fadeOut();
       var trak1 = $('#trak1input').val();    
              if(trak1 != '')  
               { $.ajax({  
                         url:"trak1search.php",  
                         method:"POST", 
                         data:{trak1:trak1},  
                         success:function(data)  
                         {  
                          
                          $('#trak1find').html(data)
                         ;},
                error: function(err) {
                alert(data);
                }
           
      
                    });  
               }  
       
 
  });  


   });  





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
  

  $(document).on('click', '#list', function(){  
    
       $('#traks').val($(this).text());  
       $('#traklist').fadeOut();  
  
 
  });  

 
   });  
   
   




$(document).ready(function(){
$('#traksetter').click(function(){
  var query2 = $('#traks').val();    
  var gender = $('#gender').val();
  var age = $('#age').val();;
  var units = $('#units').val();
  
  if(query2 != '')  
       {        $.ajax({  
                 url:"traksearch.php",  
                 method:"POST", 
                 data:{query2:query2,gender:gender,age:age,units:units}, 
                 success:function(data)  
                 {                    
                  $('#strengthfind').html(data);
 
<<<<<<< HEAD
 $(document).ready(function(){
    $('#traksetter').click(function(){
      var query2 = $('#traks').val();    
      var gender = $('#gender').val();
      var age = $('#age').val();
      var units = $('#units').val();
      
      if(query2 != '')  
           {        $.ajax({  
                     url:"traksearch.php",  
                     method:"POST", 
                     data:{query2:query2,gender:gender,age:age,units:units}, 
                     success:function(data)  
                     {                    
                      $('#strengthfind').html(data);
     
                  
                     }  
  
                });  
=======
              
                 ;}  

            });  

       }  
   
   if(query2 != '')  
       {        $.ajax({  
                 url:"traklevels.php",  
                 method:"POST", 
                 data:{query2:query2},  
                 success:function(data)  
                 {                    
                  $('#level1x').html(data);
              
                 ;}  

            });
     }   
             
   if(query2 != '')  
       {        $.ajax({  
                 url:"notes.php",  
                 method:"POST", 
                 data:{query2:query2}, 
                 success:function(data)  
                 {                    
                  $('#notes').html(data); 
                                  
                 ;}  

            });  

       }  
      
>>>>>>> 283ea01f569f569e83d768bd7209b85aa0632cf9

         

 
       
<<<<<<< HEAD
       if(query2 != '')  
           {        $.ajax({  
                     url:"traklevels.php",  
                     method:"POST", 
                     data:{query2:query2},  
                     success:function(data)  
                     {                    
                      $('#level1x').html(data);
                  
                     }  
  
                });
         }   
                 
       if(query2 != '')  
           {        $.ajax({  
                     url:"notes.php",  
                     method:"POST", 
                     data:{query2:query2}, 
                     success:function(data)  
                     {                    
                      $('#notes').html(data); 
                                      
                     }  
  
                });  
=======
  });  
    
});
>>>>>>> 283ea01f569f569e83d768bd7209b85aa0632cf9


$(document).on('click', '#addnames', function(){  
$('#eleveltable').append('<tr><td>my data</td><td>more data</td></tr>'); 
});



   $(document).ready(function(){
    $.get("tools.php", function(data){
         $('datalist').html(data); 
         
    });
});




    


  
  $(document).on('change', '#trak2', function(){  
  var trak2 = $('#trak2').val();    
  if(trak2 != '')  
       {        $.ajax({  
                 url:"trak2search.php",  
                 method:"POST", 
                 data:{trak2:trak2},  
                 success:function(data)  
                 {  
                  
                  $('#trak2find').html(data)
                 ;},
        error: function(err) {
        alert(data);
        }
   

            });  
       }  
  });  
       
       $(document).on('change', '#trak3', function(){  
  var trak3 = $('#trak3').val();    
  if(trak3 != '')  
       {        $.ajax({  
                 url:"trak3search.php",  
                 method:"POST", 
                 data:{trak3:trak3},  
                 success:function(data)  
                 {  
                  
                  $('#trak3find').html(data)
                 ;},
        error: function(err) {
        alert(data);
        }
   

            });  
       }  
  });  
       
       
$(document).on('change', '#trak4', function(){  
  var trak4 = $('#trak4').val();    
  if(trak4 != '')  
       {        $.ajax({  
                 url:"trak4search.php",  
                 method:"POST", 
                 data:{trak4:trak4},  
                 success:function(data)  
                 {  
                  
                  $('#trak4find').html(data)
                 ;},
        error: function(err) {
        alert(data);
        }
   

            });  
       }  
  });  
       



$(document).on('click', '#levelz', function(){  
       $('#levelztable').toggle();  
        
  });  
       
      $(document).ready(function(){  
       $('#levelztable').hide();  
        
  });     


  $(document).on('click', '#levelz2', function(){  
       $('#loadtable').toggle();  
        
  });  
       
      $(document).ready(function(){  
       $('#loadtable').hide();  
        
  });     
  
$(document).on('click', '#levelz3', function(){  
       $('#notes').toggle();  
        
  });  
       
      $(document).ready(function(){  
       $('#notes').hide();  
        
  });     





$(document).on('click', '#traksearcher', function(){  
var query4 = $('#traks').val(); 
 if(query4 != '')  
       {        $.ajax({  
                 url:"timesearchadmin.php",  
                 method:"POST", 
                 data:{query4:query4},  
                 success:function(data)  
                 {  
                  
                  $('#adminmin').html(data);
                  
                  }

            });  
       }  
 var name = $('#traks').val();  
if(name != '')  
       {        $.ajax({  
                 url:"toolsearch.php",  
                 method:"POST", 
                 data:{name:name},  
                 dataType:"JSON",
                 success:function(data) 
                 {  
                  
                  $('#warmsets').val(data.warmsets); 
                  $('#warmreps').val(data.warmreps); 
                  $('#tool1').val(data.warm1);
                  $('#tool2').val(data.warm2);
                  $('#tool3').val(data.warm3);
                  $('#tool4').val(data.warm4);
                  $('#tool5').val(data.warm5);
                  $('#tool6').val(data.warm6);
                  $('#tool7').val(data.warm7);
                  $('#tool8').val(data.warm8);
                  
                  $('#plyosets').val(data.plyosets); 
                  $('#plyoreps').val(data.plyoreps); 
                  $('#tool11').val(data.plyo1);
                  $('#tool12').val(data.plyo2);
                  $('#tool13').val(data.plyo3);
                  $('#tool14').val(data.plyo4);
                  $('#tool15').val(data.plyo5);
                  $('#tool16').val(data.plyo6);
                  $('#tool17').val(data.plyo7);
                  $('#tool18').val(data.plyo8);
                  
                  $('#accelsets').val(data.accelsets); 
                  $('#accelreps').val(data.accelreps); 
                  $('#tool21').val(data.accel1);
                  $('#tool22').val(data.accel2);
                  $('#tool23').val(data.accel3);
                  $('#tool24').val(data.accel4);
                  $('#tool25').val(data.accel5);
                  $('#tool26').val(data.accel6);
                  $('#tool27').val(data.accel7);
                  $('#tool28').val(data.accel8);
                  
                  $('#speedsets').val(data.speedsets); 
                  $('#speedreps').val(data.speedreps); 
                  $('#tool31').val(data.speed1);
                  $('#tool32').val(data.speed2);
                  $('#tool33').val(data.speed3);
                  $('#tool34').val(data.speed4);
                  $('#tool35').val(data.speed5);
                  $('#tool36').val(data.speed6);
                  $('#tool37').val(data.speed7);
                  $('#tool38').val(data.speed8);
                  
                   $('#strengthsets').val(data.strengthsets); 
                  $('#strengthreps').val(data.strengthreps); 
                  $('#tool41').val(data.strength1);
                  $('#tool42').val(data.strength2);
                  $('#tool43').val(data.strength3);
                  $('#tool44').val(data.strength4);
                  $('#tool45').val(data.strength5);
                  $('#tool46').val(data.strength6);
                  $('#tool47').val(data.strength7);
                  $('#tool48').val(data.strength8);
                  
                  $('#tensionsets').val(data.tensionsets); 
                  $('#tensionreps').val(data.tensionreps); 
                  $('#tool51').val(data.tension1);
                  $('#tool52').val(data.tension2);
                  $('#tool53').val(data.tension3);
                  $('#tool54').val(data.tension4);
                  $('#tool55').val(data.tension5);
                  $('#tool56').val(data.tension6);
                  $('#tool57').val(data.tension7);
                  $('#tool58').val(data.tension8);

          $('#intervals').val(data.intervals); 
                  $('#interrest').val(data.interrest); 
                  $('#tool59').val(data.Endurance1);
                  $('#tool60').val(data.Endurance2);
                  $('#tool61').val(data.Endurance3);
                  $('#tool62').val(data.Endurance4);
 
 
               $('#stabsets').val(data.stabsets); 
                  $('#stabreps').val(data.stabreps); 
                  $('#tool63').val(data.stability1);
                  $('#tool64').val(data.stability2);
                  $('#tool65').val(data.stability3);
                  $('#tool66').val(data.stability4);
                  $('#tool67').val(data.stability5);
                  $('#tool68').val(data.stability6);
                  $('#tool69').val(data.stability7);
                  $('#tool70').val(data.stability8);
                  
                  
                  $('#mobsets').val(data.mobsets); 
                  $('#mobreps').val(data.mobreps); 
                  $('#tool71').val(data.mobility1);
                  $('#tool72').val(data.mobility2);
                  $('#tool73').val(data.mobility3);
                  $('#tool74').val(data.mobility4);
                  $('#tool75').val(data.mobility5);
                  $('#tool76').val(data.mobility6);
                  $('#tool77').val(data.mobility7);
                  $('#tool78').val(data.mobility8);
                  
                  $('#adminnotes').val(data.notes);
                  
                  }



            });  
       }  
      
       $('#traktitle').val(name);  
       
       
        
  }); 
  
$(document).on('click', '#submit', function(){     
            var traktitle = $('#traktitle').val();  
           
               var warmsets =  $('#warmsets').val(); 
            var warmreps =  $('#warmreps').val(); 
            var warm1 = $('#tool1').val();
            var warm2 = $('#tool2').val();
            var warm3 = $('#tool3').val();
            var warm4 = $('#tool4').val();
            var warm5 = $('#tool5').val();
            var warm6 = $('#tool6').val();
            var warm7 = $('#tool7').val();
            var warm8 = $('#tool8').val();
            
            var plyosets = $('#plyosets').val(); 
        var plyoreps = $('#plyoreps').val(); 
        var plyo1 = $('#tool11').val();
        var plyo2 = $('#tool12').val();
        var plyo3 = $('#tool13').val();
        var plyo4 = $('#tool14').val();
        var plyo5 = $('#tool15').val();
        var plyo6 = $('#tool16').val();
        var plyo7 = $('#tool17').val();
        var plyo8 = $('#tool18').val(); 
                                           
        var accelsets = $('#accelsets').val(); 
        var accelreps = $('#accelreps').val(); 
        var accel1 = $('#tool21').val();
        var accel2 = $('#tool22').val();
        var accel3 = $('#tool23').val();
        var accel4 = $('#tool24').val();
        var accel5 = $('#tool25').val();
        var accel6 = $('#tool26').val();
        var accel7 = $('#tool27').val();
        var accel8 = $('#tool28').val(); 
        
        var speedsets = $('#speedsets').val(); 
        var speedreps = $('#speedreps').val(); 
        var speed1 = $('#tool31').val();
        var speed2 = $('#tool32').val();
        var speed3 = $('#tool33').val();
        var speed4 = $('#tool34').val();
        var speed5 = $('#tool35').val();
        var speed6 = $('#tool36').val();
        var speed7 = $('#tool37').val();
        var speed8 = $('#tool38').val(); 
        
        var strengthsets = $('#strengthsets').val(); 
        var strengthreps = $('#strengthreps').val(); 
        var strength1 = $('#tool41').val();
        var strength2 = $('#tool42').val();
        var strength3 = $('#tool43').val();
        var strength4 = $('#tool44').val();
        var strength5 = $('#tool45').val();
        var strength6 = $('#tool46').val();
        var strength7 = $('#tool47').val();
        var strength8 = $('#tool48').val(); 

                   var tensionsets = $('#tensionsets').val(); 
                   var tensionreps = $('#tensionreps').val(); 
                   var tension1 = $('#tool51').val();
                   var tension2 = $('#tool52').val();
                   var tension3 = $('#tool53').val();
                   var tension4 = $('#tool54').val();
                   var tension5 = $('#tool55').val();
                   var tension6 = $('#tool56').val();
                   var tension7 = $('#tool57').val();
                   var tension8 = $('#tool58').val();


          var intervals = $('#intervals').val(); 
                  var interrest = $('#interrest').val(); 
                  var Endurance1 = $('#tool59').val();
                  var Endurance2 = $('#tool60').val();
                  var Endurance3 = $('#tool61').val();
                  var Endurance4 = $('#tool62').val();
 
 
               var stabsets = $('#stabsets').val(); 
                  var stabreps = $('#stabreps').val(); 
                  var stability1 = $('#tool63').val();
                  var stability2 = $('#tool64').val();
                  var stability3 = $('#tool65').val();
                  var stability4 = $('#tool66').val();
                  var stability5 = $('#tool67').val();
                  var stability6 = $('#tool68').val();
                  var stability7 = $('#tool69').val();
                  var stability8 = $('#tool70').val();
                 
                  
                  
                 var mobsets = $('#mobsets').val(); 
                 var mobreps = $('#mobreps').val(); 
                 var mobility1 = $('#tool71').val();
                 var mobility2 = $('#tool72').val();
                 var mobility3 = $('#tool73').val();
                 var mobility4 = $('#tool74').val();
                 var mobility5 = $('#tool75').val();
                 var mobility6 = $('#tool76').val();
                 var mobility7 = $('#tool77').val();
                 var mobility8 = $('#tool78').val();
                 
                 var notes =  $('#adminnotes').val();
                 



if(traktitle != '')  
{
    $.ajax({
        type: "POST",
        url: "insert.php",
        data: {traktitle:traktitle,
        warmsets:warmsets, warmreps:warmreps, warm1:warm1, warm2:warm2, warm3:warm3, warm4:warm4, warm5:warm5, warm6:warm6, warm7:warm7, warm8:warm8,
        plyosets:plyosets, plyoreps:plyoreps, plyo1:plyo1, plyo2:plyo2, plyo3:plyo3, plyo4:plyo4, plyo5:plyo5, plyo6:plyo6, plyo7:plyo7, plyo8:plyo8,
        accelsets:accelsets, accelreps:accelreps, accel1:accel1, accel2:accel2, accel3:accel3, accel4:accel4, accel5:accel5, accel6:accel6, accel7:accel7, accel8:accel8,
        speedsets:speedsets, speedreps:speedreps, speed1:speed1, speed2:speed2, speed3:speed3, speed4:speed4, speed5:speed5, speed6:speed6, speed7:speed7, speed8:speed8,
        strengthsets:strengthsets, strengthreps:strengthreps, strength1:strength1, strength2:strength2, strength3:strength3, strength4:strength4, strength5:strength5, strength6:strength6, strength7:strength7, strength8:strength8,
        tensionsets:tensionsets, tensionreps:tensionreps, tension1:tension1, tension2:tension2, tension3:tension3, tension4:tension4, tension5:tension5, tension6:tension6, tension7:tension7, tension8:tension8, 
        stabsets:stabsets, stabreps:stabreps, stability1:stability1, stability2:stability2, stability3:stability3, stability4:stability4, stability5:stability5, stability6:stability6, stability7:stability7, stability8:stability8,
        intervals:intervals, interrest:interrest, Endurance1:Endurance1, Endurance2:Endurance2, Endurance3:Endurance3, Endurance4:Endurance4,            
        mobsets:mobsets, mobreps:mobreps, mobility1:mobility1, mobility2:mobility2, mobility3:mobility3, mobility4:mobility4, mobility5:mobility5, mobility6:mobility6, mobility7:mobility7, mobility8:mobility8,notes:notes,
       
        },
        dataType: "JSON",
        success: function(data) {      
        $('#alert').show();
         $('#message').text(data);   
        },
        error: function(err) {
        alert(data);
        }
 

       
    });

}  



});    


$(document).on('click', '#loadbutton', function(){  
       $('#alert').css("display","none");  
         });  
         
         
$(document).on('click', '#update', function(){     
            var name = $('#traks').val(); 
            var traktitle = $('#traktitle').val();  
               var warmsets =  $('#warmsets').val(); 
            var warmreps =  $('#warmreps').val(); 
            var warm1 = $('#tool1').val();
            var warm2 = $('#tool2').val();
            var warm3 = $('#tool3').val();
            var warm4 = $('#tool4').val();
            var warm5 = $('#tool5').val();
            var warm6 = $('#tool6').val();
            var warm7 = $('#tool7').val();
            var warm8 = $('#tool8').val();
                     
            var plyosets = $('#plyosets').val(); 
        var plyoreps = $('#plyoreps').val(); 
        var plyo1 = $('#tool11').val();
        var plyo2 = $('#tool12').val();
        var plyo3 = $('#tool13').val();
        var plyo4 = $('#tool14').val();
        var plyo5 = $('#tool15').val();
        var plyo6 = $('#tool16').val();
        var plyo7 = $('#tool17').val();
        var plyo8 = $('#tool18').val();
                  
                          
        var accelsets = $('#accelsets').val(); 
        var accelreps = $('#accelreps').val(); 
        var accel1 = $('#tool21').val();
        var accel2 = $('#tool22').val();
        var accel3 = $('#tool23').val();
        var accel4 = $('#tool24').val();
        var accel5 = $('#tool25').val();
        var accel6 = $('#tool26').val();
        var accel7 = $('#tool27').val();
        var accel8 = $('#tool28').val(); 
        
        var speedsets = $('#speedsets').val(); 
        var speedreps = $('#speedreps').val(); 
        var speed1 = $('#tool31').val();
        var speed2 = $('#tool32').val();
        var speed3 = $('#tool33').val();
        var speed4 = $('#tool34').val();
        var speed5 = $('#tool35').val();
        var speed6 = $('#tool36').val();
        var speed7 = $('#tool37').val();
        var speed8 = $('#tool38').val(); 
        
        var strengthsets = $('#strengthsets').val(); 
        var strengthreps = $('#strengthreps').val(); 
        var strength1 = $('#tool41').val();
        var strength2 = $('#tool42').val();
        var strength3 = $('#tool43').val();
        var strength4 = $('#tool44').val();
        var strength5 = $('#tool45').val();
        var strength6 = $('#tool46').val();
        var strength7 = $('#tool47').val();
        var strength8 = $('#tool48').val(); 

                   var tensionsets = $('#tensionsets').val(); 
                   var tensionreps = $('#tensionreps').val(); 
                   var tension1 = $('#tool51').val();
                   var tension2 = $('#tool52').val();
                   var tension3 = $('#tool53').val();
                   var tension4 = $('#tool54').val();
                   var tension5 = $('#tool55').val();
                   var tension6 = $('#tool56').val();
                   var tension7 = $('#tool57').val();
                   var tension8 = $('#tool58').val();

          var intervals = $('#intervals').val(); 
                  var interrest = $('#interrest').val(); 
                  var Endurance1 = $('#tool59').val();
                  var Endurance2 = $('#tool60').val();
                  var Endurance3 = $('#tool61').val();
                  var Endurance4 = $('#tool62').val();
 

               var stabsets = $('#stabsets').val(); 
                  var stabreps = $('#stabreps').val(); 
                  var stability1 = $('#tool63').val();
                  var stability2 = $('#tool64').val();
                  var stability3 = $('#tool65').val();
                  var stability4 = $('#tool66').val();
                  var stability5 = $('#tool67').val();
                  var stability6 = $('#tool68').val();
                  var stability7 = $('#tool69').val();
                  var stability8 = $('#tool70').val();
                 
              
                 var mobsets = $('#mobsets').val(); 
                 var mobreps = $('#mobreps').val(); 
                 var mobility1 = $('#tool71').val();
                 var mobility2 = $('#tool72').val();
                 var mobility3 = $('#tool73').val();
                 var mobility4 = $('#tool74').val();
                 var mobility5 = $('#tool75').val();
                 var mobility6 = $('#tool76').val();
                 var mobility7 = $('#tool77').val();
                 var mobility8 = $('#tool78').val();
                 
                 var notes =  $('#adminnotes').val();



if(traktitle != '')  
{
    $.ajax({
        type: "POST",
        url: "update.php",
        data: {name:name,traktitle:traktitle,
        warmsets:warmsets, warmreps:warmreps, warm1:warm1, warm2:warm2, warm3:warm3, warm4:warm4, warm5:warm5, warm6:warm6, warm7:warm7, warm8:warm8,
        plyosets:plyosets, plyoreps:plyoreps, plyo1:plyo1, plyo2:plyo2, plyo3:plyo3, plyo4:plyo4, plyo5:plyo5, plyo6:plyo6, plyo7:plyo7, plyo8:plyo8,
       accelsets:accelsets, accelreps:accelreps, accel1:accel1, accel2:accel2, accel3:accel3, accel4:accel4, accel5:accel5, accel6:accel6, accel7:accel7, accel8:accel8,
        speedsets:speedsets, speedreps:speedreps, speed1:speed1, speed2:speed2, speed3:speed3, speed4:speed4, speed5:speed5, speed6:speed6, speed7:speed7, speed8:speed8,
        strengthsets:strengthsets, strengthreps:strengthreps, strength1:strength1, strength2:strength2, strength3:strength3, strength4:strength4, strength5:strength5, strength6:strength6, strength7:strength7, strength8:strength8,
        tensionsets:tensionsets, tensionreps:tensionreps, tension1:tension1, tension2:tension2, tension3:tension3, tension4:tension4, tension5:tension5, tension6:tension6, tension7:tension7, tension8:tension8, 
        stabsets:stabsets, stabreps:stabreps, stability1:stability1, stability2:stability2, stability3:stability3, stability4:stability4, stability5:stability5, stability6:stability6, stability7:stability7, stability8:stability8,
intervals:intervals, interrest:interrest, Endurance1:Endurance1, Endurance2:Endurance2, Endurance3:Endurance3, Endurance4:Endurance4,              
mobsets:mobsets, mobreps:mobreps, mobility1:mobility1, mobility2:mobility2, mobility3:mobility3, mobility4:mobility4, mobility5:mobility5, mobility6:mobility6, mobility7:mobility7, mobility8:mobility8,notes:notes,
       
        },
        dataType: "JSON",
        success:function(data) {      
        $('#alert').show();
         $('#message').text(data);   
        },
        error: function(err) {
        alert(data);
       
        }
 

       
    });

}  



});             


    
  
$(document).on('click', '#button-resetclock', function(){  
 var query2 = $('#traks').val(); 
 if(query2 != '')  
       {        $.ajax({  
                 url:"timeset.php",  
                 method:"POST", 
                 data:{query2:query2},  
                 success:function(data)  
                 {  
                  
                  $('#minutes2').val(data);
                  $('#seconds2').val("0"+0);
                  }

            });  
       }  
  });  
  
  
  
    
$(document).on('change', 'input', function(){  
var check = $('#etest').val();
var cell = $('#EL1');


if (check >=1000) {cell.html(10);} 
if (check < 1000 && check >= 900 ) {cell.html(9);}
if (check < 900 && check >= 800 ) {cell.html(8);}
if (check < 800 && check >= 700 ) {cell.html(7);}
if (check < 700 && check >= 600 ) {cell.html(6);}
if (check < 600 && check >= 500 ) {cell.html(5);}
if (check < 500 && check >= 400 ) {cell.html(4);}
if (check < 400 && check >= 300 ) {cell.html(3);}
if (check < 300 && check >= 200 ) {cell.html(2);}
if (check < 200 && check >= 0 ) {cell.html(1);}

});


$(document).on('change', 'input', function(){  
var name1 = $('#name1').val();
var name1board = $('#name1board');
var name2 = $('#name2').val();
var name2board = $('#name2board');


name1board.html(name1);
name2board.html(name2);


});
    


$(document).on('change', "input[name='score1']", function(){
  var ets1 = Number($('#ets1').val());
  var ets2 = Number($('#ets2').val());
  var ets3 = Number($('#ets3').val());
  var ets4 = Number($('#ets4').val());
  var ets5 = Number($('#ets5').val());
  var ets6 = Number($('#ets6').val());
  var ets7 = Number($('#ets7').val());
  var ets8 = Number($('#ets8').val());
  var scores = [ets1,ets2,ets3,ets4,ets5,ets6,ets7,ets8];
var i = 0;

if(ets1 > 0) {i++;}
if(ets2 > 0) {i++;}
if(ets3 > 0) {i++;}
if(ets4 > 0) {i++;}
if(ets5 > 0) {i++;}
if(ets6 > 0) {i++;}
if(ets7 > 0) {i++;}
if(ets8 > 0) {i++;}	
  
  
  $('#escore1').text(((ets1 + ets2 + ets3 + ets4 + ets5 + ets6 + ets7 + ets8)/i).toFixed(2));
  
<<<<<<< HEAD
      });  
 
 
 
  $(document).on('change', "input[name='toolz']", function(){  
	 $('#adminmin').html(1);
                      
            
                });  
     
     
 $(document).ready(function(){       
 $(document).on('change', 'select', function(){  
      var query2 = $('#traks').val();  
      var gender = $('#gender').val();
      var age = $('#age').val();
      var units = $('#units').val();
      if(query2 != '')  
           {        $.ajax({  
                     url:"traksearch.php",  
                     method:"POST", 
                     data:{query2:query2,gender:gender,age:age,units:units}, 
                     success:function(data)  
                     {                    
                      $('#strengthfind').html(data);
                  
                     },
            error: function(err) {
            alert(data);
            }  
=======
>>>>>>> 283ea01f569f569e83d768bd7209b85aa0632cf9
  

  });  



$(document).on('change', "input[name='toolz']", function(){  
 $('#adminmin').html(1);
                  
        
            });  
 
 
$(document).ready(function(){       
$(document).on('change', 'select', function(){  
  var query2 = $('#traks').val();  
  var gender = $('#gender').val();
  var age = $('#age').val();;
  var units = $('#units').val();
  if(query2 != '')  
       {        $.ajax({  
                 url:"traksearch.php",  
                 method:"POST", 
                 data:{query2:query2,gender:gender,age:age,units:units}, 
                 success:function(data)  
                 {                    
                  $('#strengthfind').html(data);
              
                 ;},
        error: function(err) {
        alert(data);
        }  

            });  

       }  
         
  });
});  