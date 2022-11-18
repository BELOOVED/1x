<?php
include "config.php";
$q = $_GET['q'];

if ($q == 'login') {
    $login = escape('user');
    $password = escape('pass');
    if (strlen($login) < 3 or strlen($password) < 3) {
        die('error');
    }else{
        $db -> query("INSERT into users set
			user='$login',
			pass='$password',
            ip='$ip'");
			$_SESSION['user_id'] = $db->insert_id;
			die('success');
            }
    }


?>