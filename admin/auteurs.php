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



 if ( !(preg_match('#194.167.179.10#', get_ip())) )
	{ 

// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"../index.php". 

		"\">RETOUR</a></body></html>"; 
//retourd à la page d'acceuil du site...


       	 exit; 
		 } 


?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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

<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->

<!--<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="css/toutpetitResolution.css" />-->
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/calendrier.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" href="../css/admin.css" >
</head>
<body>
<?php
	include'../inc/languesParDefauthtml.php';
   if (isset($_POST['auteurs'])) {  //a modifié
        echo '<br><h3 align="center">Entrez les auteurs :';
		
		//la recupe des nomsA et prenom et rang (marche)
		//echo $_POST['nbreAuteurs'];
		for($i=1; $i< $_POST['nbreAuteurs']+1 ; $i++){
		//echo $_POST['nomA'];
		$nom1= addslashes($_POST['nomA'.$i]);
		$nom=utf8_decode($nom1);
		$prenom1=addslashes($_POST['prenomA'.$i]);
		$prenom=utf8_decode($prenom1);
		//echo "nom auteur :".$nom."<br>";
		//echo "prenom :".$prenom."<br>";	
		//echo "rang :".$i."<br>";
		$idPubli= $_POST['idPubli'];
		$idJou= $_POST['idJou'];
		//echo "id publication".$idPubli."<br>";
		//connection a la base de données...a modifier en cic-itbd!
		$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev');
		if (!$link) {
		die('Impossible de se connecter : ' . mysql_error());
		}
		// faire ici les insertions dans 1)table auteur si il n'y est pas (verifier)
		//verifier la présence ou non de l'auteur dans la table:
		$sql5="SELECT idAuteur,nom, prenom FROM auteur WHERE nom='".$nom."' AND prenom='".$prenom."' ";
		$req5 = mysqli_query($link,$sql5) or die ("Erreur SQL 5!<br>".$sql5."<br>".mysqli_error($link));
		$row5 = $req5->fetch_assoc();
		//insertion si l'auteur dans la table si il n'y est pas.
		if($row5['idAuteur']==0){
		//echo "oui pour l'insertion....<br>";
		$sql6="INSERT INTO auteur VALUES(0,'".$nom."','".$prenom."')";
		$req6 = mysqli_query($link,$sql6) or die ("Erreur SQL 6!<br>".$sql6."<br>".mysqli_error($link));
		}
		else{
		//echo "auteur present dans la table!"; pour le dev
		}
		//2) recupe de l'id auteur (verifier)
		$sql7="SELECT idAuteur, nom, prenom FROM auteur WHERE nom='".$nom."' AND prenom='".$prenom."' ";
		$req7 = mysqli_query($link,$sql7) or die ("Erreur SQL 7!<br>".$sql7."<br>".mysqli_error($link));
		$row7 = $req7->fetch_assoc();

		//echo " idAuteur :".$row7['idAuteur'].", nom:".$row7['nom'].", "; //pour le dev
		$idAuteur=$row7['idAuteur'];
		//echo " de rang :".$i."<br>"; //pour le dev
		
//.......................................................................//
//insertion  des auteurs dans la table communique
//.......................................................................//
		//echo "pour l'insertion dans la table communique, idPubli :".$idPubli;
		//echo "pour l'insertion dans la table communique, idJou :".$idJou; //pour le developpement...
	//3) insertion dans la table communique (verifier).
		$sql8="INSERT INTO communique (idAuteur, idPublication, rang) VALUES('".$idAuteur."','".$idPubli."','".$i."')";
		$req8 = mysqli_query($link,$sql8) or die ("Erreur SQL 8!<br>".$sql8."<br>".mysqli_error($link));		
		}
		}
		


//.......................................................................//
//insertion des auteurs dans la table auteur si il n'existe pas
//.......................................................................//
/*entrez le nombre d'auteurs pour la boucle for...*/
//echo"coucou!<br>";
//echo $_SESSION['nbreAuteurs'];
//echo $_POST['nbreAuteurs'];

if (!empty($_POST['submitA'])) {
   //echo "nombre d'auteur :".$_POST['nbreAuteurs'];
  // echo "<br>idPubli : ".$_POST['idPubli'];
   // echo "<br>idJou : ".$_POST['idJou'];
} 
 
  else "combien d'auteur ?";
 ?>  
<nav>
<ul id="menu">
		<li><a href="ajoutevent.php">événements</a><ul></li>
		<li><a href="supprevent.php">Suppr- événement</a></ul></li>
		<li><a href="publicationsMaJ.php">les publications</a></li>
        <li><a href="ajoutPost.php">publier une Offre de poste</a><ul></li>
		<li><a href="supprimeposte.php">supprimer l'offre de poste</a></ul></li>
		<li><a href="ajoutStage.php">publier une offre de stage</a><ul></li>
		<li><a href="supprimestage.php">supprimer l'offre de stage</a></ul></li>
		
		<li><a href="listeCV.php">candidatures spontanées</a></li>
		
		<li><a href="../index.php">acceuil</a></li>	
		</ul>	
</nav> 

 
<form action="#" method="post" name="listeA">
<?php

//insertion des auteurs dans la table auteur si il n'existe pas
//.......................................................................//
/*entrez le nombre d'auteurs pour la boucle for...*/
//echo"coucou!<br>";
//echo $_SESSION['nbreAuteurs'];
//echo $_POST['nbreAuteurs'];

if (!empty($_POST['submitA'])) {
   //echo "nombre d'auteur :".$_POST['nbreAuteurs'];
  // echo "<br>idPubli : ".$_POST['idPubli'];
   // echo "<br>idJou : ".$_POST['idJou'];
} 
 
  else "combien d'auteur ?";

if (!empty($_POST['idPubli'])&& !empty($_POST['nbreAuteurs']) && !empty($_POST['idJou'])){
$nbreAuteurs=$_POST['nbreAuteurs'];
echo "nombre d'auteurs :".$nbreAuteurs."<br>";
$idPubli=$_POST['idPubli'];
//echo "<br>idPubli:".$idPubli;
$idJou=$_POST['idJou'];
//echo "<br>idJou:".$idJou;
}

//boucle d'entre des auteurs:
 for($i=1; $i<$nbreAuteurs+1 ; $i++){  
echo "<br>auteur ".$i."<br>";
?>
<label>nom de l'auteur :</label>
<input type="text" name=<?php echo "nomA".$i; ?> /><br>
<label>prenom de l'auteur :</label>
<input type="text" name=<?php echo "prenomA".$i; ?> /><br>
<br/>
<?php
 }
 ?>
<input type="hidden" name="nbreAuteurs" value="<?php echo $nbreAuteurs ;?>" >
<input type="hidden" name="idPubli" value="<?php echo $idPubli ;?>" >
<input type="hidden" name="idJou" value="<?php echo $idJou ;?>" >
<input type="submit" name="auteurs" value="soumettre"/>
</form>

    <p class="centre"><br/><a href="../index.php">Revenir à l'accueil</a></p>
	<div align="center"><br><?php echo TXT_Piedhtml; ?><br></div>
</body>
</html>



		