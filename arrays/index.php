<?php
declare(strict_types=1);
$animals = [
  "🐵",
  "🐮",
  "🐱",
  "🐀",
  "🐜",
  "🐔",
  /* "🦜",
  "🐶",
  "🦅",
  "🦆",
  "🦢" */
];

//Pushing Elements
#Empty Index
$animals[] = "🦜";
#array_push()
array_push($animals, "🐶", "🦅", "🦆", "🦢");

print_r($animals);

echo "<br/><br/>";

//Associative Arrays
$noisyAnimals = [
  "🐥" => "🐥Piu-piu",
  "🐕" => "🐕Au-au",
  "🐈" => "🐈Miau",
];

//Pushing associative array
$noisyAnimals["🦁"] = "🦁 roar";

#🐥🐕🐈🦁
echo $noisyAnimals["🦁"];

//Multi-Dimensional Arrays
$users = [
  "user0" => [
    "username" => "Paulo",
    "password" => "Paulo123",
  ],
  "user1" => [
    "username" => "Maria",
    "password" => "Maria123",
  ],
];


print_r($users["user0"]);
