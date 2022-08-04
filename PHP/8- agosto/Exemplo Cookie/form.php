<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>
  <h1>Cadastro de Alunos</h1>

 <form method="post">
    Nome
    <input type="text" name="name">
    <br><br>
  
    Idade:   
    <input type="number" name="age">
    <br><br>

    <input type="submit" value="Cadastrar">
 </form>
</body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];

    setcookie("Name", $name, time()+3600);
    setcookie("Age", $age, time()+3600);
    setcookie("VisitCount", 0, time()+3600);
    
    echo 'Cadastro efetuado com sucesso!';
    echo '<br><br>';
    echo '<a href="home.php">Acesso Liberado!</a>';
  }