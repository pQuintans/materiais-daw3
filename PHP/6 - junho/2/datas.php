<?php
  $agora = time();
  echo $agora;

  echo "<br><br>";

  date_default_timezone_set("America/Sao_Paulo");

  echo date("Y-m-d H:i:s", time()); // resultado 2022-06-02 16:31:00
  echo "<br>";

  echo date("Y-m-d", time());
  echo "<br>";

  echo date("d"); 
  echo "<br>";

  echo date("l");
  echo "<br>";

  echo date("F");  

  echo "<br><br>";

  echo strtotime("+ 1 day", time()), "<br>";
  echo strtotime("+ 1 day"), "<br>";

  echo date("d-m-Y H:i:s", strtotime("+ 1 hour, + 1 day, + 2 hour"));

  echo "<br><br>";
//            h   m   s   m   d   a
  echo mktime(12, 00, 00, 02, 20, 2018), "<br>";
  echo date("d-m-Y H:i:s", mktime(12, 00, 00, 02, 20, 2018));

  echo "<br><br>";

  if(checkdate(02, 20, 2018)) {
    echo "Data valida";
  } else {
    echo "Data invalida";
  }

  echo "<br><br>";

  $data1 = mktime(0, 0, 0, 9, 7, 2004);
  $data2 = mktime(0, 0, 0, 02, 20, 2022);
  $difSeconds = ($data2 - $data1);

  //Resultado em segundos
  echo "Diferença em segundos: " . $difSeconds, "<br>";

  $difMinutes = ($data2 - $data1) / 60;
  //Resultado em minutos
  echo "Diferença em minutos: " . $difMinutes, "<br>";

  $difHours = ($data2 - $data1) / (60 * 60);
  //Resultado em horas
  echo "Diferença em horas: " . $difHours, "<br>";

  $difDays = ($data2 - $data1) / (60 * 60 * 24);
  //Resultado em dias
  echo "Diferença em dias: " . $difDays, "<br>";

  $difYears = ($data2 - $data1) / (60 * 60 * 24 * 365);
  //Resultado em anos
  echo "Diferença em anos: " . round($difYears), "<br>";
