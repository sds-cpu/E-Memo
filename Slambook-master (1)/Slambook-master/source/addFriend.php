<?php	
	// Get a connection for the database
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');
	session_start();
	

	$friend_id = $_GET['friend_id'];
	$user_id =$_SESSION['user_id'];
	$date = date('Y-m-d H:i:s');
	
	$query = "INSERT INTO friendship_info(user_id,friend_id,last_update_date)
				VALUES('$user_id','$friend_id','$date')";
				

	$response = @mysqli_query($dbc, $query);


	if($response){
						 
		$_SESSION['status'] = "Data Inserted Successfully!!";
		//$_SESSION['varname'] = $row['cust_id'];
		header( 'Location:../myFriend.php');
	}
	else{
		echo "Error sending request".mysqli_error($dbc);
	}
?>