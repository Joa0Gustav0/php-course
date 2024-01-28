<?php
declare(strict_types=1);

//Scalar Data Types
#int | 1, 7, 9, 34
$age = 14;
echo "This variable stores an integer number value: {$age}<br/>";

#float | 1.25, 1.67, -35.77
$cash = 12.67;
echo "This variable stores a float number value: {$cash}<br/>";

#bool | true/false
$isOK = true;
echo "This variable stores a boolean value: {$isOK}<br/>";

#string | "Hello world!", "My name is Jasmine"
$name = "Paulo";
echo "This variable stores a string value: {$name}<br/>";

//Compound Data Types
#array | [1, 2, 3], ["hey", "bye", "wow"], [true, true, false]
$myArray = [1, "Gotcha!", 3];
echo "This variable stores an array: {$myArray[1]}<br/>";

#object

#callable

#interable

//Type Checking
$value = "I love coding ❤";

#gettype()
$valueType = gettype($value);
if ($valueType === "array") {
  print_r($value);
} else {
  echo "🤖 The value's ({$value}) data type is: {$valueType}<br/>";
}

#var_dump()
$valueType = var_dump($value);
echo "{$valueType} is the type checked. 🤖";

//2 Special Data Types
#null | null values
$null = null;
echo "<br/>" . gettype($null);

#resource

//Data Type Coercion/Juggling + Declaring Strict_Types; Type Casting


$number1 = (float) "1.6";
$number2 = 2;

function sum(float $value, int $anotherValue) {
  return $value + $anotherValue;
}

echo sum($number1, $number2);