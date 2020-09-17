<?php
include("connection.php")
?>
<?php
session_start();
if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
$error='';
if(isset($_POST['login']))
{
	if(empty($_POST['username']) || empty($_POST['password']))
	{
	$error="username or password must be filled";

	}
	else
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$username=stripslashes($username);
	$password=stripslashes($password);
	$username=mysqli_real_escape_string($username);
	$password=mysqli_real_escape_string($password);
	$qry=mysqli_query($con,"select *from admin_info where username='$username' AND password='$password'");
	$qry1=mysqli_query($con,$qry);
	$rows=mysqli_num_rows($qry1);
	if($rows==0)
	{
	$_SESSION['login_user']=$username;
	$_SESSION['login_pass']=$password;
    $_COOKIES['login_user']=$username;
	header("location:cmsdesign.php");

}
else{
$error="username or password is invalid";
$_SESSION["error"]=$error;
header("location:login.php");
}
mysqli_close($con);
	
}

}
?>