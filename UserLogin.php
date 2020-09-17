
<?php include('RegistrationFormQuery.php');?>
<?php
if(isset($_SESSION['username']))
{
  header("Location: MainPage.php");

}
if (isset($_SESSION["error"])) {
  $error=$_SESSION["error"];
} else {
  $error=" ";
}
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap4/css/bootstrap.min.css">
  <title> </title>
</head>
<body>
   <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
  
</ul>
   

  
<div class="container pt-3">
  <div class="row justify-content-sm-center">
    <div class="col-md-6 col-md-4">

      <div class="card border-info text-center">
        <div class="card-header">
          Sign in to continue
        </div>
        <div class="card-body">
          <img src="image/website logo/smart.png" class="img-responsive" style="height:200px;">
          <h4 class="text-center">Smart Hostel</h4>
          <form method="POST" action="UserLogin.php" class="form-signin">
          <!--<form id="login-form" method="post" action="authen_login.php">-->
             <?php include('errors.php'); ?>
            <input type="text"  name="username" class="form-control mb-2" placeholder="Email" >
            <span style="color:red;"> <? echo $error;?></span>
            <input type="password" name="password" class="form-control mb-2" placeholder="password" required>
               <input type="submit" name="login_user" class="btn btn-primary" value="submit">
            <label class="checkbox float-left">
              <input type="checkbox" value="remember-me">
              Remember me
            </label>
            <a href="#" class="float-right">Need help?</a>
          </form>
        </div>
      </div>
      <a href="register.php" class="float-right">Create an account </a>
    </div>
  </div>
</div>




</body>
</html>















