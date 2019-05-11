<?php
function cetak_gambar(){
	$string=['P','R','O','G','R','A','M','M','E','R'];
	for($i=1;$i<=10;$i++){
		for($j=1;$j<=10;$j++){
			if(($j==1&&$i==1)||($j==10&&$i==1)){
				echo"$string[0] ";
			}else{
				if(($i==2&&$j==2)||($j==9&&$i==2)){
					echo"$string[1] ";
				}elseif(($i==3&&$j==3)||($i==3&&$j==8)){
					echo "$string[2] ";
				}elseif(($i==4&&$j==4)||($i==4&&$j==7)){
					echo "$string[3] ";
				}elseif(($i==5&&$j==5)||($i==5&&$j==6)){
					echo "$string[4] ";
				}elseif(($i==6&&$j==5)||($i==6&&$j==6)){
					echo "$string[5] ";
				}elseif(($i==7&&$j==4)||($i==7&&$j==7)){
					echo "$string[6]";
				}elseif(($i==8&&$j==3)||($i==8&&$j==8)){
					echo"$string[7]";
				}elseif(($i==9&&$j==2)||($i==9&&$j==9)){
					echo"$string[8] ";
				}elseif(($i==10&&$j==1)||($i==10&&$j==10)){
					echo"$string[9] ";
				}else{
					echo"= ";
				}
			}
		}
		echo"<br>";
	}
}
cetak_gambar();
?>