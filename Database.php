<?php

class Database
{

  public $connection;

  public function __construct($config, $username, $password)
  {


    $dsn =  http_build_query($config, '', ';');
    dd($dsn);
    $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
  }

  public function query($query)
  {
    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement;
  }
}
