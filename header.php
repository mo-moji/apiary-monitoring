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

<?php 
  include 'include/connect.php';

  $sql = "SELECT * FROM apiary_admin;";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $adminName = $row['admin_name'];
      $adminPass = $row['admin_pass'];
      $securityQuestion = $row['security_question'];
      $securityQuestionAnswer = $row['security_question_answer'];
    }
  }
 ?>

  