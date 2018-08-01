<?php
   include('../config/config.php');
   session_start();
   
   $user_check = $_SESSION['dept'];
   
   $ses_sql = "select Department_name from iqac.facultyDept where Department_name='$user_check'";
   $result = $con->query($ses_sql);
   $row = $result->fetch_assoc();
   
   $login_session = $row['Department_name'];
   
   if(!isset($_SESSION['dept'])){
      header("location:login.php");
   }
?>