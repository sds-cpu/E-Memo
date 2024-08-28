<?php	
	// Get a connection for the database
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');

	session_start();
	$user_id = $_SESSION['user_id'];
	$friend_id = $_GET['friend_id'];
	

	$name = ucfirst(strtolower($_POST['name']));
	$nick_name = ucfirst(strtolower($_POST['nick_name']));
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$dob = $_POST['year'].'-'. $_POST['month'].'-'.$_POST['day'];
	$address = $_POST['address'];
	$phone = ucfirst(strtolower($_POST['phone']));
	$fb = ucfirst(strtolower($_POST['FB']));
	$movie = ucfirst(strtolower($_POST['movie']));
	$actor = ucfirst(strtolower($_POST['actor']));
	$actress = ucfirst(strtolower($_POST['actress']));
	$food = ucfirst(strtolower($_POST['food']));
	$holiday = ucfirst(strtolower($_POST['holiday']));
	$role_model = ucfirst(strtolower($_POST['role_model']));
	$crush = ucfirst(strtolower($_POST['crush']));
	$memorable_moment = ucfirst(strtolower($_POST['memorable_moment']));
	$embarassing_moment = ucfirst(strtolower($_POST['embarassing_moment']));
	$strength = ucfirst(strtolower($_POST['strength']));
	$weakness = ucfirst(strtolower($_POST['weakness']));
	$hurt = ucfirst(strtolower($_POST['hurt']));
	$avoid = ucfirst(strtolower($_POST['avoid']));
	$ambition = ucfirst(strtolower($_POST['ambition']));
	$talent = ucfirst(strtolower($_POST['talent']));
	$like_you = ucfirst(strtolower($_POST['like_you']));
	if(isset($_POST['question1'])){
		$question1 = ucfirst(strtolower($_POST['question1']));
	}
	else{
		$question1 = '';
	}
	if(isset($_POST['question2'])){
		$question2 = ucfirst(strtolower($_POST['question2']));
	}else{
		$question2 = '';
	}
	if(isset($_POST['question3'])){
		$question3 = ucfirst(strtolower($_POST['question3']));
	}else{
		$question3 = '';
	}
	if(isset($_POST['question4'])){
		$question4 = ucfirst(strtolower($_POST['question4']));
	}else{
		$question4 = '';
	}
	if(isset($_POST['question5'])){
		$question5 = ucfirst(strtolower($_POST['question5']));
	}else{
		$question5 = '';
	}
	$date = date('Y-m-d H:i:s');

	$query = "INSERT INTO friend_slam(user_id,friend_id,name,nick_name,dob,address,ph_num,fb_id,fav_movie,fav_actor,fav_actress,fav_cuisine,fav_hol,role_model,crush,mem_moment,emb_moment,strength,weakness,hurt,things_avoid,ambition,talent,about_user,last_update_date, question1,question2,question3,question4,question5) VALUES('$friend_id','$user_id','$name','$nick_name','$dob','$address','$phone','$fb','$movie','$actor','$actress','$food','$holiday','$role_model','$crush','$memorable_moment','$embarassing_moment','$strength','$weakness','$hurt','$avoid','$ambition','$talent','$like_you','$date','$question1','$question2','$question3','$question4','$question5')";

	$response = @mysqli_query($dbc, $query);

	if($response){				 
		$_SESSION['status'] = "Data Inserted Successfully!!";
		header( 'Location:../main.php');
	}
	else{
		echo "Data Insertion Unsuccessful". mysqli_error($dbc);
	}
	?>
