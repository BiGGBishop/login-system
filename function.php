

                    <?php

					    include("connection.php");
						if(isset($_SESSION["SESS_MEMBER_ID"])) {
						$result = mysql_query("SELECT member_id FROM `member` WHERE `member_id`='".$_SESSION["SESS_MEMBER_ID"]."' LIMIT 1");
						if(mysql_num_rows($result)) {
                        $row = mysql_fetch_array($result);
                         $_SESSION["logged"] = $row["member_id"];
						 
						 
                       }
			       }
				   
	
                     ?> 



					 





                    				 
						
					   					   
