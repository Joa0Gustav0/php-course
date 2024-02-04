<?php

function createDatabaseConnection(
  string $host = "localhost",
  string $databaseName = "PDODb",
  string $user = "root",
  string $password = "2409SQLGustav@@2409"
) {
  try {
    return new PDO(
      "mysql:host={$host};dbname={$databaseName}",
      $user,
      $password
    );
  } catch (PDOException $error) {
    echo "Failed to connect to database: " . $error->getMessage();
  }
  
}