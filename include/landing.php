<header>
  <div class="admin-login-wrapper">
    <div class="admin-login">
      <div class="avatar">
        <img src="images/logo-orange.png" alt="">
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
        <button type="submit">Login</button>
      </form>
     </div>
    </div>
</header>