<?php

namespace App;
use App\CoffeeMaker;

class AllInOneMaker extends CoffeeMaker {
  use MakesLatte;
  use MakesCappuccino;

  public function makeAllAtOnce() {
    $this->makeCoffee();
    $this->makeLatte();
    $this->makeCappuccino();
  }
}