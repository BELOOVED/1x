<?php
  include 'config.php';
  if isset($_SESSION['user_id']) OR empty(intval($_SESSION['user_id'])){
    $page = "login";
  }else{
        $q = explode("/", $_GET['q']);
        $page = "main";
        if (file_exists('view/'.$q[0].'.php')) {
            $page = $q[0];
        }
  }

//   include 'view/modules/header.php';
  include 'view/'.$page.'.php';
//   include 'view/modules/footer.php';
?>