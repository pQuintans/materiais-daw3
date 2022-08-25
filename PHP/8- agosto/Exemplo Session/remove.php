<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="inicio.php">Home</a>
  <a href="consulta.php">Consulta</a>
  <hr>
  <h2>Exclusão de Alunos</h2>
</body>
</html>

<?php 

if(!isset($_POST["raAluno"])) {
  echo "Selecione o aluno a ser excluído!";
} else {
  include("conexaoBDO.php");
  $ra = $_POST["raAluno"];

  try {
    $smtm = $pdo->prepare('DELETE FROM alunos WHERE ra = :ra');
    $smtm->bindParam(':ra', $ra);
    $smtm->execute();

    echo $smtm->rowCount() . " aluno de RA $ra removido!";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  $pdo = null;
}