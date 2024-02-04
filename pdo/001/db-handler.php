<?php
require_once "db-connection.php";

class CrudDatabase {
  private $connection;

  public function __construct() {
    $this->connection = createDatabaseConnection();
  }

  public function fireSQLStatement(string $entrySQLStatement) {
    return $this->connection->query($entrySQLStatement);
  }
}