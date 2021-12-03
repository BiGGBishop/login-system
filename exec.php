

    <?php
    
	//below variables are being assign to names of input fields in the registration form.
	session_start();
    include('connection.php');
    $firstname=$_POST['firstname'];
    $secondname=$_POST['secondname'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];
    $password=$_POST['password'];
	
	
	//Below insert the registered user information into the database when it has passed the above validation.
	 
    mysql_query("INSERT INTO member(firstname, secondname, email, sex, password)
	VALUES('$firstname', '$secondname', '$email', '$sex', '$password')");
    header("location: home.php");
    mysql_close($con);
	
	
    
	?>
	
	
     