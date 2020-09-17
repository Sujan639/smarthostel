<?php 
include('connection.php');
if(!$con)
{
  die("couldnt connect".mysqli_error());
  
}
?>






<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">
  
body {
  
  background-image:url("image/website logo/smart.png");
}




</style>

  <style>

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
   min-height: 370px;
   max-height: 370px;
}
 div.ItemsB:nth-child(odd){padding-left: 5px;}
    .prod-img-wrap a{height: 2000px;}
    .prod-img-wrap a img {
      max-height: 200px;
      max-width:100%;}
.HighlightedItemsTitle {
    font-size: 25px;
    color: #4d4d4d;
    margin-top: 30px;
    text-align: left;   
    padding: 20px 0 10px 0px;
    margin: 10px 10px;
}
@media  (max-width: 992px)
.prod-img-wrap a {
        height: 200px;
    }
    
     #ItemsBody_pnlCategoryBrowse1 .product-img{margin-bottom:20px;max-height: 200px;text-align: center;}
    #ItemsBody_pnlCategoryBrowse1 .product-img img{display: inline-block;max-height: 200px;}
.prod-img-wrap{display: table;width: 100%;text-align: center;}
.prod-img-wrap a{display: table-cell;vertical-align: middle;height: 200px;}
.prod-img-wrap a img{max-height: 200px;max-width: 100%;}
div.ItemsB {
    /*width: 50%;*/

}
.ItemsB>div {
  min-height: 370px;
    max-height: 370px;
    
    width:350px;
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
    /*width: 33.33%;*/
    box-sizing: border-box;
    padding: 10px;
    margin: 0;
    border: none!important;
  }
    .prod-img-wrap{display: table;width: 100%;text-align: center;}
    @media (max-width: 600px)
.prod-img-wrap a {
 max-height: 130px;

    display:table-cell;
    vertical-align:middle;
}
.prod-img-wrap a img{
max-height:200px;
  max-width:100%;
}
.prod-img-wrap a{display: table-cell;vertical-align: middle;height: 207px;}


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
.ItemsBrowse_Title p{margin:10px auto;}


.modal {
  z-index: 99999;
}
    
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: white;
  border: none;
  color: black;
  border:2px solid #375E97;
  text-align: center;
  font-size: 14px;
  padding: 9px;
  width: 92px;
  transition: all 0s;
  cursor: pointer;
  margin: 5px;
  margin-left: -13px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.1s;
}

.button span:after {
  /*content: '»';*/
  position: absolute;
  opacity: 0;
  top: 0;
  right:2px ;
  transition: 0.1s;
}

.button:hover span {
  padding-right: 0px;
  background-color:;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: ;
  border: 2 px solid #FA6765;
  color: #555;
  text-align: center;
  font-size: 13px;
  padding: 9px;
  width: 96px;
  transition: all 0.1s;
  cursor: pointer;

}
.button1:hover{
  background-color:white;
  color:black;
}



</style>
<style>
footer {
  background-color: #222;
    padding-top: 60px;
  border-top: 4px solid #555;
}




</style>


<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="cssdesign/index.css" type="text/css" media="screen">
<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js></script>
<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js></script>
<script src="http://fonts.googleapis.com/css?family=Roboto;"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="cssdesign/contact.css" type="text/css">
<link rel="stylesheet" href="cssdesign/navbar.css" type="text/css">
<link rel="stylesheet" href="cssdesign/footer.css" type="text/css">
<link rel="stylesheet" href="cssdesign/aboutus.css" type="text/css">
<link rel="stylesheet" href="cssdesign/get-in-touch.css" type="text/css">



</head>
<body>


<div class="navbar navbar-default navbar-fixed-top affix-top" role="navigation" data-spy="affix" data-offset-top="50" style="background-color:#fff">

<div class="container">
<div class="row">
<div class="col-md-2">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="index.php">

        <img src="image/website logo/smart.png" class="img-responsive" alt="smart hostel" style="
    height: auto;
    margin-top: -64px;
    width: 100px;"></a>
      </a>
      
</div>
</div>

<div class="col-md-6">
 <div class="collapse navbar-collapse li-inline" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li> <a href="UserLogin.php">User Login</a></li>
        <li> <a href="login.php">Admin</a></li>
      </ul>
      </div>
      </div>
      <div class="col-md-4">
      
<form class="navbar-form" method="POST" action="searchengine.php">
 <div  class="form-group">

 
<input type="text" placeholder="search By Location, Price, HstelName " name="search" class="form-control" >

<input type="submit" class="btn btn-primary" name="submit" value="submit" style="font-family:'open-sans',sans-serif">
</div>
</form>
</div>
      </div>
      
      </div>
      </div>



      
    

       