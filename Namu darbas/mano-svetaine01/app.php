<?php
$vardas = trim($_POST['vardas']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(!empty($vardas) && !empty($email) && !empty($message)){
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $from = "$email";
      $to = "m.zebuolyte@gmail.com";
      $subject = "Nauja žinutė";
      $autorius = 'Nuo: ' . $vardas . ', ' . $email;
      $zinute = htmlspecialchars($message);
      mail($to, $subject, $autorius, $zinute, $from);
      echo "<script>alert('Dėkojame. Jūsų žinutė gauta.');</script>";
      header("Location: dekojame.html");

    }
}
include('db.php');
