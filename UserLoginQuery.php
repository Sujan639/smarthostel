<?php
include("connection.php");
?>
<?php
session_start();

if(isset($_POST['submit']))
{
	if(empty($_POST['Name']) && empty($_POST['Password']))
	{
	$error="Name and password must be filled";

	}
	else
	{
	$Name=$_POST['Name'];
	$Password=$_POST['Password'];
	$Name=stripslashes($Name);
	$Password=stripslashes($Password);
	
	$qry="select Name, Password from registrationform where Name='$Name' and  password='$Password'";



	$rows=mysqli_num_rows($qry);

	if($rows==1)
	{

	$_SESSION['Name']=$Name;
	

    
	header("Location:MainPage.php");
	
 

}
else{
$error="Name or password is invalid";
$_SESSION["error"]=$error;
header("Location:UserLogin.php");

}
mysqli_close($con);
	
}

}
?>