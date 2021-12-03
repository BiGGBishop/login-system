   
   
   <?php
    //Start session
    session_start();	
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
   
   ?>
 
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	  <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	  
	  <!-- Below is the external css for styling the index page-->
      <link rel="stylesheet" type="text/css" href="css/index.css"/>
	  
	  
	    <!-- Below is the external registration validated form in JavaScript -->
	  <script type="text/javascript" src="js/register_form_validation.js"></script>
	    

     </head>

         <body>

                 <nav id="index_page_header">
                      <tr>
                             <td><h1> <span style="">Easygoing continous registration tutorial in php</h1></td>
                               <a href="" id="web_link">Click for more tutorials</a>
                      </tr>
                 </nav>
				  
				  
				 
				 <div id="register_div">

               <h1>Register below</h1>
               <form name="myForm" action="exec.php" onsubmit="return(validate());" method="post">
    
                <br>
                     <input type="text" name="firstname" placeholder="FIRST NAME" class="reg"><br>
                <br>
                <br>
                     <input type="text" name="secondname" placeholder="SECOND NAME" class="reg"><br>
                <br>
                <br>
                     <input type="text" name="email" placeholder="EMAIL" class="reg"><br>
                <br>
    
                <br>
                 <td><input type="password" name="password" placeholder="PASSWORD" class="reg"><br>
                <br>
                 
                   <input type="hidden" name="profile_picture" value="p.jpg">
                   <td><input name="submit" type="submit" value="Submit" id="sum"/></td>
    
	               </form>
  
                   </div>	
	             
				 
				 
				 <br><br><br><br><br><br><br><br><br><br>
				 
                    <form name="loginform" action="loginscript.php" method="post">
                  <table >
    
                  <td colspan="2">
                  <!--the code bellow is used to display the message of the input validation-->
               
			      <?php
              
        			  if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                      echo '<ul class="err">';
                      foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                      echo '<li>',$msg,'</li>';
                      
					    }
                       echo '</ul>';
                       
					   unset($_SESSION['ERRMSG_ARR']);
                       }
                       
					   ?>
	                  </td>
                    
					  </tr>
	                   
					   <tr >
                      
					  <td ><b>login below</b>
                     
					  </td></tr>

                      <tr>
                      <td>email<br><input type="text" name="email" placeholder="Login email" class="reg"></td>
                      </tr>
                      
					  <td>Password<br><input type="password" name="password" placeholder="Login password" class="reg"> <br><br>
                      
					  <input type="submit" value="login" id="sum"></td>
                      </tr>
    
                      </table>
                      </form>
     
	                  </div>
                     
                   </body>
                
				   </html>
