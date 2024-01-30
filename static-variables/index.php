<?php
function echoSum() {
  static $number = 2;

  if ($number !== null) {
    echo 2 + $number;
    $number = null;
    return;
  }

  echo "No number contained for executing the sum.";
  $number = 2;
}

echoSum();
echo "<br/>";
echoSum();
echo "<br/>";
echoSum();
echo "<br/>";
echoSum();