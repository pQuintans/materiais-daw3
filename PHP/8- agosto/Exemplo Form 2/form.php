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
  <input type="hidden" name="op" value="save">

    RA
    <input type="text" name="ra">
    <br><br>

    Nome
    <input type="text" name="name">
    <br><br>
  
    Curso:   
    <input type="text" name="course">
    <br><br>

    <input type="submit" value="Cadastrar">
 </form>
</body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<br>";
    $op = $_REQUEST["op"];
    echo "Operação: " . $op;
    echo "<hr>";
  
    // $ra = $_POST["ra"];
    // $name = $_POST["name"];
    // $course = $_POST["course"];
    
    $ra = $_REQUEST["ra"];
    $name = $_REQUEST["name"];
    $course = $_REQUEST["course"];
  
    if($op == "save") {
      echo "salvando ... ";
      echo "<br>";
  
      echo $ra;
      echo "<br>";
    
      echo $name;
      echo "<br>";
    
      echo $course;
      echo "<br>";
    } else if ($op == "del") {
      echo "apagando ...";
    }
  }