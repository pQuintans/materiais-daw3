<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="landingPage.php">Home</a>
  <a href="consulta.php">Consulta</a>
  <hr>
  <h1>Exclusão de músicas</h1><br>
</body>
</html>

<?php 
  if(!isset($_POST["codMusica"])) {
    echo "Selecione a música a ser excluído!";
  } else {
    include("conexaoBD.php");
    $codigo = $_POST["codMusica"];
    $nome = $_POST["nome"];
  
    try {
      $smtm = $pdo->prepare('DELETE FROM musica WHERE codigo = :codigo');
      $smtm->bindParam(':codigo', $codigo);
      $smtm->execute();
  
      echo "Musica '$nome' de código $codigo removida!";
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
  
    $pdo = null;
  }