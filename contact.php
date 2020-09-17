<?php include "header.php" ?>
<!-- start slider -->

<!-- end slider -->




 <!-- Start Content -->
    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8" style= "margin-left: -16px; margin-right: -19px;">

            <!-- Classic Heading -->
            <h4 class="contact-page"><span>Contact Us</span></h4>

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
              <li><i class="fa fa-globe">  </i> <strong>Address :way to putalisadak,
              near kumari hall (ktm) </strong> </li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email : sujan.oli98@gmail.com</strong> </li>
              <li><i class="fa fa-mobile"></i> <strong>Phone : 9864462577</strong> </li>
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




<!-- Start Footer Section -->
    <?php include("footer.php");
    ?>
    </div><!--end well-->




          









        
      
</body>

</html>



