<?php

#switch
function displayOrderStatus(int $response) {
  switch($response) {
    case 0:
      return "Waiting for confirmation.";
    case 1:
      return "Preparing the order.";
    case 2:
      return "Deliverying order.";
    case 3:
      return "Order delivered.";
  }

  return "Status not available.";
}

echo "🍕".displayOrderStatus(1);

echo "<br/>";

#match
function displayQuoteAuthor(string $quote) {
  return match($quote) {
    "Só sei que nada sei..." => "This is a Big Plato's thought!",
    "Penso logo existo..." => "This is a Descartes's thought",
    default => "Sorry... I need to read more!",
  };
}

echo displayQuoteAuthor("Penso logo existo...");

