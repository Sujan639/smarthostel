

<?php
include("connection.php");
?>
  


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4/css/bootstrap.min.css">
	<script src="css/bootstrap4/js/bootstrap,min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap4/css/bootstrap.min.css">
  <title> </title>
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
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  /*content: '»';*/
  position: absolute;
  opacity: 0;
  top: 0;
  right:2px ;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 10px;
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
  transition: all 0.5s;
  cursor: pointer;

}
.button1:hover{
  background-color:white;
  color:black;
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="searchengine1.php">
      <input type="text"  placeholder="search By Location, Price, HstelName " name="search"class="form-control mr-sm-2" name placeholder="Search" aria-label="Search">
      <input name="submit" value="search"class="btn btn-outline-success my-2 my-sm-0" type="submit">
    </form>
  </div>
</nav>
<div class="well">
<div class="col-md-12">
<?php 
if(isset($_POST['submit']))
{

  $search=$_POST['search'];
  $sql=mysqli_query($con,"select * from hostel_info WHERE HostelName LIKE '%".$search."%' OR HostelPrice LIKE '%".$search."%' OR HostelLocation LIKE '%" .$search. "%'");
  $count=mysqli_num_rows($sql);

  if($count==0)
  {
    $output='couldnt find data';
echo $output;
  }
  else{
    $i=1;
    while($row=mysqli_fetch_assoc($sql)) {

      $HostelName=$row['HostelName'];
    $HostelLocation=$row['HostelLocation'];
    $HostelPrice=$row['HostelPrice'];
  $HostelLocation=$row['HostelLocation'];



  
    // echo $HostelName;
    // echo $HostelPrice;
    // echo $HostelLocation;

  echo'
  <div class="well">
 <div class="row">
                     <div class="col-md-12"  product-cards">

                        

                          <div id="divcontent">
                                 

  <div id="ItemsBody_pnlCategoryBrowse1">
  
    
    

    

    

    

    <div id="ItemsBody_pnlBestSellers" style="">
    
       
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
                    </div><!--ItemsBody_pnlBestSellers-->                 
</div><!--ItemsBody_pnlCategoryBrowse1-->
                </div><!--div content end-->

              

                  ';
    $i++;
  }
}
}
  ?>
  </div>
  </div>

   


</body>
</html>