<?php
if(isset($_SESSION['message']))
{
  echo "<h5 class='alert alert-danger'>". $_SESSION['message'] ."</h5>";
  unset($_SESSION['message']);  
}
?>