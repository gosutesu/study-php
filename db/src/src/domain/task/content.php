<?php

/**
 * タスク内容
 */
class Content {
  public string $title;

  public function __construct(string $title)
  {
    $this->$title = $title;
  }
}
