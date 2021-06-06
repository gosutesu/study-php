<?php
print "Hello World!\n";

function connection() {
  try {
    $dsn = new PDO('mysql:dbname=test;host=db','user','password');
    $a =$dsn->query("select * from task");
    foreach ($a as $row) {
      print($row['id']);
      print($row['title'].'<br>');
      print($row['content'].'<br>');
    }
  } catch(PDOException $e) {
    print "接続失敗 :". $e->getMessage()."\n";
  }
};

connection();
