<?php

namespace App;

trait MakesCappuccino {
  public function makeCappuccino() {
    echo self::class . " is making a cappuccino.<br/>";
  }
}