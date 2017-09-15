<?php

class QueryBuilder {
  protected $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll($table) {
    $statement = $this->pdo->prepare("select * from ${table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters) {

    // php > $arr = ['one', 'two', 'three'];
    // php > var_dump(implode(', ', $arr));
    // // string(8) "one, two"

    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );

    try {
      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);
    } catch (Exception $e) {
      die('Oops' . $e->getMessage());
    }
  }
}

