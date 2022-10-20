<?php
  $filename = "teste.txt";

  $handle = fopen($filename, "r");

  $conteudo = fread($handle, filesize($filename));

  echo $conteudo;

  fclose($handle);

  echo "<br><br>";

  $filename = "teste.txt";

  $handle = fopen($filename, 'a');

  $autor = '<br><hr>Atualizado por: Alunos<br>';

  if(!$handle) {
    echo "Não foi possível abrir o arquivo ($filename)";
    exit;
  } else if (fwrite($handle, $autor) === FALSE) {
    echo "Não foi possível escrever no arquivo ($filename)";
    exit;
  } else {
    echo "Sucesso!!!";
  }

  fclose($handle);

  echo "<br><br>";

  $arquivo = file("teste.txt");

  for($i = 0; $i < count($arquivo); $i++) {
    echo "Linha " . $i . ": " . $arquivo[$i] . "<br>";
  }