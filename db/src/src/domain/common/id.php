<?php

namespace domain\common;

/**
 * ID
 */
class Id {
  public int $id;

  public function __construct(int $id)
  {
    $this->$id = $id;
  }
}
