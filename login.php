<?php
require "includes/header.php"
?>
<main>
  <link rel="stylesheet" href="css/login.css">
  <br><br><br>
  <div class="col-md-4 login-form">
    <h3>Login</h3>
    <img src="images/login.webp" id="icon" alt="Login Icon" width="80" height="80"><br><br>
    <form action="includes/login-helper.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="uname" placeholder="Username/ Email" value="" />
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="pwd" placeholder="Password" value="" />
      </div>
      <br>
      <div class="form-group">
        <input type="submit" class="btnSubmit" name="login-submit" value="Login" />
      </div>
      <div class="form-group">
        <a href="#" class="ForgetPwd" value="Login">Forgot Password?</a>
      </div>
    </form>
  </div><br><br>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carousel1.jpg" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/carousel2.jpg" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/carousel3.jpg" alt="New York" width="1100" height="500">
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div><br><br>
</main>
