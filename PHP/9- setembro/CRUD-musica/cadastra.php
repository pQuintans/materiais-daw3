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
  <form method="post" enctype="multipart/form-data">
    <label for="nome">Nome da Música:</label>
    <input type="text" name="nome"> 
    <br>
    <br>
    <label for="banda">Nome da Banda:</label>
    <input type="text" name="banda">
    <br>
    <br>
    <label for="foto">Capa do album:</label>
    <input type="file"  name="foto" accept="image/gif, image/png, image/jpeg"> 
    <br>
    <br>
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>

<?php
  define('TAMANHO_MAXIMO', (2 * 1024 * 1024));
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    include('conexaoBD.php');

    try {
      $nome = $_POST["nome"];
      $banda = $_POST["banda"];

      $foto = $_FILES['foto'];
      $nomeFoto = $foto["name"];
      $tipoFoto = $foto["type"];
      $tamanhoFoto = $foto["size"];
      

      if(trim($nome) == "" || trim($banda) == "") {
        echo "Nome e Banda são obrigatórios!";
      } else if (($nomeFoto != "") && (!preg_match('/^image\/(jpeg|png|gif)$/', $tipoFoto))) { 
        echo "Selecione uma imagem válida (.jpg / .png / .gif)";
      } else if ($tamanhoFoto > TAMANHO_MAXIMO) {
        echo "A imagem deve possuir no máximo 2MB";
      } else {
        // $nome = $_POST["nome"]; 
        // $stmt = $pdo->prepare("SELECT * FROM musica WHERE nome = :nome");
        // $stmt->bindParam(":nome", $nome);
        // $stmt->execute();

        // $rows = $stmt->rowCount();
        
        // if($rows <= 0) {
          if($nomeFoto == "") {
            $fotoBinario = null;
          } else {
            $fotoBinario = file_get_contents($foto['tmp_name']);
          }

          $stmt = $pdo->prepare("INSERT INTO musica VALUES(DEFAULT, :nome, :banda, :foto)");
          $stmt->bindParam(":nome", $nome);
          $stmt->bindParam(":banda", $banda);
          $stmt->bindParam(":foto", $fotoBinario);
          $stmt->execute();
          echo "Música cadastrado!";
        }       
      // }
    } catch(PDOException $ex) {
      echo 'Erro: ' . $ex->getMessage();
    }

    $pdo = null;
  }
?>