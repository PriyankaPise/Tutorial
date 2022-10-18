<!-- <?php
  session_start();
  if(session_destroy())
  {
  	header("location:../admin/login.php");
  }
  ?>
 -->

 <?php 
 session_start();
 unset($_SESSION["admin_id"]);
header("location:../admin/login.php");

 ?>