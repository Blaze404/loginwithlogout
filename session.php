<?php
//    include('config.php');
   session_start();
   
   $db = mysqli_connect(localhost,root,mysql,Reg_Demo);

   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select email from UserReg where email = '$email' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>