<?php
  // $op = $_GET["op"];
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

