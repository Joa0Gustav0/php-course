<?php

require_once "crud.php";

function registerUser(array $entryUserData) {
  $crud = new CrudDatabase();
  $inUseEmails = $crud->setSQLStatement("SELECT UserEmail FROM users");

  $crud->setSQLStatement(
    "INSERT INTO users (UserName,UserAge,UserEmail) VALUES ('" . $entryUserData["username"] . "','" . $entryUserData["age"] . "','" . $entryUserData["email"] . "');"
  ); 
}