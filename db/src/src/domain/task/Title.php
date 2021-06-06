<?php

namespace domain\task;

/**
 * タスクタイトル
 */
class Title {
  public $title;

  public function __construct(string $title)
  {
    $this->$title = $title;
  }
}
