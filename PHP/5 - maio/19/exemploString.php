<?php
  $texto = "  cotil - unicamp  ";
  
  //retira espaços do começo e fim da string
  echo "-" . trim($texto) . "- <br>"; 

  //retira espaços do começo (left)
  echo "-" . ltrim($texto) . "- <br>"; 
  
  //retira espaços do fim (right)
  echo "-" . rtrim($texto) . "- <br>"; 

  //tudo maiusculo
  echo strtoupper($texto) . "<br>";

  //tudo minusculo
  echo strtolower($texto) . "<br>";

  //1a letra maiuscula
  echo "ucfirst:" . ucfirst($texto) . "<br>";

  //1as letras maiúsculas
  echo "ucwords:" .  ucwords($texto) . "<br>";

  //retorna o tamanho da String
  echo strlen($texto) . "<br>";

  //reverte string
  echo strrev($texto) . "<br>";

  //quebra a string a cada 3 caracteres
  $str = str_split($texto, 3);
  print_r($str);

  echo "<br>";

  //Econtra a posição da primeira ocorrêcia de uma string
  echo strpos($texto, "unicamp") . "<br>";

  $email = "sberbert@unicamp.br";

  //retorna a string apos o caracter informado
  echo strchr($email, "@") . "<br>";

  //retorna a string antes do caracer informado
  echo strchr($email, "@", true), "<br>";

  //Retorna uma parte de uma string
  echo substr("abcdef", 1) . "<br>";
  echo substr("abcdef", 1, 3) . "<br>";

  echo str_replace("i", "X", $texto) . "<br>";

  //casting
  $foo = "0";        // $foo é uma string
  $foo += 2;         // $foo é um inteiro agora
  $foo = $foo + 1.3; // $foo é um float
  echo $foo;
  echo "<br>";

  $senha = "1234";

  // md5 - gera uma cópia cripografada - mão única
  //       algoritmo de um hash de 128 bits - 32 caracteres
  //        -> Problema: para a mesma string, sempre o mesmo resultado. Fácil achar na internet listas com resultados.
  //        -> Solução: concatenar um salt

  echo "<br> --- md5 --- <br>";
  $x = md5($senha);
  echo($x);
  echo "<br>";

  if (md5($senha) == $x) {
    echo "Senha ok!<br><br>";
  }

  $salt = "c0t1lUn1camp";
  $senha = $senha . $salt;
  echo "senha = "  . $senha;
  echo "<br>";

  $x = md5($senha);
  echo($x);
  echo "<br>";

  if (md5($senha) == $x) {
    echo "Senha ok!<br><br>";
  }

  // sha1 - gera uma cópia criptografada - mão única
  //        160 bits - 40 caracateres
  //        considerar a mesma regra de segurança com o uso de salt, abordada no md5

  echo "<br> --- sha1 --- <br>";
  $senha = "1234";
  $x = sha1($senha);
  echo($x);
  echo "<br>";

  if (sha1($senha) == $x) {
    echo "Senha ok!<br><br>";
  }

  $salt = "c0t1lUn1camp";
  $senha = $senha . $salt;
  echo "senha = "  . $senha;
  echo "<br>";

  $x = sha1($senha);
  echo($x);
  echo "<br>";

  if (sha1($senha) == $x) {
    echo "Senha ok!<br><br>";
  }
