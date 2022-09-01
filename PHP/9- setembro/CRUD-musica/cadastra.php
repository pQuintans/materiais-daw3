<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar aluno</title>
</head>
<body>
  <a href="landingPage.php">Home</a>
  <a href="consulta.php">Consulta</a>
  <hr>
  <h1>Cadastro de músicas</h1><br>
  <form method="post">
    <label for="nome">Nome da Música:</label>
    <input type="text" name="nome"> 
    <br>
    <br>
    <label for="banda">Nome da Banda:</label>
    <input type="text" name="banda"> 
    <br>
    <br>
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    include('conexaoBD.php');

    try {
      $nome = $_POST["nome"];
      $banda = $_POST["banda"];

      if(trim($nome) == "" || trim($banda) == "") {
        echo "Nome e Banda são obrigatórios!";
      } else {
        $stmt = $pdo->prepare("INSERT INTO musica VALUES(DEFAULT, :nome, :banda)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":banda", $banda);
        $stmt->execute();
        echo "Música cadastrado!";
      }
    } catch(PDOException $ex) {
      echo 'Erro: ' . $ex->getMessage();
    }

    $pdo = null;
  }
?>