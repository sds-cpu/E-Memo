<?php	
	// Get a connection for the database
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');
	session_start();
	

	$to_id = $_GET['to_id'];
	$user_id =$_SESSION['user_id'];
	$date = date('Y-m-d H:i:s');
	
	$query = "INSERT INTO request_slam(from_id,to_id,request_date)
				VALUES('$user_id','$to_id','$date')";
				

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