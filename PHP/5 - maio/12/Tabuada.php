<?php

$n = 1;
$tabuada = 7;

echo "While: <br>";
while($n <= 10){
  echo $n . " x " . $tabuada . " = " . ($n * $tabuada) . "<br>";
  $n++;
}   

$n = 11;

echo "<br> Do While (n = 11): <br> ";
do {
  echo $n . " x " . $tabuada . " = " . ($n * $tabuada) . "<br>";
  $n++;
} while ($n <= 10);

echo "<br> For: <br> ";
for($n = 1; $n <= 10; $n++){
  if($n == 7) break;
  echo $n . " x " . $tabuada . " = " . ($n * $tabuada) . "<br>";
}

echo "<br> ForEach: <br> ";

$cores = array("Branco", "Verde", "Vermelho");

foreach($cores as $cor) {
  echo $cor . "<br>";
} 

echo "<br>"

function calcMedia($n1, $n2){
  $media = ($n1+$n2)/2;
  return $media;
}

$media = calcMedia(5.0, 9.0);

echo "Média = ". $media . "<br>";

if($media >= 6.0){
  echo "<span id='aprovado'>APROVADO!</span>";
}
else {
  echo "<span id='reprovado'>REPROVADO!</span>";
}