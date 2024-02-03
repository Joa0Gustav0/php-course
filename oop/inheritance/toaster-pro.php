<?php

namespace App;
require_once "./toaster.php";
use App\ToasterBasic;

class ToasterPro extends ToasterBasic {
  public function __construct(int $_capacity) {
    parent::__construct($_capacity);
  }

  public function toastBagel() {
    if (count(parent::getInsertedSlices()) === 0) {
      echo "No slices were inserted for toasting.";
    } else {
      foreach (parent::getInsertedSlices() as $index => $slice) {
        echo "The slice " . $index + 1 . " is being toasted on bagel mode.<br/>";
      }
      echo "The slices were toasted using bagel mode.";
    }
  }
}