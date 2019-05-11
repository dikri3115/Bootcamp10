<?php
$z=array('a','c','b');
$y=array('a','t');
function cetak($y,$z){
	sort($z);
	sort($y);
	print_r(max($z ));
	print_r(max($y ));
}
cetak($y, $z);
?>