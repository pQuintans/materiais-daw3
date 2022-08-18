<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  
</body>
</html>

<?php
  if(isset($_SESSION["logged"])) {
    echo "
    <div>
      Bem vindo " . $_SESSION["name"] . "!" .
    "
    <a href='logout.php'>Logout</a>
    </div>";
  } else {
    echo "
    <span>
      Acesso não autorizado
    </span>";
  }
?>