<?php

function cetak($x){

	$i = 1;

	while ($i <=$x) {

			echo substr(str_shuffle(md5(microtime())), 0, 32);

			echo "<br/>";

			$i++;

	}

}
echo"<b>Cetak</b><br><br>";
cetak(2);

?>