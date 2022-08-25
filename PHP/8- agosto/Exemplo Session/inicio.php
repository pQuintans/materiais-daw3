<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h2>Controle de Alunos</h2>
  <div>
    <form>
      <input type="button" name="Cadastrar" value="Cadastrar" onclick="window.open('cadastra.php', '_top');"> <br><br>
      <input type="button" name="Consultar" value="Consultar" onclick="window.open('consulta.php', '_top');">
    </form>
  </div>
</body>
</html>