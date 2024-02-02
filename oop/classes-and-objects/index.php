<?php
declare(strict_types=1);

class User {
  #properties 🔒
  private $username;
  private $userID;
  public static $quantityOfUsers;

  #constructor 🔨
  function __construct(string $_username, int $_userID) {
    $this->username = $_username;
    $this->userID = $_userID;
    self::$quantityOfUsers++;
  }

  #destructor 🧨
  function __destruct() {
    self::$quantityOfUsers--;
  }

  #method 🕓
  public function getData(string $target) {
    switch($target) {
      case "username":
        echo $this->username."<br/>";
        break;
      case "userID":
        echo $this->userID."<br/>";
        break;
    }

    return $this;
  }

  #static method
  public static function getQuantityOfUsers() {
    return "<p>The quantity of users is: ". self::$quantityOfUsers;
  }
}

#Method Chaining ⛓
$newUser = new User("Gabriel", 1234);
$newUser->getData("username")->getData("userID");

$anotherNewUser = new User("Paulo", 1987);
$anotherNewUser->getData("username")->getData("userID");
unset($anotherNewUser);

echo User::getQuantityOfUsers();