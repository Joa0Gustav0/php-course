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
  public function getData() {
    echo "username: {$this->username}";
    echo "<br/>";
    echo "userID: {$this->userID}";
  }
}

$newUser = new User("Paulo", 1234);
$newUser->getData();