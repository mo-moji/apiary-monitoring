<?php
  session_start();
  require 'header.php';
  $login = $_SESSION['login'];

  if ($login == false) {
    include 'include/landing.php';
  }elseif ($login) {
    include 'include/main.php';
  }
  
  require 'footer.php';

?>
