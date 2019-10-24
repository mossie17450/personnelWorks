
<?php 
//recherche dans la base de donné de tous ce qu'il faut pour construire la cartouche "expert/expertise d'une page
//echo "mon url: ".$_SESSION[monUrl]; 
//$monURL=$_SESSION[monUrl]; 
//echo "mon url :".$monURL; //teste pour le developpement
//echo $_SESSION['lang'];
if($_SESSION['lang']=="fr"){
	$responsable="<h2>Responsable<h2>";
	$comtel="mon tel ";
	$comMel="Courriel ";
}
else{
$responsable="Manager";
$comtel="Phone ";
$comMel="Email ";
}

//recherche dans la base de donné de tous ce qu'il faut pour construire la cartouche "expert/expertise d'une page
$link = mysqli_connect('l', '','','');

//echo "je suis connecter!";

	if (!$link) {

	die('Impossible de se connecter : ' . mysql_error());

	}	
	
//requete...on recupères toutes les variables.
//les expert de l'expertise de la page...expertise/pageExpertise et la page doit être celle de l'url
//WHERE Expertise.adresseURL=='.$_SESSION[monURL].'	ou WHERE Expertise.adresseURL = "'.$monURL.'" 


//modifié la requete pour tenir compte de la langue en BDDR
if($_SESSION['lang']=='fr'){
	$sql ='SELECT DISTINCT Expertise.nomExpertiseFR, personneWCICIT.titre, personneWCICIT.prenom, personneWCICIT.nom,  personneWCICIT.emailCICIT, personneWCICIT.telCICIT, personneWCICIT.photos, Expertise.adresseURL, personneWCICIT.idpersonne,Expertise.consultant FROM Expertise JOIN personneWCICIT ON (personneWCICIT.idpersonne=Expertise.responsable) WHERE Expertise.adresseURL = "'.$monURL.'" ';	
}
else{
	$sql ='SELECT DISTINCT Expertise.nomExpertiseEN, personneWCICIT.titreEN, personneWCICIT.prenom, personneWCICIT.nom,  personneWCICIT.emailCICIT, personneWCICIT.telCICIT, personneWCICIT.photos, Expertise.adresseURL, personneWCICIT.idpersonne,Expertise.consultant FROM Expertise JOIN personneWCICIT ON (personneWCICIT.idpersonne=Expertise.responsable) WHERE Expertise.adresseURL = "'.$monURL.'" ';	
}
	$query=mysqli_query($link, $sql) or die("Une requête a échouée.");
	
		while($row=mysqli_fetch_array($query)){
$expertise=$row[0];
$titreP=$row[1];
$nom=$row[3];
$prenom=$row[2];
$email=$row[4];
$tel=$row[5];
$photo=$row[6];
$pageExpertise=$row[7];
$idpersonne=$row[8];
$idconsultant=$row[9];
	}
	//echo"responsable :".$idpersonne."<br>";
	//echo "adresse de la page : ".$pageExpertise; //vérification pour le developpement
	//echo"responsable?: ".$idpersonne; //vérification pour le developpement
	//le consultant si il existe et sa page perso ...
	//echo "consultant: ".$idconsultant." et expert: ".$nom; //pour le dev
	if($idconsultant!=NULL){
if($_SESSION['lang']=="fr"){
	
	$sql1='SELECT DISTINCT Expertise.consultant, personneWCICIT.nom, personneWCICIT.prenom, personneWCICIT.pagePerso, personneWCICIT.titre FROM personneWCICIT JOIN Expertise ON (personneWCICIT.idpersonne = Expertise.consultant) WHERE Expertise.responsable = "'.$idpersonne.'" ';
	$query1=mysqli_query($link, $sql1) or die("Une deuxieme requête a échouée.");

	while($row1=mysqli_fetch_array($query1)){
		//$consultant=$row1[1]; //nom du consultant: pour le dev
		$nomC=$row1[1];
		$prenomC=$row1[2];
		$pagePerso=$row1[3];
		$titreC=$row1[4];
		
		}
	
	}


else{

	$sql1='SELECT DISTINCT Expertise.consultant, personneWCICIT.nom, personneWCICIT.prenom, personneWCICIT.pagePerso, personneWCICIT.titreEN FROM personneWCICIT JOIN Expertise ON (personneWCICIT.idpersonne=Expertise.consultant) WHERE Expertise.responsable ="'.$idpersonne.'" ';
	$query1=mysqli_query($link, $sql1) or die("Une troisieme requête a échouée.");

	while($row1=mysqli_fetch_array($query1)){
		//$consultant=$row1[1]; //nom du consultant: pour le dev
		$nomC=$row1[1];
		$prenomC=$row1[2];
		$pagePerso=$row1[3];
		$titreC=$row1[4];
		
		}	
}
}

	mysqli_close($link);

	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<!-- nouvelle mise en forme du cartouche "responsable activité"  (resssemble au boostrap)
<div class="container-fluid" style="padding-left:-20; padding-right:-15;">-->
<div id="fin-article" class="row justify-content-center">
<div class="col-6 col-sm-4"><h2><?php echo $expertise; ?></h2></div>
<div class="col-6  col-sm-2" >
<?php
echo"<a target=\"_blank\" href=$photo  style=\"padding:20px;\">"; 


		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=$photo title=\"$prenom $nom\" alt=\"$prenom $nom\" class=\"img-responsive center-block\" style=\"width:80%; padding:5%;\">";

		}
		else {
			
	
			echo "<img src=$photo title=\"$prenom $nom\" alt=\"$prenom $nom\" class=\"img-responsive center-block\" style=\"width:80%; padding:5%;\">";
		}
		
		echo"</a>";
	?>
</div>

<div class="col-12 col-sm-6"  style="padding-left:2px;" align="left"><?php echo "<h2>".$responsable."</h2><h4>". $prenom." ".$nom."</h4><h6>".$titreP."<br>".$comtel.": ".$tel."<br>".$comMel.":<a target=\"_blank\" href=\"mailto:\"".$email.">".$email."<br></a>"; ?>
<!--   href=\"mailto:carolina.lanchas-fuentes@chu-bordeaux.fr\"   -->
<!-- pagePerso du consultant!!! -->

<?php 
if($idconsultant!=NULL){
echo "<a target=\"_blank\" href=".$pagePerso.">".$prenomC." ".$nomC."</a>: consultant ".$titreC.".</h6>"; 
}
?>
</div>
</div>

