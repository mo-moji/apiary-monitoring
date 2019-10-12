<?php
  require_once 'header.php';
  
  if (!$_SESSION['login']) {
    include 'include/landing.php';
  }elseif ($_SESSION['login']) {
    include 'include/main.php';
  }
  
  require 'footer.php';

?>
