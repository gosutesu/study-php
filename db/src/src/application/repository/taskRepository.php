<?php

namespace application\repository;

use PDO;
/**
 * Task管理
 */
interface TaskRepository
{

    /**
     * Task一覧取得処理
     * @param PDO $connection
     * @return array
     */
  public function getTaskList(PDO $connection): array;
}
