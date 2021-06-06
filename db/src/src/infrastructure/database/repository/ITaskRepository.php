<?php

namespace infrastructure\database\repository;

use application\repository\TaskRepository;
use domain\common\Id;
use domain\task\Content;
use domain\task\Task;
use domain\task\Title;
use PDO;

/**
 * タスク実装クラス
 */
class ITaskRepository implements TaskRepository {


  /**
   * タスク一覧取得処理
   * @param PDO $connection
   * @return array
   */
  public function getTaskList(PDO $connection):array {
    $records =$connection->query('select * from task');
    $tasks = array();
    foreach ($records as $record) {
      $id = new Id($record['id']);
      $title = new Title($record['title']);
      $content = new Content($record['content']);
      $task = new Task($id,$content,$title);
      $tasks[] = $task;
    }
    return $tasks;
  }
}
