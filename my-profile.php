<?php

include_once("./controllers/authenticationController.php");

$data = $authenticated->userDetail();

include('./includes/header.php');
include('./includes/navbar.php');
?>

<div class="py-5">
  <div class="container">
    <?php include("message.php"); ?>
    <h1>My Profile Page</h1>
    <hr>
    <h4>First Name: <?= $data['first_name'].' '. $data['last_name']?></h4>
    <h4>Email: <?= $data['email']; ?></h4>
    <h4>Created-on: <?=  date('d-m-Y', strtotime($data['created_on'])); ?></h4>
  </div>
</div>
<?php 
include('./includes/footer.php');
?>