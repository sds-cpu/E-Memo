<?php session_start();?>
<?php include('header.php');?>
<div class="container text-center">
<h1>Main Page</h1>
<hr>
<?php
  
if(isset($_SESSION['user_id'])){?>
<div class="new-request">
<h2>New Requests</h2>
<hr>
<?php

    // Get a connection for the database
    require_once('../mysqli_connect.php');
    $user_id = $_SESSION['user_id'];
    $query1 = "SELECT from_id from request_slam where to_id='$user_id' ORDER BY request_date desc";

    // Get a response from the database by sending the connection
    // and the query
    $response1 = @mysqli_query($dbc, $query1);

    if($response1){
      if(mysqli_num_rows($response1)!=0){
        while($row1 = mysqli_fetch_array($response1)){ 
        ?>     
          <img src="./images/profile-pic-<?php echo $row1['from_id']?>.jpg" alt="HTML Icon" style="width: 30%;">
          <a href="./newRequest.php" class="a-anchor">More..</a>
        <?php 
        }
      }
      else{
        echo "<p>No new requests..</p>";
      }
    } 
    else {
      echo "Couldn't issue database query<br />";
      echo mysqli_error($dbc);
    }
?>
<br>
</div>

<div class="text-center">
  <a href="#recent-received" class="a-anchor smoothScroll"><i class="fa fa-chevron-circle-down size-up" style="font-size: 3em;"></i></a>
</div>

<div class="checkslam-image parallax"></div>  

<div id="recent-received">
  <h2>Recently Received Slams</h2>
  <hr>
  <?php

    $query5 = "SELECT * from friend_slam where user_id='$user_id'";

    // Get a response from the database by sending the connection
    // and the query
    $response5 = @mysqli_query($dbc, $query5);
    $number=1;

    if($response5){
      while($row5 = mysqli_fetch_array($response5)){
        $src = "./images/profile-pic-".$row5['friend_id'].".jpg";
        $number++;
    ?>
      <div class="div-recent-slam">
        <img class="recent-slam-image" src="<?php echo $src?>" alt="HTML5 Icon" align = "center">
      </div>
             
    <?php
      }
    } 
    else {

    echo "Couldn't issue database query<br />";

    echo mysqli_error($dbc);

    }
?>
<a href="./receivedSlam.php" class="a-anchor">More..</a>
</div>

<div>
<a href="#recent-given" class="a-anchor smoothScroll"><i class="fa fa-chevron-circle-down size-up" style="font-size: 3em;"></i></a>
</div>

<div class="checkslam-image parallax"></div> 

<div id="recent-given">
  <h2>Recently Given Slams</h2>
  <hr>
  <?php
    // Get a connection for the database

    $query = "SELECT user_id from friend_slam where friend_id='$user_id' ORDER BY last_update_date desc";

    // Get a response from the database by sending the connection
    // and the query
    $response = @mysqli_query($dbc, $query);

    if($response){

      while($row = mysqli_fetch_array($response)){ 
      ?>     
        <img src="./images/profile-pic-<?php echo $row['user_id']?>.jpg" alt="HTML Icon" style="width: 30%;">
      <?php 
      }
    } 
    else {

    echo "Couldn't issue database query<br />";

    echo mysqli_error($dbc);

    }
   mysqli_close($dbc);
  
  ?>
  <a href="./givenSlam.php" class="a-anchor">More..</a>
</div>
<?php 
}
else{
    echo '<p class="text-info">Dont have an account yet? <a style="color:black" href = "userRegistration.php">Sign-up</a>';
    echo '<br>Already have an account yet? <a style="color:black" href = "home.php">Sign-in</a></p>';
  }// end if isset?>
</div>

<?php include('footer.php');?>