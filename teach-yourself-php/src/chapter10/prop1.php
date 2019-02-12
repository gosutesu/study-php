<?php
/**
 * Created by PhpStorm.
 * User: yoshiki
 * Date: 2019-01-23
 * Time: 21:38
 */

require_once  'Person2.php';

$p = new Person2();

$p->lastName = '山田';
$p->firstName = '太郎';

print "<p>僕の名前は{$p->lastName}{$p->firstName}です。";
