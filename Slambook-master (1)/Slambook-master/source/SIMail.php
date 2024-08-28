<?php

if(isset($_POST['submit'])){
	session_start();
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');
		$user_id = $_SESSION['user_id'];

		$query = "SELECT * from user_info where user_id='$user_id'";

		// Get a response from the database by sending the connection and the query
		$response = @mysqli_query($dbc, $query);

		if($response){
			while($row = mysqli_fetch_array($response)){ 
			$to = strtolower($_POST['SI-email']);
			$subject = "Slambook Fill Request";
			$txt =  "Hey your ".$row['name']." friend has sent you an invitation to join Slambook and fill in her 		slambook. Please visit the link below to http://slambook.atsnx.com/Slambook/userRegistration.php?friend_id=$user_id joinus today!Thank you from Slambook team.";
			$headers = "From: webmaster@slambook.com" . "\r\n"; 

			mail($to,$subject,$txt,$headers);
			}
			header( 'Location:../main.php');
		}
}
?>