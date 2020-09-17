<a href="delete.php">delete</a><?php
include("connection.php")
?>
<?php 
include ('connection.php');

?>
<?php
$ID=$_REQUEST['id'];
$query1=("select * from hostel_info where id='$id'");
$result1=mysqli_query($query1);
/*while($data=mysql_fetch_array($result1))
{
	delete=$data["location"];
	unlink("$delete");

}*/
$query=("delete from hostel_info where id=$id");
$result=mysqli_query($query) or die("not inserted".mysqli_error());
if($result==TRUE)
{
	$output="your data has been succesfuuly deleted";
	echo$output;
	header("location:cmsdesign.php");

}
else{
	echo"error is deleting";

}
?>
