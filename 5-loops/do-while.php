<HTML>
 <head>
  <title>Mis primeros loops en PHP</title>
 </head>
 <body>
	<?php

		// Variables
		$x = 6;
		$y = 6;

		// Loop while
		while( $x <= 5 ) {
		    echo "El número es: $x <br />";
		    $x++;
		}

		// Salto de línea
		echo '<br />';

		// Loop do-while
		do {
		    echo "El número es: $y <br />";
		    $y++;

		} while( $y <= 5 );
	?>
</HTML>
