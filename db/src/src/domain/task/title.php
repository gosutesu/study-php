<?php

/**
 * タスクタイトル
 */
class Title {
  public string $title;

  public function __construct(string $title)
  {
    $this->$title = $title;
  }
}
