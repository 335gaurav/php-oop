<?php
session_start();

define('DB_SERVER','localhost');
define('DB_NAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','db_oops');

define('SITE_URL','http://localhost/php-oop/');

include_once('databaseconnect.php');
$db = new Databaseconnect;
include("./codes/authentication_code.php");

function base_url($slug)
{
  echo SITE_URL.$slug;
}

function redirect($message, $page)
{
  $redirectTo = SITE_URL.$page;
  $_SESSION['message'] = "$message";
  header("Location: $redirectTo");
  exit();
}

function validateInput($dbcon, $input)
{
  return mysqli_real_escape_string($dbcon, $input);  
}