<?php

?>

<html lang="en">
<head>
	<title>Login V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="images/admin/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<script src="lib/bootstrap/js/popper.js"></script>

	</head>
	<body>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userLoginModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="userLoginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign In/Sign Up to Upload</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#signin">Sign In</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#signup">Sign Up</a>
  </li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="signin"><form method="POST" action="user_signin_page.php">
  <div class="form-group">
    <label for="usigninemail">Email address:</label>
    <input type="email" class="form-control" id="usigninemail" name="signinemail">
  </div>
  <div class="form-group">
    <label for="usigninpwd">Password:</label>
    <input type="password" class="form-control" id="usigninpwd" name="signinpwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" id="usignin" class="btn btn-primary">Sign In</button>
 </form></div>
  <div class="tab-pane container fade" id="signup"><form action="/user_signup_page.php">
  <div class="form-group">
    <label for="usignupuname">User name:</label>
    <input type="text" class="form-control" id="usignupuname">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="usignupemail">
  </div>
  <div class="form-group">
    <label for="usignuppwd">Password:</label>
    <input type="password" class="form-control" id="usignuppwd">
  </div>
  <div class="form-group">
    <label for="confrmpwd">Confirm Password:</label>
    <input type="password" class="form-control" id="usignupconfrmpwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox">I agree to terms and policy
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form></div>
  
</div>
      </div>
     <div class="modal-footer">
      </div>

    </div>
  </div>
</div>
	</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</html>
	