<?php

session_start();
include('header.php');
//error_reporting(E_ALL & ~E_NOTICE);

?>
<div class="container text-center">
	<h1>Search Results</h1>
	<hr class="style-hr">
			
	<?php
		// Get a connection for the database
		require_once('../mysqli_connect.php');

		if(isset($_SESSION['user_id'])){?>
		<div class="row">
		<?php
		$user_id = $_SESSION['user_id'];
		$name = ucfirst(strtolower($_POST['searchPeople']));
		if(isset($_POST['searchSubmit'])){
		$query = "SELECT * from user_info WHERE name LIKE '%$name%'"; 
		// Get a response from the database by sending the connection
		// and the query
		$response = @mysqli_query($dbc, $query);

		if($response){
			while($row = mysqli_fetch_array($response)){ 

					?>
					<div class="col-sm-6"  style="padding-top: 32px;padding-bottom: 32px;">
						<div class="row">	
							<div class="col-sm-12">				
							<img src="./images/profile-pic-<?php echo $row['user_id']?>.jpg" alt="HTML Icon" style="width: 490px;height: 360px;">
							<?php echo $row['name'];?>
							</div>
						</div>
						<div class="row">	
							<div class="col-sm-12">
								<?php
									$friend_id = $row['user_id'];
								$query1 = "SELECT friend_id from friendship_info where user_id='$user_id' AND friend_id='$friend_id' UNION
				  						  SELECT user_id from friendship_info where friend_id = '$user_id' AND user_id='$friend_id'" ;
								$response1 = @mysqli_query($dbc, $query1);
								$query2 = "SELECT friend_id FROM friend_slam WHERE user_id='$friend_id' AND friend_id='$user_id'";
								$response2 = @mysqli_query($dbc, $query2);
										if(mysqli_num_rows($response1)==0){
								?><a href="./source/requestFriend.php?to_id=<?php echo $friend_id?>" class="btn btn-primary">Send Friend Request</a>
								<?php
										}
										if(mysqli_num_rows($response1)!=0 && mysqli_num_rows($response2)==0 ){
								?>
								<a href="fillSlambook.php?friend_id=<?php echo $user_id?>" class="btn btn-primary">Fill Slambook</a>
								<?php
									}
								?>
								<?php
								if(mysqli_num_rows($response1)!=0){
									$query2 = "SELECT from_id FROM request_slam WHERE from_id='$user_id' AND to_id='$friend_id'";

									$query3 = "SELECT friend_id FROM friend_slam WHERE user_id='$user_id' AND friend_id='$friend_id'";
									$response2 = @mysqli_query($dbc, $query2);
									$response3 = @mysqli_query($dbc, $query3);
					
									if(mysqli_num_rows($response2)==0 && mysqli_num_rows($response3)==0){?>

									<a href="./source/requestSlam.php?to_id=<?php echo $friend_id?>" class="btn btn-primary" id="request-slam-link">Request Slambook Fill</a>
									<?php
									}
									else if(mysqli_num_rows($response2)!=0 && mysqli_num_rows($response3)==0){?>
									<a class="btn btn-primary disabled">Request Sent</a>
							<?php
									}
							}
								?>

						
							</div>
						</div>
					</div>
	<?php	
			}
		} 
		else {

		echo "Couldn't issue database query<br />";

		echo mysqli_error($dbc);

		}
	}
	mysqli_close($dbc);
	?>
</div>
<?php
		}
	else{
		echo '<p class="text-info">Dont have an account yet? <a style="color:black" href = "userRegistration.php">Sign-up</a>';
		echo '<br>Already have an account yet? <a style="color:black" href = "home.php">Sign-in</a></p>';
	}
?>
</div>
<?php include('footer.php');?>	