<?php
print "Hello World!\n";

function connection() {
  try {
    $dsn = new PDO('mysql:dbname=test;host=db','user','password');
    print "接続成功\n";
  } catch(PDOException $e) {
    print "接続失敗 :". $e->getMessage()."\n";
  }
};

connection();
