<?php
#while
$vehicles = [
  "🚙",
  "🛵",
  "🛫",
];

$v_index = 0;
while ($v_index < count($vehicles)) {
  echo $vehicles[$v_index];
  $v_index++;
}

echo "<br/>";

#do-while
$foods = [
  "🍿","🍟","🍕"
];

$f_index = 0;
do {
  echo $foods[$f_index];
  $f_index++;
} while ($f_index < count($foods));

echo "<br/>";

#for
$tools = [
  "💡",
  "🔪",
  "🔧",
];

for ($t_index = 0; $t_index < count($tools); $t_index++) {
  echo $tools[$t_index];
}

echo "<br/>";

#foreach
$natureElements = [
  "🌼","🌞","🌈"
];

foreach($natureElements as $index => $elem) {
  echo "The element at index {$index} is {$elem}<br/>";
}