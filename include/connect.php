<?php 
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'apiary_db';

  $conn = new mysqli($servername,$username,$password,$dbname);

  if (mysqli_connect_error()) {
    die("ERROR".mysqli_connect_error());
  }

?>