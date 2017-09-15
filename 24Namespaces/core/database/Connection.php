<?php
class Connection {
  public static function make($config) {
    try {
      return new PDO(
        $config['connection'].';dbname=mytodo',
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}