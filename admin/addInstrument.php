<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Gestion des instruments de chirurgie</title>
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
	
</head>
<body>
	<?php
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
	
	
		// Variables vides pour les valeurs par défaut des champs
		$NomI="";
		$NomPhoto="";
		
		if(isset($_POST['envoi'])) {
			// Traitement de l'envoi de l'événement
			$NomI = htmlentities(addslashes($_POST['NomI']));
			$NomPhoto=htmlentities(addslashes($_POST['nomPhoto']));
			$categorie=htmlentities(addslashes($_POST['categorie']));
			$specificite=htmlentities(addslashes($_POST['specificite']));
			$longueur=htmlentities(addslashes($_POST['longueur']));
			$quantite=htmlentities(addslashes($_POST['quantite']));
			
			 if (empty($_POST['NomI'])) {

   $nameErr = "pas de nom d'instrument!";

	echo $nameErr;

	$NomI=NULL;

  } else {

    $NomI = $_POST['NomI'];
	//$lien=utf8_encode($lien);
  }
  
  if (empty($_POST['nomPhoto'])) {

   $nameErr = "pas de nom de photo!";

	echo $nameErr;

	$NomPhoto=NULL;

  } else {

    $NomPhoto= $_POST['nomPhoto'];
	//$lien=utf8_encode($lien);
  }
  
   if (empty($_POST['categorie'])) {

   $nameErr = "pas de categorie";

	echo $nameErr;

	$categorie=NULL;

  } else {

    $categorie = $_POST['categorie'];
	
  }
  
   if (empty($_POST['specificite'])) {

   $nameErr = "pas de nom d'instrument!";

	echo $nameErr;

	$specificite=NULL;

  } else {

    $specificite = $_POST['specificite'];
	
  }
  
  if (empty($_POST['longueur'])) {

   $nameErr = "pas de longueur!";

	echo $nameErr;

	$longueur=NULL;

  } else {

    $longueur = $_POST['longueur'];
	
  }
   if (empty($_POST['quantite'])) {

   $nameErr = "pas de quantite!";

	echo $nameErr;

	$quantite=NULL;

  } else {

    $quantite = $_POST['quantite'];
	
  }
			
				if(!empty($NomI)&&!empty($NomPhoto)&&!empty($categorie)&&!empty($specificite)&&!empty($longueur)&&!empty($quantite)) {
					// Traitement de l'enregistrement de l'événement
					$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');
					
					
					$req = "INSERT INTO instruments (idInstrument, nomInstrument, nomPhoto, categorie, specificites, longueur, quantiteTotale)VALUES('','$NomI','$NomPhoto','$categorie','$specificite','$longueur','$quantite')";
					mysqli_query($link,$req) or die(mysqli_error());
					
					mysqli_close($link);
					
					echo '<ul><li>Nom de l\'instrument enregistré !</li></ul>';
				} else {
					echo '<ul><li>Nom de l\'instrument non renseigné.</li></ul>';
				}
			
		}
	?>
    
    <!-- Formulaire d'envoi -->
	<h1>Ajouter un instrument</h1>
    
    <form method="post" action="addInstrument.php">
    	<table id="tabAjoutEvent">          
       		<tr>
       			<td colspan="2"><br/>
                	<label for="NomI">Nom de l'instrument :</label><br/>
       				<input type="text" name="NomI" id="NomI" size="30" value="<?php echo "NomI" ?>" /><br/><br/>
                </td>
       		</tr>
			<tr>
			<tr>
            	<td colspan="2">
       				<label for="nomPhoto">nom de la photo de l'instrument:</label><br/>
					<input type="text" name="nomPhoto" id="nomPhoto" size="30" value="<?php echo "nomPhoto" ?>" /><br/><br/>
       			
                </td>
            </tr>
            	<td colspan="2">
       				<label for="specificite">specificite de l'instrument :</label><br/>
       				<textarea rows="3" cols="50" id="specificite" name="specificite" ><?php echo "specificite" ?></textarea>
                </td>
            </tr>
			
            
			 <tr>
            	<td colspan="2">
       				<label for="longueur">longueur de l'instrument en mm:</label><br/>
					<input type="text" name="longueur" id="longueur" size="30" value="<?php echo "longueur" ?>" /><br/><br/>
       			
                </td>
            </tr>
            <tr>
			 <tr>
            	<td colspan="2">
       				<label for="categorie">Categorie</label><br/>
					<input type="radio" name="categorie" id="categorie" size="30" value="ciseaux">ciseaux
					<input type="radio" name="categorie" id="categorie" size="30" value="pinces">pince
					<input type="radio" name="categorie" id="categorie" size="30" value="spatule ou autre">spatule ou autre			
                </td>
            </tr>
			
	 <tr>
            	<td colspan="2">
       				<label for="quantite">Quantite </label><br/>
					<input type="text" name="quantite" id="quantite" size="30" value="<?php echo "quantite" ?>" /><br/><br/>
       			
                </td>
            </tr>		
			
            <tr>
			
            	<td colspan="2"><input type="submit" name="envoi" value="Envoyer"/></td>
            </tr>
       </table>
    </form>
    

 <ul><li><a href="ajoutevent.php">Ajouter un evenement</a></li>
		<li><a href="supprevent.php">Supprimer un événement</a></li>
		<li><a href="publicationsMaJ.php">Ajouter une publication</a></li>
        <li><a href="ajoutPost.php">afficher une proposition de poste sur notre page "Offre de poste"</a></li>
		<li><a href="supprimeposte.php">supprimer l'affichage de postes sur notre page "Offre de poste"</a></li>
		<li><a href="ajoutPost.php">afficher une proposition de stage sur notre page "Offre de stage"</a></li>
		<li><a href="supprimeposte.php">supprimer l'affichage de stages sur notre page "Offre de stage"</a></li>
		<li><a href="NouveauStagiaire.php">Ajouter un nouveau stagiaire à la liste</a></li>
		<li><a href="listeCV.php">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href="listeContacts.php">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href="addInstrument">gestion des instruments</a></li>	
		<li><a href="../index.php">Retourd à l'acceuil</a></li>	
		</ul>
	
	
    <p class="centre"><br/><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>