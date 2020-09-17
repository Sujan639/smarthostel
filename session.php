<?php include('connection.php');
?>
<?php
session_start();//storing session//starting session
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query("select username from admin_info where username='$user_check'",$con);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['username'];
if(!isset($login_session))
{
mysqli_close($con);//closing connection
header('location: cmsdesign.php');
}
?>