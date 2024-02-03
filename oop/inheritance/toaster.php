<?php
namespace App;

class ToasterBasic {
  private array $insertedSlices = [];
  private int $capacity;

  public function __construct(int $_capacity) {
    $this->capacity = $_capacity;
  }

  public function getCapacity() {
    return $this->capacity;
  }
  public function getInsertedSlices() {
    return $this->insertedSlices;
  }

  public function insertSlice(string $slice) {
    if (count($this->insertedSlices) >= $this->getCapacity()) {
      echo "You already reached it's maximum capacity ({$this->getCapacity()}).";
    } 
    
    $this->insertedSlices[] = $slice;
    return $this;
  }

  public function toast() {
    if (count($this->insertedSlices) === 0) {
      echo "No slices were inserted for toasting.";
    } else {
      foreach ($this->insertedSlices as $index => $slice) {
        echo "The slice " . $index + 1 . " is being toasted.<br/>";
      }
      echo "The slices were toasted.";
    }
  }
}