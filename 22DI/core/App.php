<?php

class App {
  protected static $registry = [
    // 最後的樣子
    // 'config' => [],
    // 'database' => $queryBuilder
  ];

  public static function bind($key, $value) {
    static::$registry[$key] = $value;
    // 將設定推到 $registry 的容器（陣列）
  }

  public static function get($key) {
    if (! array_key_exists($key, static::$registry)) {
      throw new Exception("No ${key} is bound in the container.");
    }

    return static::$registry[$key];
  }
}