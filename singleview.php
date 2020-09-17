<?php 
session_start();

include("header.php"); 
include('connection.php');
if(!$con){
  die('couldnt connect'.mysqli_error());
}
$id=$_GET['id'];
$sql=("select * from hostel_info where id='$id'");
$retval=mysqli_query($con,$sql);
if(! $retval)
{
  die('couldnt connect'.mysqli_error());

}
// $other_hostel_query="select * from hostel_info where Location"
$username=$_SESSION['username'];
$user_id=$_SESSION["user_id"];

$qry=mysqli_query($con,"select * from hostel_info where id='$id'");
$row=mysqli_fetch_assoc($qry);

$hostel_id=$_GET['id'];

$insert_query="INSERT INTO `hostel`.`session` (`user_id`, `hostel_id`) VALUES ($user_id, $hostel_id)";


if(!mysqli_query($con,$insert_query)){
  echo mysqli_error($con);
}
?>





<div class="col-md-8">
<div class="description"> 
<h4 class="about-us"><span>Feature</span></h4>

 <p> <?=$row['HostelDetails']?></p>

</div>  
<!-- decription close -->
</div>
<!-- end close of col-md-8 -->

<div class="col-md-4">

<div id="divcontent">
<div id="ItemsBody_pnlCategoryBrowse1">
<div id="ItemsBody_pnlBestSellers" style="clear:both; margin-top:5px;">
<?php 


echo'

      <div class="col-sm-4">
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="'.$row['Location'].'" class="img-responsive"style="" />
                </a>
              </div>
              <div class="item-body">

                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">'.$row['HostelName'].'</a>
                </div>

                <div class="price-desc">
                RS '.$row['HostelPrice'].'
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <button class="button button1"  style="height:38px;"><span>view details</span>

                <div class="more-prod">
                <a href="#">
                  <button class="button"style="vertical-align-middle">
      <span>Buy Now</span></button></a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->
                  ';
                  
                
             
                ?>

                </div>
                <!-- for end tag ItemsBody_pnlBestSellers -->
                </div>
                <!-- end tag for ItemsBody_pnlCategoryBrowse1 -->
                </div>
                <!--  end divcontent -->
                </div>
                <!-- end col-md-3 col-md-offset-1 -->
                
                <!-- row end -->



                
                <h4 class="about-us"> <span>Hostel Details</span></h4>

                <table class="table table-bordered">
                <thead>
                <tr>
                <th> HostelName</th>
                <th>HostelType </th>
                <th>HostelPrice</th>
                <th>HostelLocation</th>
                <th>HostelDetails</th>
                <th>Image</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                
               
                  echo'
                  <tr>
                  <td>'.$row['HostelName'].'</td>
                  <td>'.$row['HostelType'].'</td>
                  <td>'.$row['HostelPrice'].'</td>
                  <td>'.$row['HostelLocation'].'</td>
                  <td>'.$row['HostelDetails'].'</td>
                  <td></td>
                  </tr>
                  ';
                
                   mysqli_close($con);
                  ?>
                
                </tbody>
                </table>
                <!-- end close table -->
                
                <!-- end close tableko row -->

                <?php 
                include("footer.php");
                ?>

                