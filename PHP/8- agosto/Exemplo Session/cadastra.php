<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>
  <p>Home</p>
  <hr>
  <h1>Cadastro de alunos</h1><br>
  <form method="post">
    RA:<br>
    <input type="text" size="10" name='ra'><br><br>

    Nome:<br>
    <input type="text" size="30" name='nome'><br><br>

    Curso:<br>
    <select name="curso">
      <option value="Informática">Desenvolvimento de Sistemas</option>
      <option value="Edificações">Edificações</option>
      <option value="Enfermagem">Enfermagem</option>
      <option value="GeoCart">Geodésia e Cartografia</option>
      <option value="Mecânica">Mecânica</option>
      <option value="Qualidade">Qualidade</option>
    </select>

    <input type="submit" value="teste">
  </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

  include("conexaoBDO.php");

  try {
    $ra = $_POST["ra"];
    $nome = $_POST["nome"];
    $curso = $_POST["curso"];

    if((trim($ra) == "") || (trim($nome) == "")){
      echo "<span id='warning'>RA e nome são obrigatórios!</span>";
    } else {
      //verificando se o RA informado já existe no BD para não dar excpetion
      $stmt = $pdo->prepare("select * from alunos where ra = :ra");
      $stmt->bindParam(':ra', $ra);
      $stmt->execute();

      $rows = $stmt->rowCount();

      if ($rows <= 0){
      $stmt = $pdo->prepare("insert into alunos values(:ra, :nome, :curso)");
      $stmt->bindParam(':ra', $ra);
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':curso', $curso);
      $stmt->execute();
      echo "<span id='sucess'>Aluno Cadastrado!</span>";
      } else {
        echo "<span id='error'>Ra já existente</span>";
      }
    }

  } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
  }
  $pdo = null;
}