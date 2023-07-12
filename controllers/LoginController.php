<?php

class LoginController
{
  public $conn;

  public function __construct()
  {
    $db = new Databaseconnect;
    $this->conn = $db->conn;
  }

  public function UserLogin($email, $pass)
  {
    $login_query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'";
    $result = $this->conn->query($login_query);
    if ($result->num_rows > 0) {
      $data = $result->fetch_assoc();
      $this->userAuthentication($data);
      return true;
    } else {
      return false;
    }
  }

  private function userAuthentication($data)
  {
    // echo "<pre>"; print_r($data); die;
    $_SESSION['authenticated'] = true;
    // $_SESSION['auth-role'] = $data['role_as'];
    $_SESSION['auth_user'] = [
      'user_id' => $data['id'],
      'user_fname' => $data['first_name'],
      'user_lname' => $data['last_name'],
      'user_email' => $data['email']
    ];
    // echo "<pre>"; print_r($_SESSION['auth_user']); die;
  }

  public function isLoggedIn()
  {
    if(isset($_SESSION['authenticated']) === true)
    {
      redirect("You are already Logged In", "index.php");
    }
    else
    {
      return false;
    }
  }

  public function logout(){
    if(isset($_SESSION['authenticated']) === true)
    {
      unset($_SESSION['authenticated']);
      unset($_SESSION['auth_user']);
      return true;
    }
    else{
      return false;
    }
  }
}
