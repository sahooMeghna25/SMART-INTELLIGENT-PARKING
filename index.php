<?php include_once('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body background="parking.jpg" >
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body mt-4 mb-4">
            <h5 class="card-title text-center">Sign In</h5>
            <?php 
              if(isset($_SESSION['msg'])){
                 echo $_SESSION['msg'];
                 unset($_SESSION['msg']);
              }
            ?>
            <form class="form-signin" method="post" action="action/logincheck.php">
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" name="emailid" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
             
              <input type="submit" name="btnLogin" value="Sign in" class="btn btn-lg btn-primary btn-block text-uppercase radius">
              <hr class="my-4">
              <a href="register.php" class="btn btn-lg btn-google btn-block text-uppercase radius" style="color: #fff">Register</a>
            </form>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>