<?php

namespace App;

trait MakesCoffee {
  public function makeCoffee() {
    echo static::class . " is making a coffee.<br/>"; 
  }
}