<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Email comfirmation</title>
</head>
<body>

  <?php
if (isset( $_POST["x"])){
  $name = $_POST["fullName"];
  $emailFrom = $_POST["email"];
  $phoneFrom = $_POST["phone"];
  $subjectFrom = $_POST["subject"];
  $messageFrom = $_POST["message"];


$mailTo = "Lonnie.Goldman@gmail.com";
$subjectEmail = "Hello: you got an email from $name";
$messageEmail = "The message from is: " . $messageFrom;


mail($mailTo, $subjectFrom, $messageEmail, $subjectEmail);

}

echo "You have sent successfully email to " . $mailTo
   ?>
 </body>
 </html>
