<?php

  $aExemplo = array("ra"=>18101,
                    "serie"=>3,
                    "nome"=>"José Alberto Matioli");

  echo $aExemplo["ra"] . " - " . $aExemplo["nome"];
  $aExemplo["nome"] = "J. A. Matioli";
  echo "<br>";
  echo $aExemplo["ra"] . " - " . $aExemplo["nome"];
  echo "<br>";
  echo "<br>";

  
  $aExemplo = array("ra"=>200146,
                    "serie"=>3,
                    "aluno"=> array("nome"=> "Pedro",
                                    "sobrenome" => "Quintans"));

  echo $aExemplo["ra"] . " - " . $aExemplo["aluno"]["nome"] . " " . $aExemplo["aluno"]["sobrenome"];

  echo "<br>";
  echo "<br>";

  print_r($aExemplo);

  echo "<br><br>";
  echo "key_exists: <br>";
  
  echo array_key_exists("aluno", $aExemplo) ? "Tem aluno"
                                            : "não tem aluno";

  $aExemplo = array(18101, 3, "José Alberto Matioli");
  echo "<br>";
  echo "<br>";

  echo "count: " . count($aExemplo);
  echo "<br>";
  echo "sizeof: " . sizeof($aExemplo);

  echo "<br><br>";
  echo "foreach: <br>";

  foreach ($aExemplo as $campo) {
    echo $campo.", ";
  }

  echo "<br><br>";
  echo "push: <br>";
  //adiciona ao final
  array_push($aExemplo, "Informática");

  foreach ($aExemplo as $campo) {
    echo $campo.", ";
  }
  echo "<br><br>";
  echo "pop: <br>";  
  //remove a ultima
  array_pop($aExemplo);
  foreach ($aExemplo as $campo) {
    echo $campo.", ";
  }

  echo "<br><br>";
  echo "unshift: <br>";  
  //remove a ultima
  array_unshift($aExemplo, "Informática");
  foreach ($aExemplo as $campo) {
    echo $campo.", ";
  }

  echo "<br><br>";
  echo "map: <br>";  
  function insereDelimitador($valor){
    return "[".$valor."]";
  }
  $meuArray = array_map("insereDelimitador", $aExemplo);
  foreach ($meuArray as $campo) {
    echo $campo.", ";
  }

  echo "<br><br>";
  echo "search: <br>";

  $key = array_search("3", $aExemplo);
  echo $key;

  echo "<br><br>";
  echo "in_array: <br>";

  echo in_array("18101", $aExemplo);

  echo "<br><br>";
  echo "shuffle: <br>";

  $aExemplo = array(18101, 3, "José Alberto Matioli");
  shuffle($aExemplo);
  print_r($aExemplo);

  echo "<br><br>";
  echo "sort e reverse sort (rSort): <br>";
  rsort($aExemplo);
  print_r($aExemplo);
  echo "<br>";
  sort($aExemplo);
  print_r($aExemplo);


  echo "<br><br>";
  echo "parseStr: <br>";
  $str = "curso1=Informatica&curso2=Edificações&curso3=Enfermagem";
  parse_str($str, $cursos);
  print_r($cursos);


  echo "<br><br>unset:<br>";
  unset($aExemplo[1]);
  print_r($aExemplo);
                            