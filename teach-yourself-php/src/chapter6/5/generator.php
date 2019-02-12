<?php
/**
 * Created by PhpStorm.
 * User: yoshiki
 * Date: 2019-01-21
 * Time: 21:45
 */

function myGen() {
  yield 'アイウエオ';
  yield 'かきくけこ';
  yield 'さしすせそ';
}

foreach (myGen() as $value) {
  print $value.'<br />';
}