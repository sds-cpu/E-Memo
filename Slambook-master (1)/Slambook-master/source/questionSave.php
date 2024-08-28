<?php	
	// Get a connection for the database
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');

	session_start();
	
	$question1 = ucfirst(strtolower(str_replace("?","",$_POST['question1'])));
	$question2 = ucfirst(strtolower(str_replace("?","",$_POST['question2'])));
	$question3 = ucfirst(strtolower(str_replace("?","",$_POST['question3'])));
	$question4 = ucfirst(strtolower(str_replace("?","",$_POST['question4'])));
	$question5 = ucfirst(strtolower(str_replace("?","",$_POST['question5'])));
	$user_id = $_SESSION['user_id']; 
	
	//echo $user_id;

	$query0 = "SELECT user_id FROM slam_question WHERE user_id = '$user_id'";
	$response0 = @mysqli_query($dbc, $query0);

		$question1 = mysqli_real_escape_string($dbc, $question1);
		$question2 = mysqli_real_escape_string($dbc, $question2);
		$question3 = mysqli_real_escape_string($dbc, $question3);
		$question4 = mysqli_real_escape_string($dbc, $question4);
		$question5 = mysqli_real_escape_string($dbc, $question5);

	if(mysqli_num_rows($response0)==0)
	{
		
		$query = "INSERT INTO slam_question(user_id,question1,question2,question3,question4,question5)
				  VALUES('$user_id','$question1','$question2','$question3','$question4','$question5')";			

		$response = @mysqli_query($dbc, $query);


		if($response){
							 
			$_SESSION['status'] = "Data Inserted Successfully!!";
			header( 'Location:../myAccount.php');
		}else{

			echo "Error inserting data for the current user.". mysqli_error($dbc);
		}
	}
	else{
		
		$queryUpdate = "UPDATE slam_question 
			  SET question1='$question1',question2='$question2',question3='$question3',question4='$question4',question5='$question5'
			  WHERE user_id = '$user_id'";
		$responseUpdate = @mysqli_query($dbc, $queryUpdate);
		if($responseUpdate){

			$_SESSION['status'] = "Data Updated Successfully!!";
			header( 'Location:../myAccount.php');
		}
		else{
			 echo "Error updating data for the current user.". mysqli_error($dbc);
		}
	}
?>