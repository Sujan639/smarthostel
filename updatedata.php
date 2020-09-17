	<?php
		include('connection.php');
		$id=$_GET['id'];
		$qry=mysqli_query($con,"select * from hostel_info where id='$id'");
		$row=mysqli_fetch_object($qry);
						if(isset($_POST['submit']))
						{
	$id=$_REQUEST['id'];
	$HostelName=$_POST['HostelName'];
	$NormalPrice=$_POST['NormalPrice'];
	$HostelPrice=$_POST['HostelPrice'];
	$HostelType=$_POST['HostelType'];
	$HostelLocation=$_POST['HostelLocation'];
	$HostelDetails=$_POST['HostelDetails'];
	
	// var_dump($_FILES);
	$filetmp=$_FILES["Location"]["tmp_name"];
	// die();
	$filenam=pathinfo(basename($_FILES["Location"]["name"]));
	$filename=uniqid().'.'.$filenam['extension'];
	$Location="image/".$filename;
								while(file_exists($Location))
								{
								$filename=uniqid().'.'.$filenam['extension'];
								$Location="image/".$filename;

								} 
								if(empty($_FILES['Location']['name']))
								{
								$q=mysqli_query($con,"update hostel_info set HostelName='$HostelName',NormalPrice='$NormalPrice',HostelPrice='$HostelPrice',HostelType='$HostelType',HostelLocation='$HostelLocation',HostelDetails='$HostelDetails' where id='$id'");
								if($q)
								{
								header("location:cmsdesign.php");

								}

								}
								else
								{
								if($image_type='image/jpeg'|| $image_type='image/gif' || $image_type='image/png')
								{
								unlink($photo_path);
								$uploadfile=move_uploaded_file($_FILES["Location"]["tmp_name"], $Location);
								if($_FILES['location']['error'] == 0)
									$query=mysqli_query("update hostel_info set HostelName='$HostelName',NormalPrice='$NormalPrice',HostelPrice='$HostelPrice',HostelType='$HostelType',HostelLocation='$HostelLocation',HostelDetails='$HostelDetails' where id='$id'");
								else
									$query=mysqli_query("update hostel_info set HostelName='$HostelName',NormalPrice='$NormalPrice',HostelPrice='$HostelPrice',HostelType='$HostelType',HostelLocation='$HostelLocation',HostelDetails='$HostelDetails' where id='$id'");
								if($uploadfile && $query)
								{
								header("location:cmsdesign.php");

								}
								elseif(!$uploadfile)
								{
								echo"image not uploaded";
								}
								elseif(!$query)
								{
								echo"image not saved";
								}
								else
								{
								echo"invalid file type";
								}
								}
						}
					}
			?>
<html>
<head>
<style>
.well h3{
	color:#e3a5c7;
}
input[type="text"],select{
	height:30px;
	margin:8px;
}


</style>

 <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">

 <script type="text/javascript" href="css/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<link rel="stylesheet" href="cssdesign/cmsbutton.css" type="text/css">

</head>
<body>
	
	
				


	<div class="row">
		

<li><a href="index.php"><button class="button button2">Home</button></a></li>

<li><a href="cmsdesign.php"> <button class="button button3">GO Back</button></a></li>
		
		<form  method="POST"  enctype="multipart/form-data" >
		<div class="col-md-6 col-md-offset-2">
			<div style="background:color:white;" class="well">
			
			<div class="form-group">
			      <label for="Name">HostelName</label>
				<input type="text" class="form-control" name="HostelName" placeholder="Enter Hostel Name" value="<?=$row->HostelName?>" required="required" maxlength="255">
				</div>
				<div class="form-group">
			      <label for="Price">Normal Price</label>
				<input type="text" class="form-control" name="NormalPrice" placeholder="Enter Normal price" value="<?=$row->NormalPrice?>" required="required"  maxlength="255">
				</div>
				<div class="form-group">
			      <label for="Price">HostelPrice</label>
				<input type="text" class="form-control" name="HostelPrice" placeholder="Enter price" value="<?=$row->HostelPrice?>" required="required"  maxlength="255">
				</div>
				<div class="form-group">
			      <label for="Categories">HostelType</label>
				<input type="text" class="form-control" name="HostelType" placeholder="Categories" value="<?=$row->HostelType?>" required="required" maxlength="100">
				</div>
				<div class="form-group">
			      <label for="Display">HostelLocation</label>
				<input type="text" class="form-control" name="HostelLocation" placeholder="Display" value="<?=$row->HostelLocation?>" required="required" maxlength="255">
				</div>
				<div class="form-group">
			      <label for="Camera">HostelDetails</label>
				<input type="text" class="form-control" name="HostelDetails" placeholder="Camera" value="<?=$row->HostelDetails?>" required="required" maxlength="255">
				</div>
				

             <img src="<?php echo $row->Location ?>" class="img-responsive"> 
             <div class="form-group">
             <input data-buttonText="choose image" data-placeholder="upload image" accept=".jpg,.png,.bmp" type="file" name="location">
            </div>
            <input type="submit" class="button button1" name="submit" value="submit">


        </div>
			<!-- <button class="btn btn-primary">Submit</button> -->
				</form>
		</div>
	
		
</body>
</html>