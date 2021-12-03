 
 
 
  <?php

              session_start();
               include("connection.php"); // connect to the database
                include("function.php");
              
     
              ?>
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	  <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	  
	  <!-- Below is the external css for styling the index page-->
      <link rel="stylesheet" type="text/css" href="css/index.css"/>
	  
	  
	 
	 
	   
	    

     </head>

         <body>

                 <nav id="index_page_header">
                      <tr>
                             <td><h1> Easygoing Registration tutorial</h1></td>
                               <a href="" id="web_link">Click for more tutorials</a>
                      </tr>
                 </nav>
				   
						 
				 <div id="register_div">

               <h1>Welcom, hope you enjoyed it!!!  </h1>  <br><br>
               
			    <h1>You have just created the continous registration system in php. </h1>  <br><br>
				 
               <a href="" >Click for more tutorials</a>
                     
					 
					 <?php
						 /* select the names of the login from the database */
                            
                             $member_id=$_SESSION["logged"];		

                             $result = mysql_query("SELECT * FROM `member` WHERE `member_id`='$member_id' LIMIT 1");

                             echo "<table border='0px' id='profile_name'>
                             ";

                             while($row = mysql_fetch_array($result))
                        {
                             echo "<tr>";
           
                             
                             echo "<td>" . $row['firstname'] . "</td >";
                             
                             echo "</tr>";
                        }
                             echo "</table>";
                   
                        
						?>      
					 
                   </body>
                
				   </html>
