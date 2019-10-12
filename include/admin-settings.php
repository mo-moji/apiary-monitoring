<?php
          $passErr = "";
          if (isset($_POST['logout'])) {
            $_SESSION['login'] = false;
            header('location:index.php');
          }elseif (isset($_POST['change-name'])) {
            $newUserName = $_POST['new-username'];
            $sql = "UPDATE apiary_admin SET admin_name = '$newUserName' WHERE id='1';";
            $conn->query($sql);
            
            header("Refresh:0");
          }elseif (isset($_POST['update-questions'])) {
            $secretQuestion = $_POST['secret-question'];
            $secretQuestionAnswer = $_POST['secret-question-answer'];
            $sql = "UPDATE apiary_admin SET security_question = '$secretQuestion', security_question_answer = '$secretQuestionAnswer' WHERE id='1';";
            $conn->query($sql);
            
            header("Refresh:0");
          }elseif (isset($_POST['change-password'])) {
            $newPassword = $_POST['new-password'];
            $password = $_POST['password'];
            if ($password == $adminPass) {
              $sql = "UPDATE apiary_admin SET admin_pass = '$newPassword' WHERE id='1';";
              $conn->query($sql);
              header("Refresh:0");
            }else {
              $passErr = "*Wrong Password";
            }
            
          }
        ?>
 <div class="admin-settings-wrapper">
   <button class="close-window"><i class="fas fa-times"></i></button>
    <div class="admin-settings">
      <form action="" method="POST">
        <div class="admin-name">
          <span class="admin-icon" href=""><i class="fas fa-user-circle"></i></span>
          <?php echo $adminName;?>
          <a id="admin-change-name-button"href="#">change name</a>
        </div>
        <div class="admin-change-name-wrapper">
          <div class="admin-change-name">
            <input type="text" name="new-username" placeholder="New Username">
            <button name="change-name" type="submit">Update</button>
            <a id="change-name-cancel" href="#">cancel</a>
          </div>
        </div>
        <!-- <hr> -->
        <!-- <div class="security-questions">
          <p class="title">Security Question <div class="title-line-small"></div></p>
          <p><?php echo $securityQuestion." ".$securityQuestionAnswer;?></p>
          <a id="select-questions-button" href="#">Edit</a>
        </div>
        <div class="select-questions-wrapper">
          <div class="select-question">
            <p>Please select a security question.</p>
            <select name="secret-question" id="">
              <option value="What's the name of your first pet?">What's the name of your first pet?</option>
              <option value="Where were you when you had your first kiss?">Where were you when you had your first kiss?</option>
              <option value="Who was your childhood hero?">Who was your childhood hero?</option>
              <option value="What was your childhood nickname?">What was your childhood nickname?</option>
            </select>
            <input type="text" name="secret-question-answer" placeholder="Answer">
            <button id="update-questions" name="update-questions" type="submit">Update</button>
            <a id="close-questions" href="#">cancel</a>
          </div>
        </div> -->
        
        <hr>
        <div class="change-password-button">
          
          <a id="change-password-button" href="#">Change Password</a>
        </div>
        
        <div class="change-password-wrapper">
          <div class="change-password">
            <input name="password" type="password" placeholder="Password">
            <input name="new-password" type="password" placeholder="New Password">
            <p class="error"><?php echo $passErr;?></p>
            <button name="change-password" type="submit">Update</button>
            <a id="close-change-password" href="#">cancel</a>
          </div>
        </div>
        <button class="logout-btn" name="logout" type="submit">Log out</button>
        
      </form>
      
    </div>
  </div>