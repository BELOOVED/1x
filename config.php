<?php

ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
ini_set('date.timezone', 'Europe/Istanbul');

const DB_HOST = "localhost";
const DB_LOGIN = "u1832_ee";
const DB_PASS = "Xqd9k3@80";
const DB_NAME = "u1832972_e";

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
  }

$ip = $_SERVER['REMOTE_ADDR'];
global $ip;

$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

global $db;

include "func.php";


?>