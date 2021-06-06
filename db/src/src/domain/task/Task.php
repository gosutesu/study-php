<?php

namespace domain\task;

use domain\common\Id;

/**
 * タスク
 */
class Task {
  /** タスクID */
  public $id;
  /** タスク タイトル */
  public $title;
  /** タスク 内容 */
  public $content;

  public function __construct(Id $id, Content $content, Title $title)
  {
    $this->id = $id;
    $this->content = $content;
    $this->title = $title;
  }
}
