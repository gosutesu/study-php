<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
$data = [
  '高江' => '男',
  '掛谷' => '女',
  '日尾' => '男'
];
foreach ($data as $key => $value) {
  print "{$key} : {$value}";
}
?>
</body>
</html>