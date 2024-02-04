<?php

$databaseHost = "localhost";
$databaseName = "PDODb";
$databaseUser = "root";
$databasePassword = "2409SQLGustav@@2409";

function createDatabaseConnection(
  $databaseHost = "localhost",
  $databaseName = "PDODb",
  $databaseUser = "root",
  $databasePassword = "2409SQLGustav@@2409"
) {
  try {
    return new PDO(
      "mysql:host={$databaseHost};dbname={$databaseName}",
      $databaseUser,
      $databasePassword
    );
  } catch(PDOException $processError) {
    echo "Database connection error.";
  }
}

class CrudDatabase {
  public $connection;

  public function __construct() {
    $this->connection = createDatabaseConnection();
  }

  public function setSQLStatement(
    string $SQLStatement
  ) {
    try {
      return $this->connection->query($SQLStatement);
    } catch(PDOException $error) {
      echo $error->getMessage();
    }
  }
}