<header>
  <?php $error ="";
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    if (strpos($url,'login=failed') == true) {
      $error = "*Wrong password";
    }
  ?>
  <div class="admin-login-wrapper">
    <div class="admin-login">
      <div class="avatar">
        <img src="images/logo-orange.png" alt="">
        <p>Apiary Monitoring</p>
      </div>
      <form action="include/login.php" method="post">
        <div class="admin">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="<?php echo $adminName;?>" disabled>
        </div>
        <div class="password">
          <i class="fas fa-lock"></i>
          <input type="password" name="login-password" placeholder="Password">
        </div>
        <p class="error"><?php echo $error; ?></p>
        <button type="submit">Login</button>
      </form>
     </div>
    </div>
</header>