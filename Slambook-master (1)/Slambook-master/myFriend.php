<?php

session_start();
include('header.php');
//error_reporting(E_ALL & ~E_NOTICE);

?>
<div class="container text-center">
	<h1>My Friends</h1>
	<hr class="style-hr">
			
	<?php
		// Get a connection for the database
		require_once('../mysqli_connect.php');

		if(isset($_SESSION['user_id'])){?>
		<div class="row">
		<?php
		$user_id = $_SESSION['user_id'];

		$query = "SELECT friend_id from friendship_info where user_id='$user_id' 
					UNION
				  SELECT user_id from friendship_info where friend_id = '$user_id'" ;
		// Get a response from the database by sending the connection
		// and the query
		$response = @mysqli_query($dbc, $query);

		if($response){

			while($row = mysqli_fetch_array($response)){ 
				$_SESSION['friend_id'] = $row['friend_id'];
				$friend_id = $row['friend_id'];
				$query1 = "SELECT name FROM user_info WHERE user_id='$friend_id'";
				$response1 = @mysqli_query($dbc, $query1);
				
				if($response1){
					while($row1 = mysqli_fetch_array($response1)){ 

					?>
					<div class="col-sm-6"  style="padding-top: 32px;padding-bottom: 32px;">
						<div class="row">	
							<div class="col-sm-12">				
							<img src="./images/profile-pic-<?php echo $row['friend_id']?>.jpg" alt="HTML Icon" style="width: 490px;height: 360px;">
							<?php echo $row1['name'];?>
							</div>
						</div>
						<div class="row">	
							<div class="col-sm-12">

							<?php

							$query4 = "SELECT friend_id FROM friend_slam WHERE user_id='$friend_id' AND friend_id='$user_id'";
							$response4 = @mysqli_query($dbc, $query4);
				
							if(mysqli_num_rows($response4)==0){?>
							<a href="fillSlambook.php?friend_id=<?php echo $row['friend_id']?>" class="btn btn-primary">Fill Slambook</a>
							<?php
							}?>
							<?php
							$query2 = "SELECT from_id FROM request_slam WHERE from_id='$user_id' AND to_id='$friend_id'";

							$query3 = "SELECT friend_id FROM friend_slam WHERE user_id='$user_id' AND friend_id='$friend_id'";
							$response2 = @mysqli_query($dbc, $query2);
							$response3 = @mysqli_query($dbc, $query3);
				
							if(mysqli_num_rows($response2)==0 && mysqli_num_rows($response3)==0){?>

								<a href="./source/requestSlam.php?to_id=<?php echo $row['friend_id']?>" class="btn btn-primary" id="request-slam-link">Request Slambook Fill</a>
							<?php
							}
							else if(mysqli_num_rows($response2)!=0 && mysqli_num_rows($response3)==0){?>
								<a class="btn btn-primary disabled">Request Sent</a>
							<?php
								}
								?>
							</div>
						</div>
					</div>
	<?php	
					}//end while row1
				}//end if row1
			}
		} 
		else {

		echo "Couldn't issue database query<br />";

		echo mysqli_error($dbc);

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