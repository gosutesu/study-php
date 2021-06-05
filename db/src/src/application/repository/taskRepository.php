<?php

/**
 * Task管理
 */
interface TaskRepository
{
  /** Task取得処理 */
  public function getTask();
  /** Task一覧取得処理 */
  public function getTaskList();
  /** Task更新処理 */
  public function update();
  /** Task登録処理 */
  public function register();
}
