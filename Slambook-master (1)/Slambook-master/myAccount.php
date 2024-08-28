<?php

session_start();
include('header.php');
//error_reporting(E_ALL & ~E_NOTICE);

?>

<div class="container text-center">
	<h1>Account Details</h1>
	<hr>
	<?php
		// Get a connection for the database
		require_once('../mysqli_connect.php');

		if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];

		$query5 = "SELECT * from user_info where user_id='$user_id'";

		// Get a response from the database by sending the connection
		// and the query
		$response5 = @mysqli_query($dbc, $query5);

		if($response5){

			while($row5 = mysqli_fetch_array($response5)){ ?>

		<div class="row">
			<div class="col-sm-7">
				<img src="./images/profile-pic-<?php echo $user_id?>.jpg" alt="Profile Pic" style="width: 600px;height: 450px;">
			</div>
			<div class="col-sm-5" style="text-align: left;">
				Name: <?php echo $row5['name'];?></br>
				Email: <?php echo $row5['email'];?></br>
				Birthday: <?php echo $row5['dob'];?></br>
				Phone Number: <?php echo $row5['ph_num'];?></br>
				<?php if($row5['gender']==1){
					echo 'Gender: Female';
				}
				else if($row5['gender']==2){
					echo 'Gender: Male';
				} ?>
				</br>Country: <?php echo $row5['country'];?></br>
			</br>Link: http://slambook.atsnx.com/Slambook/userRegistration.php?friend_id=<?php echo $row5['user_id'];?></br>
			</div>
		</div>
<?php			
			}
		} 
		else {

		echo "Couldn't issue database query<br />";

		echo mysqli_error($dbc);

		}
	mysqli_close($dbc);
	}
	else{
		echo '<p class="text-info">Dont have an account yet? <a style="color:black" href = "userRegistration.php">Sign-up</a>';
		echo '<br>Already have an account yet? <a style="color:black" href = "home.php">Sign-in</a></p>';
	}
?>
</div>
<?php include('footer.php');?>	