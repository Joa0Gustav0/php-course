<?php

require "./coffee-maker.php";
use App\CoffeeMaker;
require "./latte-maker.php";
use App\LatteMaker;
require "./cappuccino-maker.php";
use App\CappuccinoMaker;
require "./all-in-one-maker.php";
use App\AllInOneMaker;

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$allInOneMaker = new AllInOneMaker(); 
$allInOneMaker->makeAllAtOnce();