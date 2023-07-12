<?php

// include('config/app.php');

class RegisterController
{
  public $conn;

  public function __construct()
  {
    $db = new Databaseconnect;
    $this->conn = $db->conn;
  }

  public function registration($fname, $lname, $email, $pass)
  {
    $register_query = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$pass')";
    $result = $this->conn->query($register_query);
    return $result;
  }

  public function isUserExists($email)
  {
    $checkUser = "SELECT `email` FROM `users` WHERE `email` = '$email' LIMIT 1";
    $result = $this->conn->query($checkUser);
    if ($result->num_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function cPass($pass, $cpass)
  {
    if ($pass == $cpass) {
      return true;
    } else {
      return false;
    }
  }
}
