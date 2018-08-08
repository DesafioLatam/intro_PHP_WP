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
 		echo $txt . '. Me encanta aprender ' . $txt2 . ' en ' . $txt3; 
 		echo '<br />';
 		echo '<br />';
 		echo '<b>Aprendiendo condicionales:</b><br />';

 		if ($num1 > $num2) {
 			echo $num1 . ' es mayor que ' . $num2;
 		} elseif ($num1 == $num2){
 			echo $num1 . ' y ' . $num2 . ' son iguales';
  		} else {
  			echo $num1 . ' es menor que ' . $num2;
  		}
 	?>
</HTML>