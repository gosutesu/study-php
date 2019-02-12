<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
function getTriangleArea(int $base,int $height): int {
  return $base * $height / 2;
}
$area = getTriangleArea(4,8);
print "三角形の面積は{$area}です。"
?>
</body>
</html>