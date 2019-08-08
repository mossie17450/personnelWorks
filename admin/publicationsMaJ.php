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
	 //  if ( !(preg_match('#194.167.179.10#', get_ip())) && ((preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || (preg_match('#fe80::8eb:d45:23f4:5142#', $ip)) )) // || 
	//if(	!(preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || !(preg_match('#fe80::8eb:d45:23f4:5142#', $ip))) 
 
	{ 

// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"../index.php". 

		"\">RETOUR</a></body></html>"; 
//retourd à la page d'acceuil du site...


       	 exit; 
		 } 


?>
<HTML5>
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
<?php

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev'); // bd distante...
	if (!$link) {
		die('Impossible de se connecter : ' . mysql_error());
				}
echo "verifs de routines!"; // pour le developpement
//requete qui marche:
$sql = "SELECT idPublication, titre, annee, codification, idJournal, COUNT(idPublication) AS cnt FROM publication GROUP BY titre, annee, codification, idJournal HAVING cnt>1 "; 
$req = mysqli_query($link,$sql) or die ("Erreur SQL 0!<br>".$sql."<br>".mysqli_error($link));
$row = mysqli_fetch_row($req); 
 //print_r($row); //pour le developpement
 if($row==NULL){echo "pas de doublons dans la table publication";}
 //echo "<br> count :".$row[4]."!<br>";
 //echo "<br> n° de la Publi :".$row[0]."!<br>";

//à vérifier....OK! envoyer un message au webmaster si $row n'est pas null...
 if($row!=NULL){ 
 $message = "Bonjour Cécile,\r\nUn doublon dans la table publication existe, il faut le vérifié et corrigé. merci! .\nCordialement,\nLe webmaster du CIC-IT.";
// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
//$message = wordwrap($message, 70, "\r\n");
// Envoi du mail
mail('mossie17450@gmail.com, cecile.raymond@inserm.fr', 'Nouvelle candidature spontané aujourd\'hui', $message);
 }
?>
<?php include'../inc/languesParDefauthtml.php';?>
<h1 align="center"><?php echo "Mise à jour des publications";  ?></h1>

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
<br>
<!-- construction d'un fichier excel -->
<?php  
/*
echo " <h3 style=\"margin-left:10px;\">Le fichier excel :</h3>";  
 
 //include the file that loads the PhpSpreadsheet classes
require 'spreadsheet/vendor/autoload.php';

//include the classes needed to create and write .xlsx file
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//object of the Spreadsheet class to create the excel data
$spreadsheet = new Spreadsheet();

//add some data in excel cells
$spreadsheet->setActiveSheetIndex(0)
 ->setCellValue('A1', 'Domain')
 ->setCellValue('B1', 'Category')
 ->setCellValue('C1', 'Nr. Pages');


$spreadsheet->setActiveSheetIndex(0)
 ->setCellValue('A2', 'CoursesWeb.net')
 ->setCellValue('B2', 'Web Development')
 ->setCellValue('C2', '4000');

$spreadsheet->setActiveSheetIndex(0)
 ->setCellValue('A3', 'MarPlo.net')
 ->setCellValue('B3', 'Courses & Games')
 ->setCellValue('C3', '15000');

//set style for A1,B1,C1 cells
$cell_st =[
 'font' =>['bold' => true],
 'alignment' =>['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
 'borders'=>['bottom' =>['style'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM]];
$spreadsheet->getActiveSheet()->getStyle('A1:C1')->applyFromArray($cell_st);

//set columns width
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(16);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(18);

$spreadsheet->getActiveSheet()->setTitle('Simple'); //set a title for Worksheet

//make object of the Xlsx class to save the excel file
$writer = new Xlsx($spreadsheet);
$fxls ='excel-file_1.xlsx';
$writer->save($fxls);
*/
?>
 
 <!--<a target="_blank" href="publisE.xlsx"><h3 style="margin-left:10px;">ou là !</h3>
</a>-->

<br>
<form method="post" name="validez">

<fieldset><legend><?php echo "Ajout d'une publication" ; ?></legend>
 

 <label style="margin-left:5%;"><?php echo "Titre de la publication"; ?> *</label>
 <input type="text" maxlength="256" name="titreP" size="120"  /><br>
<hr>
 <label style="margin-left:5%;"><?php echo "nom du journale/congres"; ?> *</label>
 <input type="text" maxlength="128" name="revue" id="revue" size="60" />
<hr>
 <label style="margin-left:5%;"><?php echo "Type de  publication"; ?> *</label><br/>
 
<label style="margin-left:10%;">ACL</label><input type="radio" name="typePubli" value="ACL" ><span>    </span><label>lien web</label><span>    </span><input type="text" maxlength="256" size="120" name="lienweb"><br/>
<label style="margin-left:10%;">ACTN</label><input type="radio" name="typePubli" value="ACTN" ><br/>
<label style="margin-left:10%;">ACTI</label><input type="radio" name="typePubli" value="ACTI" ><br/>
<label style="margin-left:10%;">COM</label><input type="radio" name="typePubli" value="COM" ><br>
 <label style="margin-left:10%;">AFF</label><input type="radio" name="typePubli" value="AFF" ><br>
<label style="margin-left:10%;">Ouvrage</label><input type="radio" name="typePubli" value="Ouvrage" ><br>
 <label style="margin-left:10%;">Brevet</label><input type="radio" name="typePubli" value="Brevet" style="margin-left:20px;">
<hr>
<label style="margin-left:5%;">année de publication :</label>
<input type="text" maxlength="20" name="annee" size="20" /><br>
 <hr>
<br>
<input type="reset" value="recommencez"/>
<input type="submit" value="validez" name="validez"/></fieldset>
</form>

<?php 
//verification des entrées dans le formulaire avant de les entre dans la bd:
//type de publication: /*

if(!empty($_POST['validez'])){

if (empty($_POST['typePubli'])) {

    $nameErr = "type publi? un oubli?<br/>";

	echo $nameErr;

	$typeP=NULL;

  } else {

  // echo $_POST['typePubli'];
$codification=$_POST['typePubli'];
echo $codification;
  }
		
//nom du journale ou autre  
if (empty($_POST['revue'])) {

    $nameErr = "pas de titre de journale! un oubli?<br/>";

	echo $nameErr;

	$revue=NULL;

  } else {
	$revu1=addslashes($_POST['revue']);
    $revue= utf8_encode($revu1);
echo "<br>journale:".$revue."<br>";
  }
 
  if (empty($_POST['titreP'])) {

    $nameErr = "Il me faut le titre de la publication<br/>";

	echo $nameErr;

	$titreP=NULL;

  } else {
	$titreP1=addslashes($_POST['titreP']);
    $titreP = utf8_encode($titreP1);
	
	echo "titre publi : ".$titreP." !<br>";
  }
  //année
  
   if (empty($_POST['annee'])) {

    $nameErr = "Il me faut l'année de la publication<br/>";

	echo $nameErr;

	$annee=NULL;

  } else {

    $annee = $_POST['annee'];
  }
 

  if(empty($_POST['revue'])||empty($_POST['titreP'])||empty($_POST['annee'])||empty($_POST['typePubli']))
 {
echo "le formulaire n'est pas correctement remplie, recommencez!"; 
  }
else echo "on continue."; 

if(!(empty($_POST['revue'])||empty($_POST['titreP'])||empty($_POST['annee'])||empty($_POST['typePubli']))){
 

   //echo"<br>on insert dans la bd!<br>";
//echo"type de publi :".$codification."<br>";
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev'); // bd distante...
	if (!$link) {
		die('Impossible de se connecter : ' . mysql_error());
				}
		//else
		//echo "connecter!<br>";
			
//.......................................................................//
//insertion  dans la table journale si il n'y est pas deja
//.......................................................................//
//verifie si le journale (ou autre) est present dans la table journale:
$sql2="SELECT idJournal, titreJournal FROM journale WHERE titreJournal='".$revue."' ";
$req2 = mysqli_query($link,$sql2) or die ("Erreur SQL2 !<br>".$sql."<br>".mysqli_error($link));
$row2 = $req2->fetch_assoc();
/*pour le dev : */
//echo " id du journale:".$row2['idJournal']."!";
$idJou=$row2['idJournal'];
if($row2['idJournal']==""){
//echo "oui<br>"; 
//insertion  dans la table journale (car il n'y est pas encore!)
// attribue un autre idpubli si la publi existe dans un autre journale...? (15Mars2017)
echo "oui pour l'insertion....<br>"; //pour le dev.
$sql1="INSERT INTO journale (titreJournal) VALUES ('".$revue."') ";
$req1 = mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link));
echo "verif bd!";
// je recupere l'id du journale de la publi avant l'insertion dans la table 'publication'...
$sql="SELECT idJournal, titreJournal FROM journale WHERE titreJournal='".$revue."' ";
$req = mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));
$row = $req->fetch_assoc();
$idJou=$row['idJournal'];
//echo "id du journal :".$row['idJournal']."!<br>";//pour le dev.
//printf("id = %s (%s)\n", $row['idJournal'], gettype($row['idJournal']));
//printf("label = %s (%s)\n", $row['titreJournal'], gettype($row['titreJournal']));
}
//echo "mon id du journal :".$idJou."!<br>";//pour le dev.
//echo $idJou."<br>";
//.......................................................................//
//insertion  de la publication dans la table publication 
//.......................................................................//
//avant, si elle existe dans un autre journale, on l'insere avec un autre idpubli!...
//insertion de la publi dans la table publi , ...//
//echo "journale :".$idJou;
if($idJou){
$sql3="INSERT INTO publication (titre, idJournal, annee, codification) VALUES('".$titreP."','".$idJou."','".$annee."','".$codification."')";
$req3 = mysqli_query($link,$sql3) or die ("Erreur SQL 3!<br>".$sql3."<br>".mysqli_error($link));
//recupération de l'id de la publication pour l'insertion dans la table 'communique'. corrige ici :
$sql4="SELECT idPublication, titre, titreJournal FROM publication join journale  WHERE titre='".$titreP."' AND publication.idJournal='".$idJou."' ";
$req4 = mysqli_query($link,$sql4) or die ("Erreur SQL 4!<br>".$sql4."<br>".mysqli_error($link));
$row4 = $req4->fetch_assoc();
echo " id publi :".$row4['idPublication']."!<br>"; //pour le dev
$idPubli=$row4['idPublication'];
echo "<br>publi :".$idPubli;
echo "<br>journale :".$idJou;
}
mysqli_close($link);
}

//echo "<br>publi :".$idPubli;
//echo "<br>journale :".$idJou;
?>

<?php 
if (empty($_POST['nbreAuteurs'])) {
    $nameErr = "nous avont besoin du nombre d'auteur pour continue!<br/>";
	echo $nameErr;
	$nbreAuteurs=NULL;
  } else {
    $nbreAuteurs = $_POST['nbreAuteurs'];
	
  }
?>

<form method="post" action= "auteurs.php">
<label style="margin-left:5%;"><? echo "nombre d'auteurs :"; ?> *</label>
<input type="number_format" maxlength="2" name="nbreAuteurs" id="nbreAuteurs" size="2" />
<input type="hidden"  name="idPubli"  value="<?php echo $idPubli ;?>"  />
<input type="hidden"  name="idJou"  value="<?php echo $idJou ; ?>"  />
<input type="submit" value="OK" name="submitA">

</form>

<?php
}
?>

	<br><br>
</body>
</html>



	



