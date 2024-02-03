<?php

namespace App;
require_once "./trait/latte-maker-trait.php";
use App\CoffeeMaker;

class LatteMaker extends CoffeeMaker{
  use MakesLatte;
}