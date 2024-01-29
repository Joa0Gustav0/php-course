<?php

function getCoordinates(array ...$axis) {

  $coordinatesArray = "( ";

  for ($index = 0; $index < count($axis[0]); $index++) {
    $coordinatesArray = $coordinatesArray."[{$axis[0][$index]}, {$axis[1][$index]}] ";

    if ($index === count($axis[0]) - 1) {
      $coordinatesArray = $coordinatesArray.")";
    }
  }

  return $coordinatesArray;
}

echo getCoordinates([9, 8, 3], [1, 1, 1]);