<?php

ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
ini_set('date.timezone', 'Europe/Istanbul');

const DB_HOST = "localhost";
const DB_LOGIN = "u1821_bet";
const DB_PASS = "@t74l0P2y";
const DB_NAME = "u1821349_bettr";



$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

global $db;

include "func.php"


?>