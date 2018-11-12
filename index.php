<?php 
 for ($i=1; $i < 5; $i++) { 
 	for ($j=1; $j < 5; $j++) { 
 	   for ($k=1; $k < 5; $k++) { 
 	   	if ($i!=$j && $i != $k && $j != $k) { 
 	   		echo $i*100+$j*10+$k."<br>";
 	   	}
 	   }
 	}
 }
?>