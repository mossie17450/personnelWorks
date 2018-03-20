<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="utf8" lang="utf8" dir="ltr">
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

<!-- icon de la barre du navigateur. -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<!--- mes feuilles de style : -->
<!---                         -->
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />-->
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)" type="text/css" href="../css/CSSPage.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)"type="text/css" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />



<script type="../text/javascript">
window.onload=montre;
function montre(id) {
var d = document.getElementById(id);
	for (var i = 1; i<=10; i++) {
		if (document.getElementById('smenu'+i)) {document.getElementById('smenu'+i).style.display='none';}
	}
if (d) {d.style.display='block';}
}

</script>
</head>
<!-- langue par défaut                        -->
<?php include'../inc/languesParDefauthtml.php';?>
<body style="font-family:'Century Gothic Normal'; max-width:1200px; " >	 
<div id="body" >
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
 <?php include '../inc/objetMenuhtml.php'; ?>

<div style="display:flex; flex-direction:row; height:auto;"> 
<div id="contenu" align="inline" >

<!-- ecrire dans lang pour la traduction englais/francais   -->

<div id="section-article" style="width:100%; padding-right:5%;">
<!--  titres de la page....  
<h1 align="center"><?php //echo TXT_TitreA;  ?></h1>-->
<br>
<h6><?php echo  TXT_ArticleA1;  ?></h6>
		
<h3><?php echo TXT_ArticleA11;  ?></h3>
<h6><?php echo TXT_ArticleA12; ?></h6>
<h6><?php echo TXT_ArticleA13; ?></h6>
<br>
<div  class="arrondie" style="float:left; padding:1px; width:100%; height:20%;">
<!-- projets collaboratifs -->

<div  class="table-responsive, ex2" style="margin-left:0%">
<table class="table, ex2" width="100%"><tr colspan="12"><td colspan="12"><h3><?php echo  TXT_TCol;  ?></h3>
</td></tr><tr colspan="12">
		
		<td colspan="6" style="padding-left:2%;"><h6><?php echo TXT_Col1; ; ?></h6></td>
		<td colspan="6" style="padding-left:2%;"><h6><?php echo TXT_Col2; ?></h6></td>
		</tr></table>
		</div>

<!-- fin projet coll -->
</div>

<img src='../image/cic_it_preuve_concept.jpg' alt="preuve de concept" title="preuve de concept"  class="arrondie" width="80%" height="20%" style="margin-top:80px; padding:5%;">

<!-- fin du footbis   id="projet" -->

<br>
</div>
</div>
</div>

<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</body>
</html>