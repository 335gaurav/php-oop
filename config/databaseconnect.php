<?php

class Databaseconnect 
{
  public $conn;

  public function __construct()
  {
    $conn = new mysqli(DB_SERVER,DB_NAME,DB_PASSWORD,DB_DATABASE);
    if(!$conn)
    {
      die("<h1> Database Connection failed</h1>");
    }
    return $this->conn = $conn;
  }
}