<?php
include('loginquery.php');
if(isset($_SESSION['login_pass']))
{
	header("location: cmsdesign.php");

}
if (isset($_SESSION["error"])) {
	$error=$_SESSION["error"];
} else {
	$error=" ";
}
?>
<html>
<body>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="cssdesign/index.css" type="text/css" media="screen">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://fonts.googleapis.com/css?family=Roboto;"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="cssdesign/logindesign.css" type="text/css">
<link rel="stylesheet" href="cssdesign/login.css" type="text/css">
</head>
<body>

<div class="row">
<div class="col-md-6 col-md-offset-6">

<button class="button button1 "><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></button>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form method="POST" action="loginquery.php">
					<input type="text" name="username"  placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
					<span></span>
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
		  <h4 class="text-center"><span class="about-us">
		  <?=$msg; ?></span></h4>

<h2 class="text-center"> <?php echo ($error); ?></h2>
</div>
<!-- end col-md-6 -->
</div>
<!-- end row -->


		  </body>
		  </html>