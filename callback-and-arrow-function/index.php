<?php

$partyGuests = [
  "Paulo",
  "Pedro",
  "José Gabriel",
];

$confirmedPresence = array_map(fn($guest) => "{$guest} is confirmed to party.",$partyGuests);

echo "<pre>";
print_r($confirmedPresence);
echo "<pre/>";