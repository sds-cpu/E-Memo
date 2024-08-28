<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Cinzel|Satisfy|Sanchez" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./style/main-style.css">
<link rel="stylesheet" type="text/css" href="./style/animations.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
<header>
<!--<img src="./images/slambook.jpg" alt="HTML5 Icon" class="cover-image">-->
<title>Virtual Slam Book</title>
<div class="cover-image parallax">

  <!--logo-->
  <div>
    <a href="#" style="a-anchor"><img src="./images/logo.png" style="position: absolute; top:7%;left:2%;width: 150px;"></a>
  </div>

  <!--
    slide show to be shown only to guests
  -->
<?php
  if(!isset($_SESSION['user_id'])){?>
<div class="slideshow-container">

  <div class="mySlides fade">
    <img src="./images/received-slam.jpg" class="slideshow-image">
    <div class="text">Check out received slams from your friends</div>
  </div>
  <div class="mySlides fade">
    <img src="./images/given-slam.jpg" class="slideshow-image">
    <div class="text">Check out the slams that you gave</div>
  </div>
  <div class="mySlides fade">
    <img src="./images/my-friends.jpg" class="slideshow-image">
    <div class="text">Find your friends</div>
  </div>

  <div class="mySlides fade">
    <img src="./images/custom-question.jpg" class="slideshow-image">
    <div class="text">Customize your slambook questions</div>
  </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>

</div>
<?php
  }
  ?>
  <?php
  if(isset($_SESSION['user_id'])){?>
  <a href="javascript:void(0)" class="a-anchor display-topright" onclick="openMenu()">
    <div onclick="closeX(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    </div>
  </a>
  <?php
  }
  ?>

  <a href="#navbarNav" class="a-anchor smoothScroll" id="btm-arrow"><i class="fa fa-chevron-circle-down display-bottommiddle" style="font-size: 3em;"></i></a>

  <div class="hide" id="openMenu">
    <a href="javascript:void(0)" class="a-anchor bubble" id="position1" onclick="openSIModal()"><span class="home-span font-style">Send <br>Invite</span></a>
    <a href="javascript:void(0)" class="a-anchor bubble" id="position2" onclick="openAcctModal()"><span class="account-span font-style"><i class="fa fa-edit"></i><br>Account</span></a>
    <a href="javascript:void(0)" class="a-anchor bubble" id="position3" onclick="openSlamModal()"><span  class="slam-span font-style"><i class="fa fa-edit"></i><br>Slam</span></a>
  </div>
</div>
<nav class="navbar navbar-expand-lg dark-grey">
  
  <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 17px;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link a-anchor" href="main.php">Main <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a-anchor" href="myFriend.php">My Friends</a>
      </li>
       <li class="nav-item">
        <a class="nav-link a-anchor" href="newRequest.php">Received Requests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a-anchor" href="receivedSlam.php">Received Slam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a-anchor" href="givenSlam.php">Given Slam</a>
      </li>
      <li class="nav-item">
        <form action="./searchPeople.php" method="post">
          <input type="text" name="searchPeople" id="searchPeople" placeholder="Search People" style="display: inline-block;width: 340px;">
          <input type="submit" name="searchSubmit" value="GO" class="nav-link btn btn-primary" style="size:0.8em;display: inline-block;">
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link a-anchor" href="myAccount.php">My Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a-anchor" href="home.php"><i class="fa fa-sign-in" style="font-size:24px;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a-anchor" href="logout.php"><i class="fa fa-sign-out" style="font-size:24px;"></i></a>
      </li>
    </ul>
  </div>
</nav>

<!--modal container-->
<div id="SI-modal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close-modal" onclick="closeSIModal()">&times;</span>
    <p>Send an invite to your friend today to fill your slambook</p>
      <form action="./source/SIMail.php" onsubmit="" method="post">
        <div class="form-group row">
          <label for="SI-name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="SI-name" name="SI-name">
          </div>
        </div>
        <div class="form-group row">
          <label for="SI-email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="SI-email" name="SI-email">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
        <input type="submit" name = "submit" value="Send" class="btn btn-primary">
        </div>
        </div>
      </form>
  </div>
</div>

<div id="account-modal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close-modal" onclick="closeAcctModal()">&times;</span>
    <p>Edit Account</p>
      <form action="./source/accountSave.php" onsubmit="" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="profile-pic-upload" class="col-sm-2 col-form-label">Upload a display picture*</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="profile-pic-upload" id="profile-pic-upload">
          </div>
        </div>
        <div class="form-group row">
          <label for="edit-account-name" class="col-sm-2 col-form-label">Name*</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="edit-account-name" name="edit-account-name" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="edit-account-email" class="col-sm-2 col-form-label">Email*</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="edit-account-email" name="edit-account-email" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="edit-account-password" class="col-sm-2 col-form-label">Password**</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="edit-account-password" name="edit-account-password" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="edit-account-dob" class="col-sm-2 col-form-label">Birthday*</label>
          <div class="col-sm-10">
            <input type="calendar" class="form-control" placeholder="yyyy-mm-dd" id="edit-account-dob" name="edit-account-dob" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="edit-account-phone-num" class="col-sm-2 col-form-label">Phone Number*</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="edit-account-phone-num" name="edit-account-phone-num" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
        <input type="submit" name = "submit" value="Save" class="btn btn-primary">
        </div>
        </div>
      </form>
  </div>
</div>

<div id="slam-modal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close-modal" onclick="closeSlamModal()">&times;</span>
    <p>You can add upto 5 custom questions that you want to include in your slambook to ask your friends. Enter all the questions only the first time.</p>
      <form action="./source/questionSave.php" onsubmit="" method="post">
        <div class="form-group row">
          <div class="col-sm-12">
            <input type="text" class="form-control" placeholder="Enter Question1 Here" name="question1">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <input type="text" class="form-control" placeholder="Enter Question2 Here" name="question2">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <input type="text" class="form-control" placeholder="Enter Question3 Here" name="question3">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <input type="text" class="form-control" placeholder="Enter Question4 Here" name="question4">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <input type="text" class="form-control" placeholder="Enter Question5 Here" name="question5">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
        <input type="submit" name = "submit" value="Save" class="btn btn-primary btn-center">
        </div>
        </div>
      </form>
  </div>
</div>

</div>
</header>