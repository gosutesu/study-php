<?php

/**
 * DB接続管理
 */
class Database 
{

  /** コネクション */
  public $connection;

  public function __construct() 
  {
    try {
      $this->connection = new PDO('mysql:dbname=test;host=db','user','password');    
    } catch(PDOException $e) {
      print '接続失敗 :'. $e->getMessage()."\n";
    }
    }

}
