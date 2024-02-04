<?php
require_once "register.php";
require_once "crud.php";

if (isset($_POST["submit"])) {
  registerUser($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Inserting Data Into Database</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="username">
      Name:
      <input type="text" name="username" id="username" placeholder="Insert a name..." autocomplete="off">
    </label>
    <label for="age">
      Age:
      <input type="number" name="age" id="age" placeholder="Insert an age..." autocomplete="off">
    </label>
    <label for="email">
      Email:
      <input type="text" name="email" id="email" placeholder="Insert an email..." autocomplete="off">
    </label>
    <input type="submit" name="submit" value="Register">
  </form>
  
  <ul class="users-list">
    <?php
      $conn = new CrudDatabase();
      $usersData = $conn->setSQLStatement("SELECT * FROM users");

      foreach($usersData as $user) {
        echo "<li class='user-container'>";
        echo "<h1 class='user-container__greeting-text'>👋 Hello, {$user['UserName']}</h1>";
        echo "<p class='user-container__sub-headline'>You are the user number {$user['UserID']}.</p>";
        echo "<p class='user-container__information-field'><span>Age: </span>{$user['UserAge']}</p>";
        echo "<p class='user-container__information-field'><span>Email: </span>{$user['UserEmail']}</p>";
        echo "</li>";
      }
    ?>
  </ul>
</body>
</html>