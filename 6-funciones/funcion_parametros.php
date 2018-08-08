<HTML>
 <head>
  <title>Mis primeros funciones en PHP</title>
 </head>
 <body>
 	<?php
 		// Definiendo las funciones
		function saludo(){
		    echo 'Hola Mundo';
		}

		function horario($hora) {
			if ($hora <= 12){
				echo '. Buenos días. <br />';
			} elseif ($hora > 12 && $hora <= 19) {
				echo '. Buenas tardes. <br />';
			} else {
				echo '. Buenas noches. <br />';
			};

		}
		
		// Llamando a las funciones
		saludo();
		horario(10);

		saludo();
		horario(14);

		saludo();
		horario(21);
	?>
</HTML>