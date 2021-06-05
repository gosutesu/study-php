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
    $this->connection = new PDO('mysql:dbname=test;host=db','user','password');    
  }

}
