<?php

// include("./config/app.php");
include_once('controllers/RegisterController.php');
include_once('controllers/LoginController.php');

$auth = new LoginController;

if(isset($_POST['logout-btn']))
{
  $checkedLoggedOut = $auth->logout();
  if($checkedLoggedOut)
  {
    redirect("*Logged Out Successfully", "login.php");
  }
  else
  {
    return false;
  }
}



if (isset($_POST['login-btn'])) {
  $email = validateInput($db->conn, $_POST['email']);
  $pass = validateInput($db->conn, $_POST['pass']);

  $checkLogin = $auth->userLogin($email, $pass);
  if ($checkLogin) 
  {
    redirect('*Login Successfully', 'index.php');
  }
  else
  {
    redirect('*Invalid Email or Password', 'login.php');
  }
}

if (isset($_POST['register-btn'])) {
  $fname = validateInput($db->conn, $_POST['fname']);
  $lname = validateInput($db->conn, $_POST['lname']);
  $email = validateInput($db->conn, $_POST['email']);
  $pass =  validateInput($db->conn, $_POST['pass']);
  $cpass = validateInput($db->conn, $_POST['cpass']);

  $register = new RegisterController;
  $result_pass = $register->cPass($pass, $cpass);
  if ($result_pass) {
    $result_user = $register->isUserExists($email);
    if ($result_user) {
      redirect('*Email Already Exists', 'register.php');
    } else {
      $register_query = $register->registration($fname, $lname, $email, $pass);
      if ($register_query) {
        redirect('*Registered successfully', 'login.php');
      } else {
        redirect('*Something Went Wrong', 'register.php');
      }
    }
  } else {
    redirect('*Password and Confirm  Password does not match', 'register.php');
  }
}
