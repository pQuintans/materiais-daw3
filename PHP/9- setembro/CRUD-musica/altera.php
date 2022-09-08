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
  define('TAMANHO_MAXIMO', (2 * 1024 * 1024));
  include("conexaoBD.php");

  $codigo = $_POST["codMusica"];
  $nome = $_POST["nome"];
  $banda = $_POST["banda"];
  $oldName = $_POST["oldName"];

  $foto = $_FILES['foto'];
  $nomeFoto = $foto["name"];
  $tipoFoto = $foto["type"];
  $tamanhoFoto = $foto["size"];

  try { 
    if (($nomeFoto != "") && (!preg_match('/^image\/(jpeg|png|gif)$/', $tipoFoto))) { 
      echo "Selecione uma imagem válida (.jpg / .png / .gif)";
    } else if ($tamanhoFoto > TAMANHO_MAXIMO) {
      echo "A imagem deve possuir no máximo 2MB";
    } else {
      if($nomeFoto == "") {
        $fotoBinario = null;
      } else {
        $fotoBinario = file_get_contents($foto['tmp_name']);
      }

      $smtm = $pdo->prepare('UPDATE musica SET nome = :novoNome, banda = :novaBanda, foto = :foto WHERE codigo = :codigo');
      $smtm->bindParam(':novoNome', $nome);
      $smtm->bindParam(':novaBanda', $banda);
      $smtm->bindParam(':codigo', $codigo);
      $smtm->bindParam(':foto', $fotoBinario);
      $smtm->execute();
      echo "Os dados da música $oldName foram alterados:<br>";
      echo "Nome: $nome <br>";
      echo "Banda: $banda";
    }
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  $pdo = null;