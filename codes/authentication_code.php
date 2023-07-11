<?php

include("./config/app.php");
include_once('controllers/RegisterController.php');

if(isset($_POST['register-btn']))
{
  $fname = validateInput($db->conn, $_POST['fname']);
  $lname = validateInput($db->conn, $_POST['lname']);
  $email = validateInput($db->conn, $_POST['email']);
  $pass =  validateInput($db->conn, $_POST['pass']);
  $cpass = validateInput($db->conn, $_POST['cpass']);  

  $register = new RegisterController;
}
?>