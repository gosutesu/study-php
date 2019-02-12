<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
$rank = '甲';
switch($rank) {
  case '甲' :
    print '大変いいです';
    break;
  case '乙' :
    print 'いいです';
    break;
  default :
    print '???';
    break;
}
?>
</body>
</html>