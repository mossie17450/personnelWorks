<?php
session_start();
?>
<!DOCTYPE html>
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Gestion de calendrier | Ajout d'événement</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
	<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />
</head>
	<?php include'../inc/languesParDefauthtml.php';?>
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
//echo get_ip();
	   if ( !(preg_match('#194.167.179.10#', get_ip())) )  // || 
	//if(	!(preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || !(preg_match('#fe80::8eb:d45:23f4:5142#', $ip))) 
 
	{ 

// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"../index.php". 

		"\">RETOUR</a></body></html>"; 
//retourd à la page d'acceuil du site...


       	 exit; 
		 } 



/*
	    if ( !(preg_match('#194.167.179.10#', get_ip())) ) // || (preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || (preg_match('#fe80::8eb:d45:23f4:5142#', $ip))) )*/
	//{ 
// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 
   //    	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"../index.php\">RETOUR</a></body></html>"; 
//retourd à la page d'acceuil du site...
     //  	 } 
		
		

	?>
 
  <?php	
 if (isset($_POST['envoyer'])){
  if (empty($_POST['titre'])) {

    $nameErr = "Donnez un titre à l'événement.<br/>";

	echo $nameErr;

	$titreE=NULL;

  } else {
	//encode en utf8 pour les blèmes d'accents...
    $titre = $_POST['titre']; 
	$titre=utf8_encode($titre);//ok correct dans la BD...
  }

if (empty($_POST['description'])) {

    $nameErr = "Décrivez l'évenement?<br/>";

	echo $nameErr;

	$description=NULL;

  } else {
//$description=(mysql_real_escape_string($_POST['description']));
    $description = $_POST['description'];
	$description=utf8_encode($description);
  }

 if (empty($_POST['lien'])) {

   /* $nameErr = "ou est <br/>";

	echo $nameErr; */

	$lien=NULL;

  } else {

    $lien = $_POST['lien'];
	$lien=utf8_encode($lien);
  }

  
//echo basename($_FILE['actu']); //pour le dev... nom du fichier téléchargé
//echo basename($_FILE['logo']);
$dossier = '../html/www/';
$fichier = basename($_FILES['actu']['name']); 
$fichierlogo = basename($_FILES['logo']['name']); 
include("../inc/connect.php");
//il y a telechargement d'un fichier et dans ce cas, la valeur du nom du fichier n'est pas null autrement dit si il existe.
if($fichier!=NULL) 
{

$taille_maxi = 8000000;

$taille = "<br>".filesize($_FILES['actu']['tmp_name']); 
//echo "<br/>taille :".$taille."!";

$extensions = array('.jpg', '.jpeg', '.pdf','.doc','.txt','.zip','.rar','.png');

$extension = strrchr($_FILES['actu']['name'], '.'); 

$date=date("Y-m-d h-i-sa"); //aujourd'hui...

$fichier=$date.$fichier;  //concatenation fichier et date ???

$fichier=utf8_encode($fichier);  //encodage pour la BD Mysql en utf8bom...
//echo "premier fichier: ".$fichier; //developpement

//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type  jpg, jpeg, png, zip, rar, pdf, txt ou doc...';
	echo $erreur;
}



if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
	}
    
	$fichier=utf8_decode($fichier);
//echo "nom du fichier: ".$fichier;  //pour le developpement
	 if(move_uploaded_file($_FILES['actu']['tmp_name'], $dossier.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		
         { 
		 	//echo "nom du fichier: ".$fichier; //pour le developpement	
		 echo 'Upload effectué avec succès !<br>';
		 } 
		//  else "<br>mince! qu'est-ce qui ce passe?<br>";//pour le développement
		
}		
//fin du traitement du téléchargement de la piece à télécharger....

//traitement du téléchargement du logo ...
if($fichierlogo!=NULL) 
{

$taille_maxilogo = 100;

$taille = "<br>".filesize($_FILES['logo']['tmp_name']); 
//echo "<br/>taille :".$taille."!";

$extensions = array('.jpg', '.jpeg', '.pdf','.doc','.txt','.zip','.rar', '.png');

$extension = strrchr($_FILES['logo']['name'], '.'); 

$date=date("Y-m-d h-i-sa"); //aujourd'hui...

$fichierlogo=$date.$fichierlogo;  //concatenation fichier et date ???

$fichierlogo=utf8_encode($fichierlogo);  //encodage pour la BD Mysql en utf8bom...
//echo "premier fichier: ".$fichier;

//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type  jpg, jpeg, png, zip, rar, pdf, txt ou doc...';
	echo $erreur;
}



if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...

     $fichierlogo = strtr($fichierlogo, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichierlogo = preg_replace('/([^.a-z0-9]+)/i', '-', $fichierlogo);
	}
    
	$fichierlogo=utf8_decode($fichierlogo);
//echo "nom du fichier: ".$fichier;  //pour le developpement
	 if(move_uploaded_file($_FILES['logo']['tmp_name'], $dossier.$fichierlogo)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		
         { 
		 	//echo "nom du fichier: ".$fichier; //pour le developpement	
		 echo 'Upload effectué avec succès !<br>';
		 } 
		//  else "<br>mince! qu'est-ce qui ce passe?<br>";//pour le développement
		
}		
//fin du traitement du téléchargement de la piece à télécharger....


		 if((empty($_POST['debut']))||(empty($_POST['fin']))) echo "les champs \"date\" du formulaire ne sont pas remplis";
		
	
		if((!empty($_POST['debut']))&&(!empty($_POST['fin']))){
			$tabDateDeb=htmlentities($_POST['debut']);
			$tabDateFin=htmlentities($_POST['fin']);
			
			
			echo "je suis là!<br>"; //pour le developpement
		echo $tabDateDeb ."<br>";
			echo $tabDateFin;
			$typeDate = "#^[0-3]?[0-9]/[0-1]?[0-9]/[0-9]{4}$#";  //jour/mois/année : 0 à 3? 0 à 9 / etc...
			
			if (preg_match($typeDate, $tabDateFin)) {
			//echo "youpie!!!<br>"; //pour le developpement
		
			//if ((preg_match($typeDate, $tabDateFin))&&(preg_match($typeDate, $tabDateDeb)) ) //ligne sensible...
			//echo "les dates sont conforme<br>";
			
			//echo $tabDateDeb."<br>"; //pour le developpement
			//echo $tabDateFin;
				
				$tabDateDeb = explode("/", $tabDateDeb);
				$timestampDebut = mktime(0, 0, 0, $tabDateDeb[1], $tabDateDeb[0], $tabDateDeb[2]);
				//echo $timestampDebut;
				
				$tabDateFin = explode("/", $tabDateFin);
				$timestampFin = mktime(0, 0, 0, $tabDateFin[1], $tabDateFin[0], $tabDateFin[2]);
				//	echo $timestampFin;
				}
				else "date non conforme";
		
				if(!empty($titre) && !empty($description)) {
					// Traitement de l'enregistrement de l'événement
					echo "Nous stockons les informations dans la BD...<br>";
					$identifiantCommun = time();
					$timeDuJour = $timestampDebut;
					//echo "Jour: ".$timeDuJour."<br>"; //pour le developpement
					$timeFin=$timestampFin;
					
					//echo "Les times et identifiant comment sont  OK";
					//echo "fin de l'evenement: ".$timeFin; //pour le developpement
					
					//echo "tant pis!";
					
					include("../inc/connect.php"); //connection en objet
					//echo "connecter!";
					
					
					
					$req = "INSERT INTO evenements VALUES($identifiantCommun, '$titre', '$description', '$fichier','$fichierlogo', '$lien', 1)";
					mysqli_query($link,$req) or die(mysqli_error());
					
					$req1 = "INSERT INTO calendrier(jour_evenement, jour_fin_evenement, mois_evenement, mois_fin_evenement, annee_evenement, annee_fin_evenement, id_evenement) VALUES 
						( ".date('d', $timeDuJour).", ".date('d', $timeFin).", ".date('m', $timeDuJour).", ".date('m', $timeFin).", ".date('Y', $timeDuJour).", ".date('Y', $timeFin).", '$identifiantCommun' ) ";
						mysqli_query($link, $req1) or die(mysqli_error($link));
					
					//echo"coucou";
					
						
					echo '<ul><li>L\'événement est enregistré!</li></ul>';
								
						}	
	}
}	
mysqli_close($link);
 ?>
 
<h1 align="center">Espace intranet du CIC-IT de Bordeaux</h1>
 
<nav>
<ul id="menu">
		<li><a href="ajoutevent.php">évènements</a><ul></li>
		<li><a href="supprevent.php">Suppr- évènement</a></ul></li>
		<li><a href="publicationsMaJ.php">les publications</a></li>
        <li><a href="ajoutPost.php">publier une offre de poste</a><ul></li>
		<li><a href="supprimeposte.php">supprimer l'offre de poste</a></ul></li>
		<li><a href="ajoutStage.php">publier une offre de stage</a><ul></li>
		<li><a href="supprimestage.php">supprimer l'offre de stage</a></ul></li>
		
		<li><a href="listeCV.php">candidatures spontanées</a></li>
		
		<li><a href="../index.php">Acceuil du site</a></li>	
		</ul>	
</nav>
    <!-- Formulaire d'envoi -->

	
	<div style="margin-left:5%;" >	
	<h1 align="center">Pour afficher un évènement</h1>
     <h3>Les champs avec "*" doivent êtres remplis.</h3>
    <form  accept-charset="iso-8859-1" enctype="multipart/form-data" method="post" action="ajoutevent.php">
    	<table id="tabAjoutEvent">
        	<tr>
            	<td><label>Du : <input type="text" name="debut" value="<?php echo $dateDebut ?>" /></label>*</td>
                <td><label>Au : <input type="text" name="fin" value="<?php echo $dateFin; ?>" /></label>*</td>
            </tr>
       		<tr>
       			<td colspan="2"><br/>
                	<label for="titre">Titre de l'évènement :</label><br/>
       				<input type="text" name="titre" id="titre" size="30" value="<?php echo $titre ?>" />*<br/><br/>
                </td>
       		</tr>
            <tr>
            	<td colspan="2">
       				<label for="description">Description de l'évènement :</label><br/>
       				<textarea rows="10" cols="50" maxlength="200" id="description" name="description"><?php echo $description ?></textarea>*
                </td>
            </tr>
			<tr>
		
			<td colspan="2"><h3>Promoteur de l'évènement :</h3>les lignes suivantes sont optionelles pour publier l'évènement...<br>
       				<label for="lienWeb">lien vers sa page Web: </label><br/>
       				<input type="text" name="lien" id="lien" size="100" value="<?php echo $lienWeb ?>" /><br/><br/>
                </td>
				</tr>
<tr>				 <!-- On limite le fichier à 8000Ko -->
<td>
     <input type="hidden" name="MAX_FILE_SIZE" value="8000000" />

    <?php  echo "son logo à telecharger : "; ?>
	<input type="file" name="logo" value="logo" />
 <br/><?php echo TXT_Note;  ?>
 </td></tr>
		
		<tr>
		<td>
<!-- On limite le fichier à 100Ko -->
     <input type="hidden" name="MAX_FILE_SIZE" value="8000000" />
    <?php  echo "fichier à telecharger : "; ?>
	<input type="file" name="actu" value="actu" />
 <br/><?php // echo TXT_Note;  ?>
 </td></tr>
 

<tr><td>

 <h3>Les champs avec "*" doivent êtres remplis.</h3>
		</td></tr>
            <tr>
			
            	<td colspan="2"><input type="submit" name="envoi" value="Envoyer"/></td>
            </tr>
       </table>
    </form>
 
<div align="center"><br><?php echo TXT_Piedhtml ; ?><br></div> 
	  
</div></body></html>


