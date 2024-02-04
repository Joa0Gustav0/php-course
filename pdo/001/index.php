<?php
require_once "db-handler.php";

$crud = new CrudDatabase();
$usersData = $crud->fireSQLStatement("SELECT * FROM users");

foreach($usersData as $user) {
  echo "<p>👋 Hello, " . $user['UserName'] . "!</p>";
  echo "<p>It seens you are the {$user['UserID']}º user.</p>";
  echo "<p>Age: " . $user['UserAge'] . " years old.</p>";
  echo "<p>Email: " . $user['UserEmail'] . "</p>";
  echo "<hr/>";
}

