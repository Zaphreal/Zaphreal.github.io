<?php
  $to = 'zhamilto9999@gmail.com';  
  $name = $_POST['name'];
  $headers = "From: $_POST['email']";
  $subject = "Resume Website Form Submission: $_POST['subject']";
  $message = $_POST['message'];

  mail($to, $subject, $message, $headers);

?>
