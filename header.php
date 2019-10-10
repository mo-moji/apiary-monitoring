<?php include_once 'include/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/all.js"></script>
  <title>Document</title>
</head>
<body>

<header>
  <div class="admin-login-wrapper">
    <div class="admin-login">
      <div class="avatar">
        <img src="images/logo-orange.png" alt="">
      </div>
      <form action="include/login.php" method="post">
        <div class="admin">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Admin" disabled>
        </div>
        <div class="password">
          <i class="fas fa-lock"></i>
          <input type="password" name="login-password" placeholder="Password">
        </div>
        <button type="submit">Login</button>
      </form>
     </div>
    </div>
</header>

  