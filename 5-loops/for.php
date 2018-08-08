<HTML>
 <head>
  <title>Mis primeros loops en PHP</title>
 </head>
 <body>
	<?php

		// Variables
		$x = 1;
		$y = 1;

		// Loop while
		echo '<b>Loop con while:</b> <br />';

		while( $x <= 5 ) {
		    echo "El número es: $x <br />";
		    $x++;
		}

		// Salto de línea
		echo '<br />';
		echo '<b>Loop con do-while:</b> <br />';

		// Loop do-while
		do {
		    echo "El número es: $y <br />";
		    $y++;
		} while ($y <= 5);

		// Salto de línea
		echo '<br />';
		echo '<b>Loop con for:</b> <br />';

		// Loop for
		for ($z = 1; $z <= 5; $z++) {
		    echo "El número es: $z <br />";
		}
	?>
</HTML>
