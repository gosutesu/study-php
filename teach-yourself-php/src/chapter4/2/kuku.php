<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
print '<table>';
for($i = 1; $i <= 9; $i++) {
  print '<tr>';
  for($j = 1; $j  <= 9; $j++) {
    print "<td>".$i*$j."</td>";
  };
  print '</tr>';
};
print '</table>';
?>
</body>
</html>