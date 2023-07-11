<?php

include('config/app.php');

class RegisterController
{
  public $conn;
  public function __construct()
  {

    $db = new Databaseconnect;
    $this->conn = $db->conn;
  }
}
