<?php
declare(strict_types=1);

class User {
  #properties 🔒
  private $username;
  private $userID;

  #constructor 🔨
  function __construct(string $_username, int $_userID) {
    $this->username = $_username;
    $this->userID = $_userID;
  }

  #method 🕓
  public function getData(string $target) {
    switch($target) {
      case "username":
        echo $this->username;
        break;
      case "userID":
        echo $this->userID;
        break;
    }

    return $this;
  }
}

$newUser = new User("Gabriel", 1234);
#Method Chaining
$newUser->getData("username")->getData("userID");