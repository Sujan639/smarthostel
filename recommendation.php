
<?php
include("connection.php");
?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: UserLogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: UserLogin.php");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4/css/bootstrap.min.css">
	<script src="css/bootstrap4/js/bootstrap,min.js"></script>
	<title>	</title>

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
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      <li class="nav-item">

      

<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <span style="color:red;"><?php echo $_SESSION['username']; ?></span></p>
    	
    <?php endif ?>
      
  </li>
  <?php

  include ('connection.php');
      $username=$_SESSION['username'];

$sql="select id from users where username='$username'";
      if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $updateId=$row[0];
    $updateSql="update session set id='$updateId' where id>0";
      
      $query=mysqli_query($con,$updateSql);

    }
  // Free result set
  mysqli_free_result($result);


  <?php
$a = $b = $c = 0;
       $keyword=$_GET['keyword'];
       $sql=mysqli_query($con,"select keyword from hostel_info where id=$id");
       $sql1=mysqli_fetch_assoc($sql);

       $keyword=sqrt($keyword);
       $sql1= sqrt($sql1);
 
  for($i=0;$i<$address;$i++)
    {
    $xArray[$i]/=$keyword;
    $yArray[$i]/=$sql1;
    $a+=$xArray[$i]*$yArray[$i];
    $b+=$xArray[$i]*$xArray[$i];
    $c+=$yArray[$i]*$yArray[$i];
    }
  return $b * $c != 0 ? $a / sqrt($b * $c) : 0;

$array = preg_split('/[^[:alnum:]]+/');
foreach($array as $item)
  {
  if(strlen($item)>2)
    @$tokens1[$item]++;
  }
$array = preg_split('/[^[:alnum:]]+/');
foreach($array as $item)
        {
        if(strlen($item)>2)
                @$tokens2[$item]++;
        }
echo $keyword;
echo $sql1; 
?> 
}
$a = $b = $c = 0;
       $keyword=$_GET['keyword'];
       $sql=mysqli_query($con,"select keyword from hostel_info where id=$id");
       $sql1=mysqli_fetch_assoc($sql);

       $keyword=sqrt($keyword);
       $sql1= sqrt($sql1);
 
  for($i=0;$i<$address;$i++)
    {
    $xArray[$i]/=$keyword;
    $yArray[$i]/=$sql1;
    $a+=$xArray[$i]*$yArray[$i];
    $b+=$xArray[$i]*$xArray[$i];
    $c+=$yArray[$i]*$yArray[$i];
    }
  return $b * $c != 0 ? $a / sqrt($b * $c) : 0;
}
$array = preg_split('/[^[:alnum:]]+/', select * from hostel_info where id=$id)));
foreach($array as $item)
  {
  if(strlen($item)>2)
    @$tokens1[$item]++;
  }
$array = preg_split('/[^[:alnum:]]+/', select * from users where user_id=$user_id)));
foreach($array as $item)
        {
        if(strlen($item)>2)
                @$tokens2[$item]++;
        }
echo $keyword;
echo $sql1;     

      
?>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="searchengine1.php">
      <input type="text"  placeholder="search By Location, Price, HstelName " name="search"class="form-control mr-sm-2" name placeholder="Search" aria-label="Search">
      <input name="submit" value="search"class="btn btn-outline-success my-2 my-sm-0" type="submit">
    </form>
  </div>
</nav>

   
   <?php
include('connection.php');
if(!$con){
  die('couldnt connect'.mysqli_error());
}



$sql='';

$retval=mysqli_query($con,$sql);
if(! $retval)
{
  die('couldnt connect'.mysqli_error());

}
?>
<html>
<body>


 
<div class="row">
<div class="well">
  
  <div class="col-md-12 col-md-offset-5">
    
      
    


    
<h4 class="Recommended Hostel"><span> Recommended Hostel</span></h4>


</div>
</div>

</div>



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
                Per Month RS '.$row['HostelPrice'].'
                  <s style="color:red;">
                    
                  </s>
                  <s style="color:red;">
                    '.$row['NormalPrice'].'
                  </s>
                </div>

                <a href="singleview.php?id='.$row['id'].'"
                 class="button button1"  style="">view details</a>
                 <span> Location: '.$row['HostelLocation'].'</span>

                <div class="more-prod" style="margin-left: -16px;">
                <a href="order.php?id='.$row['id'].'"">
                <button class="button" style="vertical-align-middle">
      <span>Book Now </span></button></a>
      <span style="color:black;"> HostelType:  '.$row['HostelType'].'</span>
                

                  </div>
                  </div>
                  </div>


                   </div>
                   <!--col-md-4 end-->
                  ';
                  $i++;
                }
                ?>
</div>
</div>
                  
                  </div><!--ItemsBody_pnlBestSellers-->                 
</div><!--ItemsBody_pnlCategoryBrowse1-->
                </div><!--div content end-->

              </div><!--end sm-12-->



            </div><!--end row-->



        







          <!--Start Girls Hostel-->


 <div class="row">
             <        <div class="col-md-12"  product-cards">

                        

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
                 <span> Location: '.$row['HostelLocation'].'</span>

                <div class="more-prod" style="margin-left:-16px;">
                  <a href="order.php?id='.$row['id'].'" class="button" style="">
      <span>Book Now</span></button></a>
                  </a>
                   <span style="color:black;"> HostelType:  '.$row['HostelType'].'</span>

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



          
          
        
          
                









    


</div>
<!-- end well -->







          









        
      


</body>
</html>
