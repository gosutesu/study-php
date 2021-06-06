<?php

namespace domain\common;

/**
 * ID
 */
class Id {
  public $id;

  public function __construct(int $id)
  {
    $this->$id = $id;
  }
}
