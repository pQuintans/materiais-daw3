<HTML>
  <HEAD>
    <TITLE>A Linguagem PHP</TITLE>
  </HEAD>
  <BODY>
    <?php
      echo "Meu primeiro código PHP! <b>Hello World</b>";
      echo "<br>";
      echo "Simone";
      echo "<br><br>";

      $nome = "COTIL";
      echo $nome;
      echo "<br><br>";

      var_dump($nome); // Exibe o tipo do dado, tamanho o usado e o valor
      echo "<br><br>";

      $outroNome = "UNICAMP";

      echo $nome . " " . $outroNome;
      echo "<br><br>";

      unset($nome); //Remove a variavel. Se quiser limpar varias => Separar por ,

      if(isset($nome)) {
        echo $nome;
        echo "<br><br>";
      };

      $valor = 50.15;
      echo $valor;
      echo "<br><br>";

      $aprovado = true;
      echo $aprovado;
      echo "<br><br>";

      $disciplinas = array("BD", "LP", "DAW");
      echo $disciplinas[2];
      echo "<br><br>";

      $nulo = NULL;
      $vazio = "";

      //---Constantes---//

      define("PI", 3.14);
      define("NOME_ALUNO", "Maria");

      $resultado = 3 * PI;
      echo $resultado . "<br><br>";
      echo "Nome do aluno " . NOME_ALUNO . "<br><br>";

      //---Super Variaveis---//

      echo "<br><br>";
      echo $_SERVER["SERVER_ADDR"] . "<br>";
      echo $_SERVER["SERVER_NAME"] . "<br>";
      echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
      echo $_SERVER["REMOTE_ADDR"] . "<br>";
      echo $_SERVER["SCRIPT_NAME"] . "<br>";

      echo $_GET["x"]; //precisaremos passar o x na URL
      echo "<br><br>";
      echo $_GET["y"]; //precisaremos passar o x na URL
      //url?x=123&y=321      
    ?>