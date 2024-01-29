<?php

function repeatStringCharacters(string $entryString, int $repeatingTimes) {
  if ($repeatingTimes <= 0) {
    return $entryString;
  }

  $repeatedString = "";

  for ($index = 0; $index < strlen($entryString); $index++) {
    for ($lap = 0; $lap < $repeatingTimes; $lap++) {
      $repeatedString = $repeatedString.$entryString[$index];
    } 
  }

  return $repeatedString;
}

echo repeatStringCharacters("mice", 5);