<?php

/* require "prettier.php";

$animalsArray = [
  "🕷"
  ,"🐍"
  ,"🐱"
  ,"🐻"
  ,"🐮"
  ,"🐫"
  ,"🦃"
  ,"🐶"
  ,"🦜"
];
$animalsArrayKeys = [
  "spider",
  "snake",
  "cat",
  "bear",
  "cow",
  "camel",
  "turkey",
  "dog",
  "parrot"
];

prettifyArray(array_combine(["group1", "group2", "group3"],array_chunk(array_filter(array_combine($animalsArrayKeys, $animalsArray), fn($elem, $key) => $key[0] !== "c", ARRAY_FILTER_USE_BOTH), 2, true))); */

#array_map()
echo "<h1>array_map()</h1>";

$oldArray = [2, 3, 4, 9];
$newArray = array_map(fn($elem) => $elem**2,$oldArray);

echo "<pre>";
print_r($newArray);
echo "</pre>";

#array_filter()
echo "<h1>array_filter()</h1>";
$mixedNumbers = [2, 6, 3, 7, 12, 35, 41];
$oddNumbers = array_filter($mixedNumbers, fn($elem) => $elem % 2 !== 0);

echo "<pre>";
print_r($oddNumbers);
echo "</pre>";

#array_reduce()
echo "<h1>array_reduce()</h1>";
$sales = [
  ["price" => 3.49, "quantity" => 10],
  ["price" => 3.49, "quantity" => 10],
  ["price" => 3.49, "quantity" => 10],
];

echo "Total: ".array_reduce($sales, fn($total, $elem) => $total + $elem["price"] * $elem["quantity"]);

#array_chunk()
echo "<h1>array_chunk()</h1>";
$singlePeople = [
  "Paulo",
  "Victor",
  "Silvio",
  "Letícia",
  "Marli",
  "Jaqueline",
];
$couples = array_chunk($singlePeople, 2);

echo "<pre>";
print_r($couples);
echo "</pre>";

#array_keys()
$keys = array_keys($couples);
$keys = array_map(fn($elem) => "couple{$elem}", $keys);

#array_combine()
echo "<h1>array_combine()</h1>";
$couples = array_combine($keys, $couples);
echo "<pre>";
print_r($couples);
echo "</pre>";

#array_merge()
echo "<h1>array_merge()</h1>";
$numbers_1 = [1, 2, 3];
$numbers_2 = [1, 2, 3];
$numbers_3 = [1, 2, 3];

echo "<pre>";
print_r(array_merge($numbers_1, $numbers_2, $numbers_3));
echo "</pre>";

#array_search()
echo "<h1>array_search()</h1>";

$vehicles = [
  "car" => "🚗",
  "motor" => "🛵",
  "plane" => "🛫",
];

function queryArrayElement($queryTarget, $array) {
  $foundElement = array_search($queryTarget, $array);

  if ($foundElement) {
    echo "The element {$queryTarget} is contained at the array's '{$foundElement}' index! ✅";
  } else {
    echo "The element {$queryTarget} is not contained at the array! ❌";
  }
}

queryArrayElement("🚗", $vehicles);