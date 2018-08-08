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
				echo ". Buenos días. Son las $hora hrs.<br />";
			} elseif ($hora > 12 && $hora <= 19) {
				echo ". Buenas tardes. Son las $hora hrs.<br />";
			} else {
				echo ". Buenas noches. Son las $hora hrs.<br />";
			};

		}
		
		// Llamando a las funciones
		saludo();
		horario(date('H:i'));
	?>
</HTML>