<?php	
	// Get a connection for the database
	require_once($_SERVER['DOCUMENT_ROOT'] . '/mysqli_connect.php');

	session_start();

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"]) && isset($_FILES["profile-pic-upload"])) {
		$user_id = $_SESSION['user_id'];

		$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/Slambook/images/";
		$target_file = $target_dir . 'profile-pic-'.$user_id.'.jpg';//basename($_FILES["fileToUpload"]["name"])
		$uploadOk = 1;
		$imageFileTypeActual = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	    $check = getimagesize($_FILES["profile-pic-upload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	
	// Check file size
	if ($_FILES["profile-pic-upload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileTypeActual != "jpg" && $imageFileTypeActual != "png" && $imageFileTypeActual != "jpeg"
	&& $imageFileTypeActual != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["profile-pic-upload"]["tmp_name"], $target_file)) {

	       $status =  "The file ". basename( $_FILES["profile-pic-upload"]["name"]). " has been uploaded.";
	    } else {
	        $status = "Sorry, there was an error uploading your file.";
	    }
	}

	//end save profile picpassword_hash(
	
		$name = ucfirst(strtolower($_POST['edit-account-name']));
		$password = password_hash($_POST['edit-account-password'], PASSWORD_DEFAULT);
		$email = ucfirst(strtolower($_POST['edit-account-email']));
		$dob = $_POST['edit-account-dob'];
		$ph_num = $_POST['edit-account-phone-num'];
		$user_id = $_SESSION['user_id'];

		$query = "UPDATE user_info 
				  SET name='$name',password='$password',email='$email',dob='$dob',ph_num='$ph_num'
				  WHERE user_id = '$user_id'";
					

		$response = @mysqli_query($dbc, $query);


		if($response){
							 
			$_SESSION['status'] = "Data Inserted Successfully!!";
			echo '<p class="text-success">'.$status.'Data saved sucessfully</p>';
			header( 'Location:../myAccount.php');
		}
		else{
			echo '<p class="text-success">'.$status.'Error in saving data</p>';
		}
}
?>