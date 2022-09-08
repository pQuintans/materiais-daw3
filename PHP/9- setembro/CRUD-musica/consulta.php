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
  <h1>Consulta de músicas</h1><br>
  <form method="post">
    <label for="nome">Nome da Música:</label>
    <input type="text" name="nome"> 
    <br>
    <br>
    <input type="submit" value="Buscar">
    <br>
  </form>
</body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    include('conexaoBD.php');

    if(isset($_POST["nome"])) {
      $stmt = $pdo->prepare("SELECT * FROM musica");
    } else {
      $nome = $_POST["nome"]; 
      $stmt = $pdo->prepare("SELECT * FROM musica WHERE nome = :nome");
      $stmt->bindParam(":nome", $nome);
      echo "Aluno cadastrado!";
    }

    try {
      $stmt->execute();

      echo "<form method='post'> <table border='1px'> <tr> <th></th> <th>Código</th> <th>Nome da Música</th> <th>Nome da Banda</th> <th>Imagem</th> </tr>";
      while ($row = $stmt->fetch()) {
        echo "<tr> <td> <input type='radio' name='codMusica' value='" . $row['codigo'] . "'>";
        echo "<input type='hidden' name='nome' value='" . $row['nome'] . "'>";
        echo "<td>" . $row['codigo'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['banda'] . "</td>";

        if($row['foto'] == null) {
          echo "<td align='center'>-</td>";
        } else {
          echo "<td align='center'><img src='data:image;base64,".base64_encode($row['foto'])."' width='50px' heigh='50px'></td>";
        }

        echo "</tr>";
      }
      echo "</table><br>";

      echo "<button type='submit' formaction='remove.php'>Excluir musica</button>";

      echo "<button type='submit' formaction='edicao.php'>Editar musica</button>";

      echo "</form>";
    } catch(PDOException $ex) {
      echo 'Erro: ' . $ex->getMessage();
    }

    $pdo = null;
  }
?>