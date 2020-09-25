<?php
require "includes/header.php"
?>

<main>
  <link rel="stylesheet" href="css/signup.css">
  <br>
  <div class="col-md-4 signup-form">
    <h3>Register</h3>
    <h6>Create your account.</h6><br>
    <form action="includes/signup-helper.php" method="post">
      <div class="form-group">
        <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name *" value="" required />
        <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name *" value="" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="uname" placeholder="username *" value="" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" required />
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="pwd" placeholder="Your Password *" value="" required />
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="con-pwd" placeholder="Confirm Password *" value="" required />
      </div>
      <br>
      <div class="form-group">
        <input type="submit" name="signup-submit" class="btnSubmit" value="Register" />
      </div>
      <div class="form-group forget-text">
        Already have an account? <a href="login.php" class="ForgetPwd">Login</a>
      </div>
    </form>
  </div>
</main>
