<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD - Controle de alunos</title>
  <style>
    div{
      border: 2px solid black;
      width: 25%;
      padding-left: 20%;
      padding-bottom: 3%;
      padding-top: 3%;
      margin-left: 25%;
    }
    h2{
      margin-left: 40%;
    }
  </style>
</head>
<body>
  <h2>Controle de Alunos</h2>
  <div>
    <form action="">
      <input type="button" value="Cadastrar" onclick="window.open('cadastra.php', '_top');"> <br><br>
      <input type="button" value="Consultar" onclick="window.open('consulta.php', '_top');"> <br><br>
    </form>
  </div>
</body>
</html>