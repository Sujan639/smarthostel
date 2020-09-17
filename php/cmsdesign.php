<?php


	include('connection.php');

	$result=mysql_query("SELECT * FROM smartphone_details");

 ?>
 <html>
 <head>
 

 






 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">




<div class="row">
	<div class="col-md-10">
		<table class="table table-hover">
			<thead>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
			while($row=mysql_fetch_array($result)){
			echo '<tr>
					<td>'.$row['mobile_name'].'</td>
					<td>Rs '.$row['price'].'</td>
					<td><img src="'.$row['location'].'" style="height: 74px;width: 83px;"></td>
					<td><a href="updatedata.php?ID='.$row["ID"].'" class="btn btn-default">Update</a>
					<a href="deletedata.php?ID='.$row["ID"].'" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				';
				
			}
			?>
			</tbody>
		</table>
	</div>
	<div class="aside">
	<div class="col-sm-2">
	<div class="well">

<a href="mobileform.php" class="btn btn-primary">Add new Item</a>
<a href="index.php" style="width:117px; margin-top:12px;"class="btn btn-success">Home</a>


</ul>
	</div>

	</div>
	</div>
</div>
</div>

</body>

</html>

<!--  -->

