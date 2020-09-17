

<?php include "header.php" ?>
    <?php
include('connection.php');
if(!$con){
  die('couldnt connect'.mysqli_error());
}

$sql='select * from hostel_info where HostelType="male" ';
$retval=mysqli_query($con,$sql);
if(! $retval)
{
  die('couldnt connect'.mysqli_error());

}
?>
<html>
<body>


  <!-- <div class ="row">
        <div class="col-md-12">
          
            

          


        </div>



  </div>



<div class="row">
  <div class="col-md-12 col-md-offset-5">
<h4 class="Recommended Hostel"><span> Featured Hostel</span></h4>

  </div>
</div>
 -->



<div class="well">
 <div class="row">
                     <div class="col-md-12"  product-cards">

                        

                          <div id="divcontent">
                                 

  <div id="ItemsBody_pnlCategoryBrowse1">
  
    
    

    

    

    

    <div id="ItemsBody_pnlBestSellers" style="">
    
      
      <?php

$i=1;
while($row=mysqli_fetch_assoc($retval))
{
  echo'

      <div class="col-md-4">
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="singleview.php">
                  <img src="'.$row['Location'].'" class=""style="" />
                </a>
              </div>
              <div class="item-body">

                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="singleview.php">'.$row['HostelName'].'</a>
                </div>

                <div class="price-desc">
                Per Month '.$row['HostelPrice'].'
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    '.$row['NormalPrice'].'
                  </s>
                </div>
                <a href="singleview.php?id='.$row['id'].'"
                 class="button button1"  style="">view details</a>

                <div class="more-prod">
                <a href="order.php?id='.$row['id'].'"">
                <button class="button" style="vertical-align-middle">
      <span>Book Now </span></button></a>
                

                  </div>
                  </div>
                  </div>


                   </div>
                   <!--col-md-4 end-->
                  ';
                  $i++;
                }
                ?>

                  
                  </div><!--ItemsBody_pnlBestSellers-->                 
</div><!--ItemsBody_pnlCategoryBrowse1-->
                </div><!--div content end-->

              </div><!--end sm-12-->



            </div><!--end row-->



        







          <!--Start Girls Hostel-->


 <div class="row">
                     <div class="col-md-12"  product-cards">

                        

                          <div id="divcontent">
                                 
 
  <div id="ItemsBody_pnlCategoryBrowse1">
  
    
    

    

    

    

    <div id="ItemsBody_pnlBestSellers" style="clear:both; margin-top:5px;">
    
      <p class="title">
        <span style="font-family:'open sans',sans-serif;"id="ItemsBody_lblBestSellers">Girls Hostel</span>
        <a href=">See All</a>
      </p>
      <?php
include('connection.php');
if(!$con){
  die('couldnt connect'.mysqli_error());
}
$sql='select * from hostel_info where HostelType="female" limit 10';
$retval=mysqli_query($con,$sql);
if(! $retval)
{
  die('couldnt connect'.mysqli_error());

}

$i=1;
while($row=mysqli_fetch_assoc($retval))
{
  echo'

      <div class="col-md-4">
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="singleview.php">
                  <img src="'.$row['Location'].'" class=""style="" />
                </a>
              </div>
              <div class="item-body">

                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="singleview.php">'.$row['HostelName'].'
                </div>

                <div class="price-desc">
                Per Month Rs. '.$row['HostelPrice'].'
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                  '.$row['NormalPrice'].'
                  </s>
                </div>
                <a href="singleview.php?id='.$row['id'].'" class="button button1" style="">View Details</a>

                <div class="more-prod">
                  <a href="order.php?id='.$row['id'].'" class="button" style="">
      <span>Book Now</span></button></a>
                  </a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-md-4 end-->
                  ';
                  $i++;
                }
                mysqli_close($con);
                ?>

                  
                  </div><!--ItemsBody_pnlBestSellers-->                 
</div><!--ItemsBody_pnlCategoryBrowse1-->
                </div><!--div content end-->

              </div><!--end sm-12-->



            </div><!--end row-->



          
          
        
          
                








<!-- Start Footer Section -->
<?php
include("footer.php");
?>
    


</div>
<!-- end well -->








          









        
      
</body>

</html>



