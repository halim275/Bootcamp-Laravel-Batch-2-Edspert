<?php
$arr = array(1,2,3,4,5);

$target = NULL;
$targetIndex = NULL;

foreach($arr as $key => $value) {
  if($value < 4 && $value > 2) {
    $target = $value;
    $targetIndex = $key;
  }
}

echo "ketemu nih, aku ada di index $targetIndex dengan nilai $target";
?>
