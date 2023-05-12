<?php

for($i = 0 ; $i <= 100 ; $i = $i + 5 ){
	echo $i . "<br />";
}


// EX : Show from 3 to 99 incresing 3 numbers but not showing the 39 and 78




for($i = 3 ; $i <= 99 ; $i += 3){
	echo $i . "<br />";
	if ($i ==78 or $i==39) {
		
	} else {
		echo $i . "<br />";
	}
	
}
?>
