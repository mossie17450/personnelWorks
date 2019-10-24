
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
	if ( !(preg_match('##', get_ip())) )
	
 
	{ 

// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"../index.php". 

		"\">RETOUR</a></body></html>"; 
//retourd à la page d'acceuil du site...


       	 exit; 
		 } 


?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">	
<head>
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---                         -->
<!--- mes feuilles de style : -->
<!---                         -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/calendrier.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" href="../css/admin.css" >
</head>
<body>



<?php include'../inc/languesParDefauthtml.php';?>
<h1 align="center"><?php echo "Mise à jour des cartouches expert/expertise";  ?></h1>
<nav>
<ul id="menu">
		<li><a href="expertExpertiseU.php">expert/expertise mise à jour</a><ul></li>
		<li><a href="expertExpertiseU.php">expert/expertise ajout</a></li>
		<li><a href="expertExpertiseU.php">expert/expertise suppression</a></ul></li>
		
		<li><a href="ajoutevent.php">événements</a><ul></li>
		<li><a href="supprevent.php">Suppr- événement</a></ul></li>
		<li><a href="publicationsMaJ.php">les publications</a></li>
        <li><a href="ajoutPost.php">publier une Offre de poste</a><ul></li>
		<li><a href="supprimeposte.php">supprimer l'offre de poste</a></ul></li>
		<li><a href="ajoutStage.php">publier une offre de stage</a><ul></li>
		<li><a href="supprimestage.php">supprimer l'offre de stage</a></ul></li>
		<!--<li><a href="listeCV.php">candidatures spontanées</a></li>-->
		<li><a href="../index.php">acceuil</a></li></ul>	
		</ul>	
</nav>
<?php

$link = mysqli_connect('l', '','',''); // bd distante...
	if (!$link) {
		die('Impossible de se connecter : ' . mysql_error());
				}

//requete qui marche:
$sql = "SELECT * FROM Expertise"; 
$req = mysqli_query($link,$sql) or die ("Erreur SQL 0!<br>".$sql."<br>".mysqli_error($link));
$row = mysqli_fetch_row($req); 
 //print_r($row); //pour le developpement renvoie la premiere ligne de la table!
?>
<br>
<!-- choix de l'expertise -->
<form method="post" name="validez">
<fieldset><legend><?php echo "maj expertise" ; ?></legend>
<label style="margin-left:5%;"><?php echo "Selectionnez l'expertise à modifier"; ?> </label><br/>
<!-- a noter: le nom de l'expertise doit pouvoire changer... -->
<label style="margin-left:10%;">Système qualité</label><input type="radio" name="expertise" value="Système de management par la qualité" ><br/>
<label style="margin-left:10%;">Histologie</label><input type="radio" name="expertise" value="Histologie" ><br/>
<label style="margin-left:10%;">Culture cellulaire</label><input type="radio" name="expertise" value="Culture cellulaire" ><br/>
<label style="margin-left:10%;">Bactériologie</label><input type="radio" name="expertise" value="Bacteriologie" ><br/>
<label style="margin-left:10%;">Hemocompatibilite</label><input type="radio" name="expertise" value="hémocompatibilite" ><br>
 <label style="margin-left:10%;">Hemodynamique</label><input type="radio" name="expertise" value="hémodynamique" ><br>
<label style="margin-left:10%;">Essais preclinique</label><input type="radio" name="expertise" value="Etudes pré-cliniques in vivo" ><br>
 <label style="margin-left:10%;">Essais clinique</label><input type="radio" name="expertise" value="Etudes cliniques">
<hr>
<input type="submit" value="validez" name="validez"/></fieldset>
</form>
<?php

echo"<br>expert/expertise : update<br>";
//requete qui marche:
$sql1 = "SELECT nomExpertise, adresseURL, responsable, consultant, idExpertise    FROM Expertise JOIN personneWCICIT ON (Expertise.responsable=personneWCICIT.idpersonne) WHERE Expertise.nomExpertise = '".$_POST['expertise']."' "; 
// ajouter a la requete :nom as nomResponsable, prenomPersonne, telpersonne, mailpersonne, ....?
$req1 = mysqli_query($link,$sql1) or die ("Erreur SQL 0!<br>".$sql1."<br>".mysqli_error($link));
$row1 = mysqli_fetch_row($req1); 
 //print_r($row1); //pour le developpement
 $nomExpertise=$row1[0];
 $adresseURLExpertise=$row1[1];
 $idExpertise=$row1[4];
 $consultant=$row1[3];
 $responsable=$row1[2];
 //echo"<br>expertise :".$nomExpertise."<br> URL".$adresseURLExpertise."<br/>";
 
 $sql2 = "SELECT nom, prenom, telCICIT, emailCICIT, photos, titre    FROM  personneWCICIT WHERE idpersonne = '".$responsable."' ";
// ajouter a la requete :nomPersonne as nomResponsable, prenomPersonne, telpersonne, mailpersonne, 
$req2 = mysqli_query($link,$sql2) or die ("Erreur SQL 0!<br>".$sql2."<br>".mysqli_error($link));
$row2 = mysqli_fetch_row($req2); 
print_r($row2); //pour le developpement
$nomR=$row2[0];
$prenomR=$row2[1];
$telCICITR=$row2[3];
$emailCICITR=$row2[4];
$photosR=$row2[5];
$titreR=$row2[6];
echo "mon titre: ".$titreR;
?>
<!-- valeur à modifier dans un formulaire --><br>
<form method="post" name="entrer" action="Vinsert.php">
<input  name="idExpertise" type="hidden" value="<?php echo $idExpertise; ?>" >
<input  name="idResponsable" type="hidden" value="<?php echo $responsable; ?>" >

<label style="margin-left:10%;">nom de l'expertise :<?php echo $nomExpertise; ?></label><input  type="text"= name="newnomExpertise" value="<?php echo $nomExpertise; ?>" size="30"><br>

<label style="margin-left:10%;">nom du responsable de l'expertise :<?php echo $nomR; ?></label><input  type="text" name="newnomR" value="<?php echo $nomR; ?>" size="30"><br>

<label style="margin-left:10%;">prenom du responsable de l'expertise :<?php echo $prenomR; ?></label><input  type="text" name="newPrenomExpert" value="<?php echo $prenomR; ?>" size="30"><br>

<label style="margin-left:10%;">titre du responsable de l'expertise :<?php echo $titreR; ?></label><input type="text" name="newstitreR" value="<?php echo $titreR; ?>" size="30"><br>
<!--
<label style="margin-left:10%;">numero de tel du responsable de l'expertise :(ancienne valeur)</label><input  text=50 name="newnomExpertise" ><br>
<label style="margin-left:10%;">mail du responsable de l'expertise :(ancienne valeur)</label><input  text=50 name="newnomExpertise" ><br>
<label style="margin-left:10%;">nom du consultant de l'expertise :(ancienne valeur)</label><input  text=50 name="newnomExpertise" ><br>
<label style="margin-left:10%;">prenom du consultant de l'expertise :(ancienne valeur)</label><input  text=50 name="newnomExpertise" ><br>
<label style="margin-left:10%;">titre du consultant de l'expertise :(ancienne valeur)</label><input  text=50 name="newnomExpertise" ><br>
<label style="margin-left:10%;">adresse de la pageWeb du consultant de l'expertise :(ancienne valeur)</label><input  text=50 name="newnomExpertise" ><br>
<label style="margin-left:10%;">adresse de la pageWeb de l'expertise :(ancienne valeur)</label><input  text=50 name="newnomExpertise" ><br>
-->

<input type="submit" value="entrer"/>
</form>
<!-- insertion de la  valeur modifiée dans la BDD : -->


</body>
</html>