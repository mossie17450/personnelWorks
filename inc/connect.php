<?php
/*     connexion   */

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');
	if (!$link) {
	die('Impossible de se connecter : ' . mysql_error());
	}

	?>