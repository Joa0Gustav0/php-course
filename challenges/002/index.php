<?php

function getFactorial(int $number) {

  $number_var = $number;

  for ($index = $number_var - 1; $index > 0; $index--) {
    $number_var = $number_var * $index;
  }

  echo "The factorial of {$number} is: <br/>";
  return $number_var;
}

echo getFactorial(13);