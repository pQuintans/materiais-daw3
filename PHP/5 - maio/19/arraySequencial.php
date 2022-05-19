<?php

  $aExemplo = array(18101, 3, "José Alberto Matioli");
  echo $aExemplo[0] . "-" . $aExemplo[2]
  $aExemplo[2] = "J. A. Matioli";
  echo "<br>"
  echo $aExemplo[0] . "-" . $aExemplo[2];

  $aExemplo = array("ra"=>18101,
                    "serie"=>3
                    "nome"=>"José Alberto Matioli")
  echo $aExemplo["ra"] . "-" . $aExemplo["nome"];
  $aExemplo["nome"] = "J. A. Matioli";
  echo "<br>"
  echo $aExemplo["ra"] . "-" . $aExemplo["nome"];