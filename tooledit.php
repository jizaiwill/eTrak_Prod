<?php
//tooledit.php

$servername = "localhost";
$username ="EtrakDatabase";
$password ="harekuxe";
$dbName ="Etrak Database";


//create connection
$conn = new mysqli($servername, $username, $password, $dbName);


 if(isset($_POST["query"]))  
 {  
       
      $query = "SELECT * FROM `Toolshed` WHERE `Tool Name` LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($conn, $query);  
  
      
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<tr id="row_id">
  			<td class = "none" style="text-align:center;">
  				<span style="font-size:14px;" class="glyphicon glyphicon-pencil" id="editrow"><br><span style = "font-size:10px; font-family:Montserrat;">edit</span></td>
  				
                		<td class ="row_data" edit_type="click" id="oldname" col_name="Tool Name" style="font-family:Russo One; vertical-align: middle; font-size:12px;">'.$row["Tool Name"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems" col_name="Distance" style="font-family:Montserrat; vertical-align: middle; font-size:12px; text-align:center;">'.$row["Distance"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems" col_name="Bodyweight Ratio" style="font-family:Montserrat; vertical-align: middle; font-size:12px; text-align:center;">'.$row["Bodyweight Ratio"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems" col_name="Max Ratio" style="font-family:Montserrat;  vertical-align: middle; font-size:12px; text-align:center;">'.$row["Max Ratio"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems" col_name="Max Load" style="font-family:Montserrat; vertical-align: middle; font-size:12px; text-align:center;">'.$row["Max Load"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems" col_name="Scheme" style="font-family:Montserrat; vertical-align: middle; font-size:12px; text-align:center;">'.$row["Scheme"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems" col_name="Number" style="font-family:Montserrat; vertical-align: middle; font-size:12px; text-align:center;">'.$row["Number"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems" col_name="Video Link" style="font-family:Montserrat; vertical-align: middle; font-size:9px; text-align:center;">'.$row["Video Link"].'</td>
                		
                		<td class ="row_data" edit_type="click" id="toolitems"  col_name="Cues" style="font-family:Montserrat; vertical-align: middle; font-size:12px; text-align:center;">'.$row["Cues"].'</td>
                		
                		
                
                
                	    </tr>';  
           }  
      }  
      else  
      {  
           $output .= '<td>Tool Not Found</td>';  
      }  
     
      echo $output;  
 }  
 ?>  


