<?php

function modifyArray(&$arr) {
  $arr[] = "new item";
}

$originalArray = ["first", "second"];

modifyArray($originalArray);
echo implode(", ", $originalArray);

?>