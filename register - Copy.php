<?php
   include_once("dbconnect.php");
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body background="parking.jpg">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <?php 
              if(isset($_SESSION['msg'])){
                 echo $_SESSION['msg'];
                 unset($_SESSION['msg']);
              }
            ?>
            <form class="form-signin" method="post" action="insert-reg.php">
              <div class="form-label-group">
                <label for="inputEmail">Enter your first name <font color="red">*</font></label>
                <br/>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter your first name" required autofocus>
                
              </div>

              <div class="form-label-group">
              	<label for="inputEmail">Enter your last name<font color="red">*</font></label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter your last name" required autofocus>
                
              </div>

              <div class="form-label-group">
              	<label for="inputPassword">Enter your Email Id<font color="red">*</font></label>
                <input type="text" id="inputPassword" class="form-control" placeholder="Enter your emailid" required>
                
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Enter your phn no<font color="red">*</font></label>
                <input type="phnno" id="inputPassword" class="form-control" placeholder="Enter your phoneno" required>
                
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Enter your address<font color="red">*</font></label>
                <textarea ="address" id="inputPassword" class="form-control" placeholder="Enter your address" required>
                </textarea>
                
              </div>
                <div class="form-label-group">
                <label for="inputPassword">Enter your password<font color="red">*</font></label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Enter your Password" required>
                
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Confirm password<font color="red">*</font></label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Re-enter Password" required>
                
              </div>
              <br>
              
              <input type="submit" name="" class="btn btn-lg btn-primary btn-block text-uppercase radius" value="create an account">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>