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
  <h1>Edição de músicas</h1><br>
</body>
</html>

<?php 
  include("conexaoBD.php");
  $codigo = $_POST["codMusica"];
  $nome = $_POST["nome"];
  $banda = $_POST["banda"];
  $oldName = $_POST["oldName"];

  try {
    $smtm = $pdo->prepare('UPDATE musica SET nome = :novoNome, banda = :novaBanda WHERE codigo = :codigo');
    $smtm->bindParam(':novoNome', $nome);
    $smtm->bindParam(':novaBanda', $banda);
    $smtm->bindParam(':codigo', $codigo);
    $smtm->execute();
    echo "Os dados da música $oldName foram alterados:<br>";
    echo "Nome: $nome <br>";
    echo "Banda: $banda";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  $pdo = null;