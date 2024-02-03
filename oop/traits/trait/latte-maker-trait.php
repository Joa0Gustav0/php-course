<?php

namespace App;

trait MakesLatte {
  public function makeLatte() {
    echo self::class . " is making a latte.<br/>";
  }
}