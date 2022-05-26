<?php
  $numero = $_GET['numero'];
  $varArray = array(8, 3, 4, 6, 2, 7, 1, 0);

  echo (in_array($numero, $varArray)) ? "<span style='color:green;font-weigh:bold;'>Você acertou!</span>"
                                      : "<span style='color:red;font-weigh:bold;'>Errou! Tente denovo!</span>";

  echo "<br>";
  echo "<a href='exercicio1.php'>Tentar novamente</a>";