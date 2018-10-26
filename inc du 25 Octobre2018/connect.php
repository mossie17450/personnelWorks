<?php
/*     connexion   */

$link = mysqli_connect('localhost', '???','???','???');
	if (!$link) {
	die('Impossible de se connecter : ' . mysql_error());
	}

	?>
