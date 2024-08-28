<?php	
	// Get a connection for the database
	//require_once('../../mysqli_connect.php');
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');

	session_start();
	

	$password = $_POST['password'];
	$email = strtolower($_POST['email']);

	$query = "SELECT user_id,password FROM user_info WHERE email='$email'";
	
	$response = @mysqli_query($dbc, $query);

	if(mysqli_num_rows($response)>0){
						 
		while($row = mysqli_fetch_array($response)){
			$_SESSION['user_id'] = $row['user_id'];
			header( 'Location:../main.php');
				
			/*if (password_verify($password, $row['password'])) {
				
		    	
			} else {
			    echo '<p class="text-danger">Invalid password</p>';
			}*/
			

			if(!empty($_POST["remember"])) {
				setcookie ("user_login",$email,time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("user_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["user_login"])) {
					setcookie ("user_login","");
				}
				if(isset($_COOKIE["user_password"])) {
					setcookie ("user_password","");
				}
			}
	    }
	}
	else{
		echo "User Login Unsucessful";
	}
	?>
