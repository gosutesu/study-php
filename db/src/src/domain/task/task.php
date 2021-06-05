<?php

namespace domain\task;

use domain\common\Id;
use Content;
use Title;

/**
 * タスク
 */
class Task {
  public Id $id;
  public Title $title;
  public Content $content;
  public DateTime $updateDateTime;
  public DateTime $createDateTime;
}
