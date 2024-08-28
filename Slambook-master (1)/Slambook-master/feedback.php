<?php include('header.php');?>
<div class="container">
	<h1 align = "center"> Please give us your valuable feedback</h1>

<form method="POST" action="#">
  <div class="form-group row">
    <label for="contactName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contactName" placeholder="Full Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="contactMessage" class="col-sm-2 col-form-label">Your message</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="contactMessage" placeholder="Message..">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12 btn-center">
      <input type="submit" name = "submit" class="btn btn-primary" value="Send">
    </div>
  </div>
</form>
</div>
<?php include('footer.php');?>
