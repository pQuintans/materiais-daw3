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

if(!isset($_POST["codMusica"])) {
  echo "Selecione a música a ser editada!";
} else {
  include("conexaoBD.php");
  $codigo = $_POST["codMusica"];

  try {
    $stmt = $pdo->prepare('SELECT * FROM musica WHERE codigo = :codigo');
    $stmt->bindParam(':codigo', $codigo);
    $stmt->execute();

    $row = $stmt->fetch();

    echo "<form method='post' action='altera.php'>\n
    Codigo:<br>\n
    <input type='text' readonly size='10' name='codMusica' value='$row[codigo]'><br><br>\n
    <input type='text' hidden size='10' name='oldName' value='$row[nome]'>\n
    <input type='text' size='30' name='nome' value='$row[nome]'><br><br>\n
    <input type='text' size='30' name='banda' value='$row[banda]'><br><br>\n
    <input type='submit' value='teste'>
    </form>";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  $pdo = null;
}