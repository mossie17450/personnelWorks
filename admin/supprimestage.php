<?php
session_start();

	function get_ip()
{
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		
	}
	elseif(isset($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	else
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	//echo $ip;
	return $ip;	
}

	    if ( !(preg_match('#194.167.179.10#', get_ip())) ) // || (preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || (preg_match('#fe80::8eb:d45:23f4:5142#', $ip))) )


	{ 

// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"../index.php". 

		"\">RETOUR</a></body></html>"; 
//retourd à la page d'acceuil du site...


       	 exit; } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1" />
    <title>Gestion de calendrier | Suppression d'événement</title>
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
</head>
<body>
	<?php
		

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');					
	 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

		$nbStages = false;
		if(isset($_GET['idStage']) && is_numeric($_GET['idStage'])) {
			// Traitement de la suppression de l'événement
			$idS = htmlentities($_GET['idStage']);
			echo "supprimer :".$idS;
			$req = "DELETE FROM stage WHERE idStage = " .$idS;
			mysqli_query($link,$req);
	
			echo '<ul><li>stage supprimé à l\'affichage !</li></ul>';
		}
		
		
		// Récupération des événements
		$req = "SELECT * FROM stage";
		$stage = mysqli_query($link, $req);
		
		if(mysqli_num_rows($stage))
		$nbStages = true;
		else $nbStages = false;
		
		
		mysqli_close($link);
	?>
    
	<h1>Supprimer un stage</h1>
	
    <?php
	if($nbStages) {
		
		while($stages = mysqli_fetch_array($stage,MYSQLI_BOTH)) {
			echo '
			<table class="listeEvent">
				<tr><td>'.html_entity_decode($stages['titreStage']).'</td></tr>
				<tr><td>'.html_entity_decode($stages['descriptionStage']).'</td></tr>
				<tr><td><a href="../admin/www/'.$stages['NomStagePDF'].'">lien vers le pdf</a></td></tr>
				<tr><td><a href="supprimestage.php?idStage='.html_entity_decode($stages['idStage']).'">Supprimer</a></td></tr>
			</table>
			<br/><br/>
			';
		}
		
	} else {
		
		echo '<p>Il n\'y a pas de stage à supprimer</p>';
		
	}
	echo "

 <ul><li><a href=\"../admin/ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href=\"../admin/supprevent.php\">Supprimer un événement</a></li>
		<li><a href=\"../admin/publicationsMaJ.php\">Ajout d'une publication</a></li>
        <li><a href=\"../admin/ajoutPost.php\">affichage de postes proposés</a></li>
		<li><a href=\"../admin/supprimeposte.php\">suppression de l'affichage de postes proposés</a></li>
		<li><a href=\"../admin/ajoutStage.php\">affichage de stages proposés</a></li>
		<li><a href=\"../admin/supprimestage.php\">suppression de l'affichage de stages proposés</a></li>
		<li><a href=\"NouveauStagiaire.php\">Ajouter un nouveau stagiaire</a></li>
		<li><a href=\"../admin/listeCV.php\">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href=\"../admin/listeContacts.php\">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href=\"../index.php\">Retourd à l'acceuil</a></li>
		
		</ul>";
// Fin  de la page d'administration, en developpement! 
	?>
    
    
    <p class="centre"><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>