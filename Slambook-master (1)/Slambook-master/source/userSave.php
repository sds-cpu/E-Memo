<?php	
	// Get a connection for the database
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');

	session_start();

	if(isset($_POST['submit'])){

		$friend_id = $_POST['friend_id'];
		$name = ucfirst(strtolower($_POST['name']));
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$email = ucfirst(strtolower($_POST['email']));
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		$dob = $_POST['year'].'-'. $_POST['month'].'-'.$_POST['day'];
		$country = ucfirst(strtolower($_POST['country']));
		$sex = ucfirst(strtolower($_POST['sex']));
		$ph_num = $_POST['phone'];

		$query0 = "SELECT user_id FROM user_info WHERE name='$name' AND email = '$email'";
		$response0 = @mysqli_query($dbc, $query0);
		$num_of_rows = mysqli_num_rows($response0);

		if($num_of_rows ==0){
			$query = "INSERT INTO user_info(name,password,email,dob,ph_num,country,gender)
							VALUES('$name','$password','$email','$dob','$ph_num','$country','$sex')";
			$response = @mysqli_query($dbc, $query);

			if($response){
				while($row = $response){
					$query1 = "SELECT user_id FROM user_info WHERE name='$name' AND email = '$email'";
					$response1 = @mysqli_query($dbc, $query1);

					if($response1){
						while($row1 = mysqli_fetch_array($response1)){
							$user_id = $row1['user_id'];
							$_SESSION['user_id'] = $user_id;
							$query2 = "INSERT INTO friendship_info(user_id,friend_id)
										VALUES('$user_id','$friend_id')";	 
							$response2 = @mysqli_query($dbc, $query2);

							if($response2){
								$_SESSION['status'] = "Data Inserted Successfully!!";
								header( 'Location:../main.php');
							}
						}
					}
				}
			}
			else{
				echo "User Registration Unsuccessful";
			}
		}
		else{
				echo "User already exists";
			}
	}
?>
