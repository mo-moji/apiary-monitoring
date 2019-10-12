<?php 
  session_start(); 
  include 'connect.php';
  $loginPassword = $_POST['login-password'];
  $sql = "SELECT * FROM apiary_admin;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($loginPassword == $row['admin_pass']) {
        $_SESSION['login'] = true;
        header("location:../index.php?login=success");
        break;
      }else {
        $_SESSION['login'] = false;
        header("location:../index.php?login=failed");
      }
    }
    
  }
  // header("location:../index.php?login=failed");
  $conn->close();
?>