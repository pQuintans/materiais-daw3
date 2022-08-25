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
  <h1>Edição de alunos</h1><br>
</body>
</html>

<?php 

if(!isset($_POST["raAluno"])) {
  echo "Selecione o aluno a ser editado!";
} else {
  include("conexaoBDO.php");
  $ra = $_POST["raAluno"];

  try {
    $smtm = $pdo->prepare('SELECT * FROM alunos WHERE ra = :ra');
    $smtm->bindParam(':ra', $ra);
    $smtm->execute();

    $edificacoes = "";
    $enfermagem = "";
    $informatica = "";
    $geodesia = "";
    $mecanica = "";
    $qualidade = "";

    while ($row = $smtm->fetch()) {
      if($row['curso'] == "Edificações") {
        $edificacoes = "selected";
      } else if($row['curso'] == "Enfermagem") {
        $enfermagem = "selected";
      } else if($row['curso'] == "Informática") {
        $informatica = "selected";
      } else if($row['curso'] == "GeoCart") {
        $geodesia = "selected";
      } else if($row['curso'] == "Mecânica") {
        $mecanica = "selected";
      } else if($row['curso'] == "Qualidade") {
        $qualidade = "selected";
      }

      echo "<form method='post' action='altera.php'>\n
      RA:<br>\n
      <input type='text' size='10' name='ra' value='$row[ra]' readonly><br><br>\n
      <input type='text' size='30' name='nome' value='$row[nome]'><br><br>\n
      <select name='curso'>\n
        <option value='Informática' $informatica>Desenvolvimento de Sistemas</option>\n
        <option value='Edificações' $edificacoes>Edificações</option>\n
        <option value='Enfermagem' $enfermagem>Enfermagem</option>\n
        <option value='GeoCart' $geodesia>Geodésia e Cartografia</option>\n
        <option value='Mecânica' $mecanica>Mecânica</option>\n
        <option value='Qualidade' $qualidade>Qualidade</option>\n
      </select>\n
      <input type='submit' value='teste'>
      </form>";
    }

  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  $pdo = null;
}