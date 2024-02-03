<?php

namespace App;
require_once "./trait/cappuccino-maker-trait.php";
use App\CoffeeMaker;

class CappuccinoMaker extends CoffeeMaker {
  use MakesCappuccino;
}