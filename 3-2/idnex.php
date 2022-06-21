<?php

$fruits = ["りんご" => 150, "みかん" => 150, "もも" => 300];
$num = [2, 1, 10];

function getTotal($price, $quantity) {
  $total = $price * $quantity;
  return $total;
}

foreach ($fruits as $key => $value) {
  if ($key == "りんご") {
    echo $key."は".getTotal($value,$num[0])."円です。";
    echo '<br>';
  } elseif ($key == "みかん") {
    echo $key."は".getTotal($value,$num[1])."円です。";
    echo '<br>';
  } elseif ($key == "もも") {
    echo $key."は".getTotal($value,$num[2])."円です。";
    echo '<br>';
  }
}

?>