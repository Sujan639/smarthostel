<?php


	include('connection.php');


	$result=mysqli_query($con,"SELECT * FROM hostel_info");

 ?>
 <html>
 <head>
 <style>
.list-group-item:hover{
background-color:#f2f2f2;

}



 </style>

 </head>






 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" href="cssdesign/cmsbutton.css" type="text/css">

</head>
<body>
<div class="container">




<div class="row">
	<div class="col-md-10">
		<table class="table table-hover">
			<thead>
				<th >HostelName</th>
				<th>HostelPrice</th>
				<th>Image</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
			while($row=mysqli_fetch_assoc($result)){
			echo '<tr>
					<td>'.$row['HostelName'].'</td>
					<td>Monthly Rs '.$row['HostelPrice'].'</td>
					<td><img src="'.$row['Location'].'" style="height: 74px;width: 83px;"></td>
					<td><a href="updatedata.php?id='.$row["id"].'" class="button button4">Update</a>
					<a href="deletedata.php?id='.$row["id"].'" onclick="return confirm(du u want to Delete ?)" class="button button5">Delete</a>
					
					</td>
				</tr>
				';
				
			}
			?>
			</tbody>
		</table>
	</div>
	<div class="aside">
	<div class="col-md-2">
	<div class="well">
<button class="button button3"><a href="logoutquery.php" onclick="return confirm('du u want to logout ?')">logout</a></button>
<a href="HostelForm.php" class="button button1">Add Item</a>
<a href="index.php" style=" margin-top:12px;"class="button button2">Home</a>


</ul>
	</div>

	</div>
	</div>
</div>
</div>

</body>

</html>

<!--  -->

