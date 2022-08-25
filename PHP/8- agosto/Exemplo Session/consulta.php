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
  <hr>
  <h2>Consulta de Alunos</h2>

  <form method="post">
    RA:<br>
    <input type="text" size="10" name="ra">
    <input type="submit" value="Consultar">
  </form>

  <hr>

</body>
</html>

<?php 

if($_SERVER["REQUEST_METHOD"] === "POST") {

include("conexaoBDO.php");

if (isset($_POST["ra"]) && (trim($_POST["ra"]) != "")){
  $ra = $_POST["ra"];
  $stmt = $pdo->prepare("select * from alunos where ra= :ra order by curso, nome");
  $stmt->bindParam(':ra', $ra);
} else {
  $stmt = $pdo->prepare("select * from alunos order by curso, nome");
}
//puta
try{
  //buscando dados
  $stmt->execute();
  echo "<form method='post'> <table border='1px'> <tr> <th></th> <th>RA</th> <th>Nome</th> <th>Curso</th> </tr>";
  while ($row = $stmt->fetch()) {
    echo "<tr> <td> <input type='radio' name='raAluno' value='" . $row['ra'] . "'> <td>" . $row['ra'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['curso'] . "</td> </tr>";
  }

  echo "</table><br>";

  echo "<button type='submit' formaction='remove.php'>Excluir alunos</button>";

  echo "<button type='submit' formaction='edicao.php'>Editar alunos</button>";

  echo "</form>";

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
$pdo = null;
}