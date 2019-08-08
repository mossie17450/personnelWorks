<?php

/*     connexion   */

$link = mysql_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');

echo "je suis connecté!";

	if (!$link) {

	die('Impossible de se connecter : ' . mysql_error());

	}



	?>