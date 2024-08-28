<?php

session_start();
include('header.php');
//error_reporting(E_ALL & ~E_NOTICE);

?>
<div class="container text-center">
	<h1>Received Slam</h1>
	<hr class="style-hr"></hr>
	<?php
		// Get a connection for the database
		require_once('../mysqli_connect.php');

		if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];

		$query5 = "SELECT * from friend_slam where user_id='$user_id'";
		$response5 = @mysqli_query($dbc, $query5);
		$number=1;

		$query = "SELECT * from slam_question where user_id='$user_id'";
		$response = @mysqli_query($dbc, $query);
		if($response5){
			$numResults = mysqli_num_rows($response5);
			$counter = 0;
		while ($row = mysqli_fetch_array($response)) {
			while($row5 = mysqli_fetch_array($response5)){
				
				$src = "./images/profile-pic-".$row5['friend_id'].".jpg";
				
		?>
		<div class="row" id="next<?php echo $number?>">
			<div class="col-sm-7">
				<img src="<?php echo $src?>" alt="display pic" style="height: 100%;width: 100%;">
			</div>
			<div class="col-sm-5 text-size-down text-align-left">

				</br><b>Name: </b><?php echo $row5['name'];?>
				</br><b>Nick Name: </b><?php echo $row5['nick_name'];?>
				</br><b>Birthday: </b><?php echo $row5['dob'];?>
				</br><b>Address: </b><?php echo $row5['Address'];?>
				</br><b>Phone Number: </b><?php echo $row5['ph_num'];?>
				</br><b>Facebook: </b><?php echo $row5['fb_id'];?>
				</br><b>Favorite Movie: </b><?php echo $row5['fav_movie'];?>
				</br><b>Favorite Actor: </b><?php echo $row5['fav_actor'];?>
				</br><b>Favorite Actress: </b><?php echo $row5['fav_actress'];?>
				</br><b>Favorite Cuisine: </b><?php echo $row5['fav_cuisine'];?>
				</br><b>Favorite Holiday: </b><?php echo $row5['fav_hol'];?>
				</br><b>Role Model: </b><?php echo $row5['role_model'];?>
				</br><b>Crush: </b><?php echo $row5['crush'];?>
				</br><b>Memorable Moment: </b><?php echo $row5['mem_moment'];?>
				</br><b>Embarassing Moment: </b><?php echo $row5['emb_moment'];?>
				</br><b>Strength: </b><?php echo $row5['strength'];?>
				</br><b>Weakness: </b><?php echo $row5['weakness'];?>
				</br><b>What hurts <?php echo $row5['name'];?>: </b><?php echo $row5['hurt'];?>
				</br><b>Things to avoid: </b><?php echo $row5['things_avoid'];?>
				</br><b>Ambition: </b><?php echo $row5['ambition'];?>
				</br><b>Talent: </b><?php echo $row5['talent'];?>
				</br><b>What <?php echo $row5['name'];?> likes about me?: </b><?php echo $row5['about_user'];?>
				</br><b><?php echo $row['question1'];?> </b><?php echo $row5['question1'];?>
				</br><b><?php echo $row['question2'];?> </b><?php echo $row5['question2'];?>
				</br><b><?php echo $row['question3'];?> </b><?php echo $row5['question3'];?>
				</br><b><?php echo $row['question4'];?> </b><?php echo $row5['question4'];?>
				</br><b><?php echo $row['question5'];?> </b><?php echo $row5['question5'];?>
			</div>
		</div>
		<?php
			$counter++;
		 if ($counter != $numResults) {
		 ?>
			<div class="text-center">
			<a href="#next<?php echo $number+1?>" class="a-anchor smoothScroll" id="btm-arrow"><i class="fa fa-chevron-circle-down size-up" style="font-size: 3em;"></i></a>
			</div>
			<div class="checkslam-image parallax"></div>
		<?php
		}	
			$number++;
			} //end while(response5)
		}//end while(response)
		} //end if(response5)
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
