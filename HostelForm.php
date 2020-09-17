<html>
<head>
	<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
	</head>
	<body>
		<!-- <div>

<form method="POST"action="HostelFormQuery.php" enctype="multipart/form-data">
<label>Hostel Name</label><br>
<input type="text" name="HostelName" placeholder="Name of your Hostel ">
<label>Normal Price</label><br>
<input type="text" name="NormalPrice" placeholder="Enter Normal Price">
<label>Hostel Price</label><br>
<input type="text" name="HostelPrice" placeholder="Enter Discount Price">

<label>Hostel Location</label><br>
<input type="text" name="HostelLocation" placeholder="location">

<label>Hostel Type</label><br>
<input type="text" name="HostelType" placeholder="hostel type">


<textarea id="comment" name="HostelDetails" placeholder="description"></textarea>
<input type="file" accept=".jpg,.png" value="'.$file.'" name="Location">
<input type="submit" name="send">
</form>
</div>
 -->
<div class="row">

<div class="col-md-6 col-md-offset-2">
	<div style="background-color:white;" class="well">
<form method="POST" action="HostelFormQuery.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Hostel Name</label>
    <input type="Hostel Name" class="form-control" name="HostelName" placeholder="Enter your Hostel Name">
    
  </div>
  <div class="form-group">
    <label>Normal Price</label>
    <input type="NormalPrice" class="form-control" name="NormalPrice" placeholder="Enter Normal price">
    
  </div>
  <div class="form-group">
    <label>Hostel Price</label>
    <input type="Hostel Name" class="form-control" name="HostelPrice" placeholder="Enter Discount price">
    
  </div>
  <div class="form-group">
    <label>Hostel Location</label>
    <input type="Hostel Location" class="form-control" name="HostelLocation" placeholder="Enter your Hostel Location">
    
  </div>
  <div class="form-group">
    <label>Hostel Type</label>
    <input type="Hostel type" class="form-control" name="HostelType" placeholder="Type of gender">
    
  </div>
  <div class="form-group">
    <label>Write short Description about your Hostel</label>
    <textarea id="comment" class="form-control" name="HostelDetails" placeholder="write short description">
    </textarea>
    
  </div>
  <input type="file" accept=".jpg,.png" value="'.$file.'" name="Location">

  <input type="submit" name="send" class="btn btn-primary">
  <button class="btn btn-default"><a href="cmsdesign.php"> Go Back</a></button>
 <a href="index.php"> <button type="button" class="btn btn-primary">Home</button></a>

</form>
</div>	
</div>
</div>




</body>

</html>
