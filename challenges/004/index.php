<?php

function getOnlyEvenNumbers(int ...$entryNumbers) {

  $numbers = $entryNumbers;

  foreach($numbers as $index => $number) {
    if ($number % 2 !== 0) {
      unset($numbers[$index]);
    }
  }

  foreach($numbers as $number) {
    echo "{$number}<br/>";
  }
}

getOnlyEvenNumbers(2, 5, 9, 7, 33, 6, 4, 8);