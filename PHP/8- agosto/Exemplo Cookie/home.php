<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?= $msg ?>
  <a href="logout.php">Logout</a>
</body>
</html>

<?php
  if(isset($_COOKIE['Name'])) {
    $msg = "Voce não deveria ter acesso à essa página! <br> <a href='form.php'>Crie uma conta antes de entrar</a>";
  } else {
    $name = $_COOKIE["Name"];
    $age = $_COOKIE["Age"];
    $visitCount = $_COOKIE["VisitCount"];

    if($age < 18) {
      $msg = "Você não tem idade para acessar esse site!";
    } else if ($visitCount > 0) {
      $msg = "Olá novamente " . $nome;
    } else {
      $msg = "Olá " . $nome;
      setcookie("VisitCount", $visitCount + 1, time() + 3600);
    }
  }