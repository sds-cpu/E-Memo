<?php

session_start();
include('header.php');
//error_reporting(E_ALL & ~E_NOTICE);

?>
<div class="container text-center">
	<h1>Received Requests</h1>
	<hr class="style-hr">

	<?php
		// Get a connection for the database
		require_once('../mysqli_connect.php');

		if(isset($_SESSION['user_id'])){?>
		<div class="row">	
		<?php
		$user_id = $_SESSION['user_id'];

		$query = "SELECT from_id from request_slam where to_id='$user_id'";
		// Get a response from the database by sending the connection
		// and the query
		$response = @mysqli_query($dbc, $query);

		if($response){

			while($row = mysqli_fetch_array($response)){ 
				//$_SESSION['friend_id'] = $row['from_id'];
				$friend_id = $row['from_id'];
				$query1 = "SELECT name FROM user_info WHERE user_id='$friend_id'";
				$response1 = @mysqli_query($dbc, $query1);
				
				if($response1){
					while($row1 = mysqli_fetch_array($response1)){ 
					?>
					<div class="col-sm-6"  style="padding-top: 32px;padding-bottom: 32px;">
						<div class="row">	
							<div class="col-sm-12">				
							<img src="./images/profile-pic-<?php echo $friend_id?>.jpg" alt="HTML Icon" style="width: 490px;height: 360px;">
							<?php echo $row1['name'];?>
							</div>
						</div>
						<div class="row">	
							<div class="col-sm-12">
							<a href="fillSlambook.php?friend_id=<?php echo $friend_id?>" class="btn btn-primary">Fill Slambook</a>
							</div>
						</div>
					</div>
	<?php	
					}//end while row1
				}//end if row1
			}
		} else {

		echo "Couldn't issue database query<br />";

		echo mysqli_error($dbc);

		}

		$query2 = "SELECT from_id from request_friend where to_id='$user_id'";
		// Get a response from the database by sending the connection
		// and the query
		$response2 = @mysqli_query($dbc, $query2);

		if($response2){

			while($row2 = mysqli_fetch_array($response2)){ 
				//$_SESSION['friend_id'] = $row['from_id'];
				$friend_id = $row2['from_id'];
				$query3 = "SELECT name FROM user_info WHERE user_id='$friend_id'";
				$response3 = @mysqli_query($dbc, $query3);
				
				if($response3){
					while($row3 = mysqli_fetch_array($response3)){ 
					?><div class="col-sm-6"  style="padding-top: 32px;padding-bottom: 32px;">
						<div class="row">	
							<div class="col-sm-12">				
							<img src="./images/profile-pic-<?php echo $friend_id?>.jpg" alt="HTML Icon" style="width: 490px;height: 360px;">
							<?php echo $row3['name'];?>
							</div>
						</div>
						<div class="row">	
							<div class="col-sm-12">
							<a href="./source/addFriend.php?friend_id=<?php echo $friend_id?>" class="btn btn-primary">Accept Request</a>
							</div>
						</div>
					</div>
	<?php	
					}//end while row2
				}//end if row2
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