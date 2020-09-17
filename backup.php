
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  
  background-image:url("");
}



.navbar-brand img {
  opacity:0.5;
}
.navbar-brand img:hover{
  opacity:10;
}



.navbar-default .navbar-nav > li > a.active, .navbar-default .navbar-nav > li:hover > a {
  border-bottom: 3px solid;
  color:00bfff;

}



.navbar-collapse .navbar-nav  li:hover{
  transform: scale(2) rotate(360deg);
  -webkit-transform: scale(2) rotate(360deg);

  
padding:;
background-color:#f2f2f2;
}
.form-group .btn-primary
{
  color: #ffffff;
    cursor: pointer;
    font-weight: 400;
    font-size: 13px;
    line-height: 2px;
    margin-left: 10px;
    text-align: center;
    padding: 17px 30px;
    white-space: nowrap;
    letter-spacing: 1px;
    background: #00bfff;
    display: inline-block;
    text-decoration: none;
    text-transform: uppercase;
    border: none;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
}
.contact-details > li > a{
  color:green;
  line-height:33px;
  font-size:12px;
  margin-left:-36px;
}

.navbar-header .navbar-brand{
  font-family: 'Open Sans', sans-serif;
    font-size: 20px;
}
.navbar{
  background-color:#fff;}
  .contact-details li  {
    float:left;
  }

 .navbar-nav li a {
font-family: 'Open Sans', sans-serif;
color:green;
    font-size: 20px;}

.navbar-collapse li {

    float: left;
    border-right:1px solid #bbb;
    display:inline-block;
     transition: 1s;
  color: #ffffff;
  font-size: ;
  text-decoration: none;
  
  


}
.navbar-collapse{
    -webkit-animation: mymove 5s infinite; 
    animation: mymove 5s infinite;
}


@-webkit-keyframes mymove {
    50% {text-shadow: 10px 20px 30px blue;}



@keyframes mymove {
    50% {text-shadow: 10px 20px 30px blue;}
}


</style>
<style>
ul.social-network {
  list-style: none;
  display: inline;
  margin-left:0 !important;
  padding: 0;
}
ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */
.social-network a.icoRss:hover {
  background-color: #F56505;
}
.social-network a.icoFacebook:hover {
  background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
  background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
  background-color:#BD3518;
}
.social-network a.icoVimeo:hover {
  background-color:#0590B8;
}
.social-network a.icoLinkedin:hover {
  background-color:#007bb7;
}
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
  color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
  color:#44BCDD;
}

.social-circle li a {
   float: right;
    border-right:1px solid #bbb;
    background-color:;
  display:inline-block;
  position:relative;
  margin:0 auto 0 auto;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
  border-radius:50%;
  text-align:center;
  width: 50px;
height:
  font-size:20px;
}
.social-circle li i {
  margin:0;
  
  text-align: center;
}
.social-circle li{
  float:right;
  border-right:1px solid #bbb;
  line-height:50px;
  background-color:#D3D3D3;
}

.social-circle li a:hover i, .triggeredHover {
  transform: scale(1.15) rotate(360deg);
  -webkit-transform: scale(1.1) rotate(360deg);
  -moz-transform: scale(1.1) rotate(360deg);
  -ms-transform: scale(1.1) rotate(360deg);
  -o-transform: scale(1.1) rotate(360deg);

}
.social-circle i {
  color: #fff;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

a {
 background-color:#D3D3D3;   
}

</style>
<style>
.fade-carousel {
    position: relative;
    height: 75vh;
}
.fade-carousel .carousel-inner .item {
    height: 75vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.mobile {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.mobile h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}
.slide2 .mobile h1 {
  font-size:1em;
}

.fade-carousel .carousel-inner .item .mobile {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .mobile {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .100;
}

/********************************/
/*          Custom Buttons      */
/*****      fv***************************/
.mobile > a.btn-default{
    color: #000;
    font-weight: 400;
    font-size: 13px;
    line-height: 15px;
    margin-right: 10px;
    text-align: center;
    padding: 17px 30px;
    white-space: nowrap;
    letter-spacing: 1px;
    display: inline-block;
    border: none;
    text-transform: uppercase;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;

}
.mobile > a.btn-primary{
    color: #ffffff;
    cursor: pointer;
    font-weight: 400;
    font-size: 13px;
    line-height: 15px;
    margin-left: 10px;
  text-align: center;
    padding: 17px 30px;
    white-space: nowrap;
    letter-spacing: 1px;
    background: #00bfff;
    display: inline-block;
    text-decoration: none;
    text-transform: uppercase;
    border: none;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
}
.mobile > a:hover,
.mobile > a:active {
    color: #ffffff;
    background: #222222;
    -webkit-transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
    transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
}




/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url("image/slide photo/A.jpg");
 
}
.fade-carousel .slides .slide-2 {
  background-image: url("image/slide photo/images7.png");
  
}
.fade-carousel .slides .slide-3 {
  background-image: url("image/slide photo/images4.png");
  
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .mobile { width: 980px; }    
}
@media screen and (max-width: 640px){
    .mobile h1 { font-size: 4em ; }    
}

</style>
<style>
@media (max-width: 600px)

.ItemsB>div {
    min-height: 270px;
    max-height: 270px;
}
 div.ItemsB:nth-child(odd){padding-left: 5px;}
    .prod-img-wrap a{height: 130px;}
    .prod-img-wrap a img {max-height: 130px;}
.HighlightedItemsTitle {
    font-size: 25px;
    color: #4d4d4d;
    margin-top: 30px;
    text-align: left;   
    padding: 20px 0 10px 0px;
    margin: 10px 10px;
}
@media  (max-width: 992px)

div.ItemsB {
    width: 50%;

}
.ItemsB>div {
    
    border: 1px solid:#e0e0e0; ;
    
    border-radius:2px;
    padding: 0px;
    box-shadow: 0px 0px 1px 0px #e2dede;
    transition: all ease 0.6s;
    -webkit-transition: all ease 0.6s;
    -moz-transition: all ease 0.6s;
    -o-transition: all ease 0.6s;
    -ms-transition: all ease 0.6s;
    background: #fff;
}

div {
    margin: 0;
}

div {
    display: block;
}

div.ItemsB {
    float: left;
    text-align: center;
    width: 33.33%;
    box-sizing: border-box;
    padding: 10px;
    margin: 0;
    border: none!important;
  }
    .prod-img-wrap{display: table;width: 100%;text-align: center;}
    @media (max-width: 600px)
.prod-img-wrap a {
    height: 130px;
    display:table-cell;
    vertical-align:middle;
}
.prod-img-wrap a img{
  max-height:300px;
  max-width:270px;
}

div.ItemsB>div{transition:all ease 0.6s;-webkit-transition:all ease 0.6s;-moz-transition:all ease 0.6s;-o-transition:all ease 0.6s;-ms-transition:all ease 0.6s;}
div.ItemsB>div:hover{box-shadow:0px 1px 1px 0px #ccc;transform:translateY(-2px);-webkit-transform:translateY(-2px);-moz-transform:translateY(-2px);-o-transform:translateY(-2px);-ms-transform:translateY(-2px);}


a.ItemsBrowse_Title, a.ItemsBrowse_Title:hover {
    font-size: 14px;
    color: #272730;
    text-decoration: none;
    line-height: 1.2;
    display: inline-block;
    margin: 15px 0 5px 0;
    height: 38px;
    overflow: hidden;
}
.price-desc{font-size:18px;color: #414141;margin-bottom: 10px;}
.price-desc s{font-size: 14px;}
p.ItemsBrowse_Title { margin-top:2px;height:30px;overflow:hidden; }



</style>
<style>
footer {
  background-color: #222;
    padding-top: 60px;
  border-top: 4px solid #555;
  color: #ccc;
}

footer p {
  color: #ccc;
}

footer a {
  color: #666;
}

footer a:hover {
  color: #666;
  text-decoration: underline;
}

.footer-widget {
    margin-bottom: 45px;
}

.footer-widget h4 {
  color: #eee;
  text-transform: uppercase;
  padding-bottom: 8px;
  margin-bottom: 20px;
  font-size: 14px;
  font-weight: 700;
  position: relative;
}

.footer-widget h4 .head-line {
  position: absolute;
  bottom: 0;
  left: 0;
  display: block;
  width: 50px;
  height: 3px;
  background-color:#2fd5b4;
  margin: 0;
}

.social-widget ul.social-icons li {
  display: inline-block;
  margin-right: 4px;
  margin-bottom: 4px;

}

.social-widget ul.social-icons li a i {
  font-size: 1.4em;
  width: 36px;
  height: 36px;
  color: #fff;
  line-height: 36px;
  text-align: center;
  display: block;
  border-radius: 2px;
  -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
  transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    }
.social-widget ul.social-icons li :hover {
  text-decoration: none;
  transform: scale(1.15) rotate(360deg);
  -webkit-transform: scale(1.1) rotate(360deg);
  -moz-transform: scale(1.1) rotate(360deg);
  -ms-transform: scale(1.1) rotate(360deg);
  -o-transform: scale(1.1) rotate(360deg);
}

.social-widget ul.social-icons li a.facebook:hover i {
  background-color: #507CBE;
}

.social-widget ul.social-icons li a.twitter:hover i {
  background-color: #63CDF1;
}

.social-widget ul.social-icons li a.google:hover i {
  background-color: #F16261;
}




.contact-widget span {
  font-weight: 700;
}

.contact-widget ul li {
    margin-bottom: 12px;
}

.contact-widget ul li p a {
    color: #bbb;
}

.contact-widget p {
    padding-bottom: 20px;
}

.twitter-widget a:hover {
  color: #43B9CD;
  text-decoration: underline;
}

.twitter-widget ul li {
    margin-bottom: 20px;
}

.twitter-widget ul li span {
  color: #666;
}

.flickr-widget ul {
    overflow: hidden;
}

.flickr-widget ul li {
    float: left;
    margin-left: 8px;
    margin-bottom: 8px;
}
.flickr-widget ul li span {
    color: #666;

.flickr-widget ul li:nth-child(3n+1) {
    margin-left: 0;
}

.flickr-widget ul li a {
    display: inline-block;
  width: 80px;
  opacity: 0.6;
  border-radius: 2px;
  -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
  border: 4px solid #333;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
}

.flickr-widget ul li a img {
    width: 100%;
  height: 65px;
}

.flickr-widget ul li a:hover {
  opacity: 1;
}

.mail-subscribe-widget form {
    margin-top: 15px;
    margin-bottom: 20px;
}

.mail-subscribe-widget form input[type="text"] {
    outline: none;
    color: #666;
    font-size: 12px;
    padding: 6px 12px;
  border: none;
    background: #fff;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
    outline: none;
}

.copyright-section {
    padding: 15px 0;
  font-size: 11px;
  letter-spacing: 0.5px;
    border-top: 1px solid rgba(255,255,255,.06);
}

.copyright-section p {
  font-size: 11px;
  text-transform: uppercase;
}
.copyright-section p a:hover{
  text-decoration: none;
  color: #fff;
}
ul.footer-nav {
    float: right;
}

ul.footer-nav li {
    display: inline-block;
    float: left;
    margin-left: ;
}

ul.footer-nav li:first-child {
    margin-left: 0;
}

ul.footer-nav li a {
    display: inline-block;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
}

ul.footer-nav li :hover {
  color: #fff;
  opacity:;
}



</style>



<meta name="viewport" content="width=device-width, initial-scale=1">
<linl rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">

 <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
</head>
<body>

<div class="container">
<div class="row">
<div class="top-bar">
<div class="col-sm-6">


<ul class="contact-details">
<li> <a href="dhanrajpandey@gmail.com"><i class="fa fa-envelope-o"></i>"dhanrajpandey@gmail.com"</a></li>
<li><a href="#" style="margin-left:-5px;"><i class="fa fa-phone"></i>"9862218494"</a></li>
</ul></div>
<div class="col-sm-6" style="margin-left:-28px;">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul></div>
                          
        

 </div>
 </div>
 </div>
<div class="navbar navbar-default navbar-fixed-top affix-top" role="navigation" data-spy="affix" data-offset-top="50" style="background-color:#fff">

<div class="container">
<div class="row">
<div class="col-sm-2">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="#">

        <img src="image/website logo/logo.png" class="img-responsive" alt="dixon store" style="
    height: 53px;
    margin-top: -16px;
    width: 104px;"></a>
      </a>
      
</div>
</div>

<div class="col-sm-6">
 <div class="collapse navbar-collapse li-inline" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">home</a></li>
        <li><a href="#">about us</a></li>
        <li><a href="contact.php">contact</a></li>
        <li> <a href="#">our services</a></li>
        
      </ul>
      </div>
      </div>
      <div class="col-sm-4">
      
<form class="navbar-form">
 <div  class="form-group">
<input type="text" placeholder="search" class="form-control"style="
    font-size:"" >

<button type="button" class="btn btn-primary" style="font-family:'open-sans',sans-serif;"> submit</button>
</div>
</form>
</div>
      </div>
      
      </div>
      </div>
    

<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="mobile">
        <hgroup>
            <h1 style="font-size:4em;font-family:'open',sans-serif;color:#8BC34A">welcome to Dixon mobile store</h1>        
            <h3 style="font-size:2em;color:">we provide you all kind of branded mobile in a cheapest price</h3>
            
            
        </hgroup>
        <a href="#">
        <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">view more</a>
         <a href="" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">our feature</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="mobile">        
        <hgroup>
            <h1 style="font-size:4em;font-family:'open',sans-serif;">we are trusted mobile supplier in kathmandu</h1>        
            <h3>we provide all kind of gadget product at lowest price</h3>
        </hgroup>       
         <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">view more</a>
         <a href="" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">our feature</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="mobile">        
        <hgroup>
            <h1>call us now</h1>        
            <h3>we serve you home deliver fascility </h3><h2>
            <li><a href="#" style="margin-left:-5px;color:red;"><i class="fa fa-phone"></i>"9862218494"</a></li></h2>
        </hgroup>
        <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">view more</a>
         <a href="" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">our feature</a>
      </div>
    </div>
  </div> 
</div>


<div class="well">
 <div class="row">
                     <div class="col-sm-12"  product-cards">

                        

                          <div id="divcontent">
                                 
 
  <div id="ItemsBody_pnlCategoryBrowse1">
  
    
    

    

    

    

    <div id="ItemsBody_pnlBestSellers" style="clear:both; margin-top:5px;">
    
      <p class="title">
        <span style="font-family:'open sans',sans-serif;"id="ItemsBody_lblBestSellers">SMARTPHONE CATEGORIES</span>
        <a href=">See All</a>
      </p>

      <div class="col-sm-4">
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" class="img-resposive"style="" />
                </a>
              </div>
              <div class="item-body">

                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div><!--div close-->
                  </div><!--item inlay close-->
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->

 
                <div><!-- another div content start-->
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div><!--div close-->
                  </div><!--item inlay close-->
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->
                  </div><!--ItemsBody_pnlBestSellers-->                 
</div><!--ItemsBody_pnlCategoryBrowse1-->
                </div><!--div content end-->

              </div><!--end sm-12-->



            </div><!--end well-->



          </div><!--end row-->
          </div><!--end conatiner-->
          <div class="well">
          <div class="row">
          <div class="col-sm-12">
           <div id="divcontent">
                                 
 
  <div id="ItemsBody_pnlCategoryBrowse1">
  
    
    

    

    

    

    <div id="ItemsBody_pnlBestSellers" style="clear:both; margin-top:5px;">
    
      <p class="HighlightedItemsTitle">
        <span style="font-family:'open sans',sans-serif;"id="ItemsBody_lblBestSellers">IPHONE CATEGORIES</span>
        <a href=">See All</a>
      </p>

      <div class="col-sm-4">
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/iphone/iphone6s.jpg" alt="apple iphone 6s" style="" />
                </a>
              </div>
              <div class="item-body">
              
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">apple iphone 6s</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/iphone/iphone7.jpg" alt="apple iphone 7" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">apple iphone 7</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div><!--div close-->
                  </div><!--item inlay close-->
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->

 
                <div><!-- another div content start-->
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div><!--div close-->
                  </div><!--item inlay close-->
                  </div> <!--col-sm-4 end-->
                  <div>
          <div class="ItemsB inlay-container">
            <div>
              <div class="prod-img-wrap">
                <a href="">
                  <img src="image/mobile photo/oppoA39.jpg" alt="Samsung Galaxy J7 Prime (G610F)" style="" />
                </a>
              </div>
              <div class="item-body">
                
                </div>            

                <div class="ItemsBrowse_Title">
                  <a href="">Samsung Galaxy J7 Prime (G610F)</a>
                </div>

                <div class="price-desc">
                  Rs.27,430.00
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    Rs.27,990.00
                  </s>
                </div>
                <span class="btn btn-primary"  style="">view details</span>

                <div class="more-prod">
                  <a href="" class="ItemsBrowse_More">More like this</a>

                  </div>
                  </div>
                  </div>
                  </div> <!--col-sm-4 end-->
                  </div><!--ItemsBody_pnlBestSellers-->                 
</div><!--ItemsBody_pnlCategoryBrowse1-->
                </div><!--div content end-->
                </div><!--col-sm-12 end-->
                </div><!--row end-->
                









<!-- Start Footer Section -->
    <footer>
      <div class="container-fluid">
        <div class="row footer-widgets">
 <!-- Start Twitter Widget -->
          <div class="col-md-4">
            <div class="footer-widget twitter-widget">
              <h4>Contact Us<span class="head-line"></span></h4>
               <ul>
              <li><span>Address:</span>  way to ambition college new baneshwor,
              near whitehouse college(ktm)</li>
                <li><span>Phone Number:</span> 9862218494</li>
                <li><span>Email:</span> <a style="color:#fff;" href="">sureshkharel456@gmail.com</li></a>
                <li><span>Website:</span> <a style="color:#fff;" href="">www.dixonstore.com</li></a>
              

              </ul>
       
            </div>
          </div>
          <!-- .col-md-4 -->
          <!-- End Twitter Widget -->

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-4">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>mail us for online order </p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="https://www.facebook.com/dixon store/" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="https://twitter.com/dixon store" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google" href="" target="_blank"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="youtube" href="" target="_blank"><i class="fa fa-youtube"></i></a>
                </li>
                
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


         


          <!-- Start Flickr Widget -->
          <div class="col-md-4">
            <div class="footer-widget flickr-widget">
              <h4>our services<span class="head-line"></span></h4>
              <ul>
              <li><span>mobile repair:</span> android and iphone repair lock unlock</li>
                <li><span>buy and sell:</span> all kind of mobile exchange services</li>
                <li><span>2nd hand mobile:</span> with 1 year guarantee</li>
                <li><span>Website:</span> www.dixonstore.com</li>
              

              </ul>
             
              
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
             <p><font color="#ccc">Copyright @ 2016 dixon mobile store - Designed &amp; Developed by</font> <a href="http://dixonstore.com/">dixon store</a></p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a>
                </li>
                <li><a href="#">Privacy Policy</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->








          
</div><!--end well-->








        
      
</body>

</html>



