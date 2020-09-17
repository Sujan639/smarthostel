<?php
if(isset($_POST['send']))
{
	$id=@$_REQUEST['id'];
	$HostelName=$_POST['HostelName'];
	$NormalPrice=$_POST['NormalPrice'];
	
	$HostelPrice=$_POST['HostelPrice'];
	$HostelLocation=$_POST['HostelLocation'];
	$HostelType=$_POST['HostelType'];
	$HostelDetails=$_POST['HostelDetails'];
	
	
	$filetmp=$_FILES["Location"]["tmp_name"];
	$filenam=pathinfo(basename($_FILES["Location"]["name"]));
	$filename=uniqid().'.'.$filenam['extension'];
	$Location="image/".$filename;
	
	if(move_uploaded_file($_FILES["Location"]["tmp_name"],$Location))
	{

		include("connection.php");
		$qry="insert into hostel_info(HostelName,NormalPrice,HostelPrice,HostelLocation,HostelType,HostelDetails,Location)values('$HostelName','$NormalPrice','$HostelPrice','$HostelLocation','$HostelType','$HostelDetails','$Location')";
		$result=mysqli_query($con,$qry); 
		if($result==TRUE)
		{
			header("location:index.php");
		

		echo"succesfully  uploaded";
}
	}
}
?>
