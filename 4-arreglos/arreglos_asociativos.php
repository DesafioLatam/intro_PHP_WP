<HTML>
 <head>
  <title>Mis primeros arreglos en PHP</title>
 </head>
 <body>
 	<?php

 		// Aquí declararemos nuestro arreglo
 		$arreglo = array('primero', 'segundo', 'tercero', 3.5, 4, 5, 6, 7);

 		// Este es un arreglo asociativo
 		$color = array('pasto'=> 'verde', 'cielo'=>'celeste', 'mar'=>'azul');

 		// Aquí lo imprimiremos
 		echo 'La posición cero del arreglo es el ' . $arreglo[0];
 		echo '<br />';
 		echo 'La posición uno del arreglo es el ' . $arreglo[1];
 		echo '<br />';
 		echo 'El arreglo que acabamos de crear tiene ' . count($arreglo) . ' valores';
 		echo '<br />';
 		echo $color['pasto'];
 		echo '<br />';
 		echo $color['cielo'];
 		echo '<br />';
 		echo $color['mar'];
	?>
</HTML>
