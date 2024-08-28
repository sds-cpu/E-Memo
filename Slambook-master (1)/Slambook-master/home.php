<?php include('header.php') ?>

<div class="container text-center">
<h1>Welcome to Slambook. Join Now it's free!!!!</h1>
<form class="form-horizontal form-padding" action="./source/userValidation.php" method="post">
  <div class="form-group row">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group row"> 
    <div class="col-sm-offset-2 col-sm-12">
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group row"> 
    <div class="col-sm-offset-2 col-sm-12 btn-center">
      <input type="submit" name="sign_in" value="Sign In"  class="btn btn-primary">
    </div>
  </div>
</form>
<div class="col-sm-12">
  <p class="text-info">Don't have an account yet? <a style="color:black" href = "userRegistration.php">Sign-up</a> here</p>
</div>
</div>
<?php include('footer.php');?>

