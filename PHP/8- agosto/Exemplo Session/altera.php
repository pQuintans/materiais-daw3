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
  include("conexaoBDO.php");
  $ra = $_POST["ra"];
  $nome = $_POST["nome"];
  $curso = $_POST["curso"];

  try {
    $smtm = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
    $smtm->bindParam(':novoNome', $nome);
    $smtm->bindParam(':novoCurso', $curso);
    $smtm->bindParam(':ra', $ra);
    $smtm->execute();
    echo "Os dados do aluno de Ra $ra foram alterados!";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  $pdo = null;