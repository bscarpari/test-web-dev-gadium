<?php
function test($a, &$b) {
  $a += 5;
  $b *= 2;
  return $a++ + $b;
}

$x = 10;
$y = 5;

$result = test($x, $y);
echo $result . " e " . $y;