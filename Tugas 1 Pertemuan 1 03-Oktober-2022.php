<?php
	$arr = array(1,2,3,4,5);
	$sum = 0;
	foreach ($arr as $index => $val) {
	  echo "nilai index ke-$index = $val \n";
	  $sum += $val;
	}
	echo "jika dijumlahkan hasilnya $sum";
?>
