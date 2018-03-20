<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108361116-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108361116-1');
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!--- ma premiere( presque) feuille de style : --->

<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)" type="text/css" href="../css/CSSPage.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)"type="text/css" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />


<!---                         -->
<!---mes scripts javascript : -->
<!---                         -->
<script type="text/javascript">
window.onload=montre;
function montre(id) {
var d = document.getElementById(id);
	for (var i = 1; i<=10; i++) {
		if (document.getElementById('smenu'+i)) {document.getElementById('smenu'+i).style.display='none';}
	}
if (d) {d.style.display='block';}
}
//-->
</script>

</head>
<!-- langue par défaut                        -->
<?php include'../inc/languesParDefauthtml.php';?>
<body style="font-family:'Century Gothic Normal'; max-width:1200px; " >
<div id="body" class="arrondie">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
 <?php include '../inc/objetMenuhtml.php'; ?>

<div id="contenu" align="inline" width="100%" style="display:flex; flex-direction:row;">

 <!-- ajout pied de page : plan du site....   --> 
<div id="section-article" style="width:80%;"><br><br><br> 
<div style="text-align:center"><?php echo TXT_TitrePoste; ?></div>
<br><br><br> 
<br>
<?php

$link =mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev' );					
	 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

$req = "SELECT * FROM poste";
		$poste = mysqli_query($link, $req);
		
		if(mysqli_num_rows($poste))
		$nbPostes = true;
		else $nbPostes = false;
		
		
		mysqli_close($link);

	if($nbPostes) {
		
		while($postes = mysqli_fetch_array($poste,MYSQLI_BOTH)) {
			echo '
			<table class="listeEvent">
				<tr><td>'.$postes['titrePoste'].'</td></tr>
				<tr><td>'.$postes['descriptionPoste'].'</td></tr>
				
				<tr><td>'.TXT_TPDF.'</td></tr>
				<tr><td><a href="../admin/www/'.$postes['NomPDFPoste'].'">'.$postes['NomPDFPoste'].'</a></td></tr>
				<tr><td>'.TXT_PostulerS.'</td></tr>
				<tr><td><a href="cic-it-spontanee.php">'.TXT_IciPostulerS.'</a></td></tr>									
			</table>
			<br/><br/>
			';
		}
		
	} 
	else {
	
		echo TXT_ArticlePoste;
		}
	
?>
<br>
</div>
</div>
<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</body>
</html>