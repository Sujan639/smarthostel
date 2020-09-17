<?php include('RegistrationFormQuery.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap4/css/bootstrap.min.css">
  <script src="css/bootstrap4/js/bootstrap.min.js"></script>
  <title></title>
</head>
<body>
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="UserLogin.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
  
</ul>
   

   <div class="row">
    
    
<div class="col-md-12">
  
  
  <form method="POST" action="register.php">
    <?php include('errors.php'); ?>
    <div class="col-md-8 mx-auto"
    
  
    
    <label>UserName</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Your Name" value="<?php echo $username; ?>">
    
  
  
    <label>Email address</label>
    <input type="text" class="form-control" name="email"  placeholder="Enter email Address" value="<?php echo $email; ?>">


    <label>Password</label>
    <input type="text" class="form-control" name="password"  placeholder="Enter password">
    
    
   <label>ConfirmPassword</label>
    <input type="text" class="form-control" name="password_confirm"  placeholder="Enter password again">

    <div class="form-group">
  <label for="keyword" name="keyword">Leave short message and we will recommend suitable hostel according to your preference:</label>
  <textarea class="form-control" name="keyword"rows="5" id="keyword"></textarea>
</div>
    
     <div class="input-group">
      <button type="submit" class="btn" name="reg_user" value="reg_user">Register</button>
    </div>

    
    <p>
      Already a member? <a href="UserLogin.php">Sign in</a>
    </p>
  </div>
  </form>
</div>
</div>
</body>
</html>

