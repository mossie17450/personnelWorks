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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icone barre du navigateur  -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->


<!-- carousel bootstrap...-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.bootpag.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

<script src="https://raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" />
<!--<link rel="stylesheet" media="screen and (max-width:640px)" media="screen and (min-width:200px)" href="../css/toutpetitResolution.css" />-->

<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="../css/menuHDR2petit.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />

<link rel="stylesheet" href="../css/slideshow.css">
<!-- le menu HDR -->

<script type="text/javascript">
<!--
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
<body style="font-family:'Century Gothic Normal'; " >	 
<div id="body" class="arrondie">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
<?php include '../inc/objetMenuhtml.php'; ?>
   
<div  style="display:flex; flex-direction:column; ">
<div align="inline-block" width="100%">

<div  id="fin-article" class="table-responsive">

<table class="table, ex2" width="100%"><tr colspan="12"><td colspan="1">
<a  target="_blank" href="LaurenceBordenave.php"><!-- lien quand on clique sur l'image....   -->
			<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/LBordenavePP.png\" alt=\"Laurence Bordenave\" title=\"Laurence Bordenave\" width=\" 100%\">
";
		}
		else {
			
		echo "<img src=\"../image/personnels/LBordenavePP.png\" alt=\"Laurence Bordenave\" title=\"Laurence Bordenave\" width=\" 100%\">
			";
		}
		?>
		</a></td>
		
		<td colspan="3" style="padding-left:2%;"><h6>Pr Laurence Bordenave, MD, PhD<br><?php echo TXT_coordinateurM ; ?></h6></td>

</td>
<td colspan="1">

		<a target="_blank" href="MarleneDurand.php"><!-- lien quand on clique sur l'image....   -->
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MarleneP.png\" alt=\"Marlène Durand\" title=\"Marlène Durand\" width=\" 100%\" >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/MarleneP.png\" alt=\"Marlène Durand\" title=\"Marlène Durand\" width=\" 100%\" >
			";
		}
		?>
		</a></td>
		<td colspan="3" style="padding-left:2%;"><h6>Marlène Durand, PhD<br><?php echo TXT_coordinateurD ;  ?></h6></td>

	
<td colspan="1" style="padding-left:5px;">

		<a target="_blank" href="ClaireDarcos.php">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/ClaireP.png\" alt=\"Claire Darcos\"  title=\"Claire Darcos\" width=\"100%\" >";
		}
		else {
			
		echo "<img src=\"../image/personnels/ClaireP.png\" alt=\"Claire Darcos\" title=\"Claire Darcos\" width=\"100%\" >
			";
		}
		?>
		</td>
<td colspan="3" style="padding-left:2%;">
<h6><?php echo TXT_secreteriat ; ?></h6>
</td>


</tr></table></div>


<div id="articleManagement" style="text-align:justify;">

<h6><?php echo TXT_TMA2; ?></h6>
<br>

<h6><?php echo TXT_TMA3; ?></h6>
<br>
<h6><?php echo TXT_TMA4; ?></h6>
</div>
</div>	

<!--  pied de page  --> 
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</div>
</body>
</html>


