<?php 

for ($i = 0; $i < 1000; $i += 5){  // $i é um contador, $i++ é imcremento

	if ($i > 200 && $i < 800) continue;

	echo $i . "<br>";
}



?>