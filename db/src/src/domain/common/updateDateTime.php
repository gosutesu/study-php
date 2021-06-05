<?php

namespace domain\common;

use DateTime;

/**
 * 更新日時
 */
class UpdateDateTime {
  public DateTime $updateDateTime;

  public function __construct(DateTime $updateDateTime)
  {
    $this->$updateDateTime = $updateDateTime;
  }
}
