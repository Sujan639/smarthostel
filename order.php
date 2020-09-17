<?php
include("header.php");
?>
<?php
include('connection.php');
if(!$con){
  die('couldnt connect'.mysql_error());
}
$id=$_GET["id"];
$sql="select * from smartphone_details where id='$id'";
$retval=mysql_query($sql,$con);
if(! $retval)
{
  die('couldnt connect'.mysql_error());

}
?>
<?php
include('connection.php');

$nischal_himal=mysql_query("select * from smartphone_details where id='$id'");
$row=mysql_fetch_array($nischal_himal);

?>

<div class="col-md-8">
<div class="description"> 
<h4 class="about-us"><span>Feature</span></h4>

 <p> <?=$row['description']?></p>

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
                  <img src="'.$row['location'].'" class="img-responsive"style="" />
                </a>
              </div>
              <div class="item-body">

                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">'.$row['mobile_name'].'</a>
                </div>

                <div class="price-desc">
                RS '.$row['price'].'
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



                
                <h4 class="about-us"> <span>phone specification</span></h4> 

                <table class="table table-bordered" style="border:2px solid #e74c3c;">
                <thead>
                <tr>
                <th> mobile name</th>
                <th>camera </th>
                <th>memory</th>
                <th>processor</th>
                <th>battery</th>
                <th>display</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                
               
                  echo'
                  <tr>
                  <td>'.$row['mobile_name'].'</td>
                  <td>'.$row['camera'].'</td>
                  <td>'.$row['memory'].'</td>
                  <td>'.$row['processor'].'</td>
                  <td>'.$row['battery'].'</td>
                  <td>'.$row['display'].'</td>
                  </tr>
                  ';
                
                   mysql_close($con);
                  ?>
                
                </tbody>
                </table>
                <!-- end close table -->
                
                <!-- end close tableko row -->

<div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8" style= "margin-left: -16px; margin-right: -19px;">

            <!-- Classic Heading -->
            <h4 class="contact-page"><span>fill the form for online order</span></h4>

            <!-- Start Contact Form -->
            
            <form  action="" method="POST" id="contactForm" data-toggle="" class="">
              <div class="form-group form-responsive">
                <div class="controls">
                  <input type="text" id="name" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" id="email" placeholder="Email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="subject" placeholder="Subject" required data-error="Please enter your message subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea id="message" rows="7" placeholder="Message" required data-error="Write your message"></textarea>
                  <div class="help-block with-errors"></div>
                </div>  
              </div>

              <button type="submit" style="margin-bottom:13px;"class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
              <div id="msgSubmit" class="h3 text-center hidden"></div> 
              <div class="clearfix"></div>   

            </form>     
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="contact"><span>Information</span></h4>

            <!-- Some Info -->
            <p>Get in touch with Us</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Address :way to ambition college new baneshwor,
              near whitehouse college(ktm) </strong> </li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email : sureshkharel456@gmail.com</strong> </li>
              <li><i class="fa fa-mobile"></i> <strong>Phone : 9862218494</strong> </li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="contact"><span>opening Hours</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Sunday - Friday</strong> - 11am to 8pm</li>
              <li><strong>Saturday</strong> - 6am to 6pm</li>

            </ul>

          </div>

        </div>

      </div>
    </div>
    <!-- End content -->


<?php
include("footer.php");
?>