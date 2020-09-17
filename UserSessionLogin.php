<?php
   include('connection.php');
   session_start();
   
   $Email = $_SESSION['Email'];
   
   $ses_sql = mysqli_query($con,"select Name from registrationform where Email = '$Email' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Name'];
   
   if(!isset($_SESSION['Email'])){
      header("location:UserLogin.php");
   }
?>