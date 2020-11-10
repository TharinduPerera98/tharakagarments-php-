<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Page</title>
<link rel="icon" href="./images/unlock-alt-solid.svg" />
<!-- Bootstrap -->
<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
<link href="css/Login_page.css" rel="stylesheet" type="text/css">
<link href="fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet" type="text/css">
    <?php
    session_start();
    if ( !empty( $_SESSION['Username'] ) ) {
    	header( "Location: ./Inside/L_home.php" );
    }
    ?>
</head>
<body>
<form action="./Cord/login.php" method="post">
  <div class="container form1">
    <div class="row">
      <div class="col-12 text-center">
        <center>
            <img style="height: 6rem;" src="images/TC-Logo.png">
        </center>
        <hr>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-12">
          <label class="exampleInputUsername">
          <h5>Username</h5>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="text" name="Username" class="form-control" placeholder="Email or Username" value="<?php
					if(!empty( $_SESSION['login'] )):
					$FirstName= $_SESSION['login'];
					echo $FirstName;
					endif;
                    unset( $_SESSION[ 'login' ] );              
					?>" required>
          <i class="icoa fas fa-user"></i> </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-12">
          <label class="exampleInputPassword">
          <h5>Password</h5>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="password"  name="Password" class="form-control" placeholder="Password" required>
          <i class="icoa fas fa-lock"></i>
            <small>
            <?php
            if ( isset( $_GET[ 'Login' ] ) ) {
                echo "<font size=\"4rem\" color=red>Error : Incorrect Username or Password</font>";
            }
            ?>
            </small>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-12"> <button type="submit" class="btn-outline-light btn-lg btn-block"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp; Login</button> </div>
      </div>
        <small>
            Forgot your password : <a class="account" href="mailto:98rperera@gmail.com?Subject=Requesting for password reset" target="_top">contact us</a> 
        </small>
    </div>
  </div>
</form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="static/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="static/js/popper.min.js"></script>
<script src="static/js/bootstrap-4.0.0.js"></script>
</body>
</html>