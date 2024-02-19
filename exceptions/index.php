<?php

try {
  if (!isset($_GET["numero"])) {
    throw new \Exception("No number was inserted.");
  } else {
    throw new \Exception("The inserted number is: " . $_GET["numero"]);
  }
} catch (\Exception $e) {
  echo $e->getMessage();
}