<?php

namespace domain\task;

/**
 * タスク内容
 */
class Content {
  public $title;

  public function __construct(string $title)
  {
    $this->$title = $title;
  }
}
