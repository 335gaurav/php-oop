<?php

define('DB_SERVER','localhost');
define('DB_NAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','attendance-manager');

define('SITE_URL','http://localhost/php-oop/');

include_once('databaseconnect.php');
$db = new Databaseconnect;

function base_url($slug)
{
  echo SITE_URL.$slug;
}

function validateInput($dbcon, $input)
{
  return mysqli_real_escape_string($dbcon, $input);  
}