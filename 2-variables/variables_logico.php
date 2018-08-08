<HTML>
 <head>
  <title>Mi primer script en PHP</title>
 </head>
 <body>
 	<?php
 	
 		// Aquí declararemos las variables
 		$txt = 'Hola Mundo';
 		$txt2 = 'PHP';
 		$txt3 = 'Desafío Latam';
 		$num1 = 12;
 		$num2 = 2;
 		
 		// Aquí imprimiremos el resultado
 		echo $txt . ". Me encanta aprender " . $txt2 . " en " . $txt3; 
 		echo "<br />";
 		echo $num1 + $num2;
 		echo "<br />";
 		echo $num1 - $num2;
 		echo "<br />";
 		echo $num1 * $num2;
 		echo "<br />";
 		echo $num1 / $num2;
 		echo "<br />";
 		echo $num1 % $num2;
 		echo "<br />";
 		echo $num1 / $num2 + $num2;
 		echo "<br />";
 		echo $num1 / ( $num2 + $num2 );
 	?>
</HTML>

