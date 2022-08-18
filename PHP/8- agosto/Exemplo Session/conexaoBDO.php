<?php
  //conectando ao BD
  try{
    //conexão PDO
    //IP, nomeBD, usuario, senha
    $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl200126;charset=utf8', 'cl200126', 'cl*27112004');
    //ativar o depurador de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Impossível conectar BD : ' . $e . '<br>";
  }