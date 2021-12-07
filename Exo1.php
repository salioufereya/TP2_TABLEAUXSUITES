<?php
function array_last($array) {
  if (count($array) < 1)
      return null;

  $keys = array_keys($array);
  return $array[$keys[sizeof($keys) - 1]];
}
$tab=['DIALLO','Mamadou','ABDOU'];
echo array_last($tab);