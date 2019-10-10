<?php 
  include 'connect.php';
  $loginPassword = $_POST['login-password'];
  $sql = "SELECT * FROM apiary_admin;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($loginPassword == $row['admin_pass']) {
        header("location:../system.php?login=success");
      }
    }
    
  }
  // header("location:../index.php?login=failed");
  $conn->close();
?>