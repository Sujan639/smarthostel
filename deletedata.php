<?php
include("connection.php");

$id=$_REQUEST['id'];
$qry="select *from hostel_info where id=$id";
$qry1=mysqli_query($con,$qry);
$qry2="delete from hostel_info where id=$id";
$qry3=mysqli_query($con,$qry2);
if($qry3==TRUE)
{
	header("location:cmsdesign.php");
}
else
{
	echo"deleting";
}
?>