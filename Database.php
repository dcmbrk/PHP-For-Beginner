<?php

class Database{
  public $connection;

  public function __construct(){
    $dsn = "mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;charset=utf8mb4";
    $this->connection = new PDO($dsn); 
  }

  public function query($query){
    $statement = $this->connection->prepare($query);
    $statement->execute();

    //Return statement luon de khi nao goi query() thi co the quyet dinh fetch hay fetchAll
    return $statement;
  }
}