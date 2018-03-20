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
<!--- ma premiere( presque) feuille de style : -->

<!-- icon dans la barre du navigateur  -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" />
<!--<link rel="stylesheet" media="screen and (min-width:200px)and(max-width:640px)" href="../css/toutpetitResolution.css" />-->
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="../css/menuHDR2petit.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />


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

<!-- expertise -->
<div  id="fin-article" class="table-responsive, ex2">
<table class="table, ex2" width="100%" ><tr colspan="10">
<td colspan="4"><h3><?php echo  TXT_IVT ; ?></h3></td>
<td colspan="1">
<a target="_blank" href="../image/personnels/MarleneP.png" style="padding:10%;">

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MarleneP.png\" width=\"80%\"; title=\"\" alt=\"\" height=\"auto\"; align=\"center\"; float=\"left\"; >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/MarleneP.png\" width=\"100\" title=\"\" alt=\"\" height=\"auto\"; align=\"center\"; float=\"left\";>
			";
		}
		?></a>
	</td>
<td colspan="4" style="padding-left:5px;">
<div align="left"><h3><?php echo TXT_ResponsableInVivo ; ?></h3></div>
<div  style="display:inline-block; width:100%;  text-align:left;">
<?php echo  TXT_IVR;   ?>	 
</div>
</td>
</tr></table></div>



<!-- contenu -->
<div style="display:flex; flex-direction:row; "> 
<div id="contenu" align="inline-block" width="100%">

<div id="asideEq"  class="arrondie" >

<?php  echo TXT_HEA; ?>
<?php echo TXT_IVEquipements; ?><br>
</div>
<br>
<div style="display:flex; flex-direction:column; width:78%; ">
<div id="section-article">

 <h6><?php  echo TXT_IVA1; ?></h6> 
 </div>


<?php echo TXT_IVIA; ?><br>
<div style="display:flex; flex-direction:row; ">

<div class="displayed" style=" width:30%; padding:5px;">
  <a target="_blank" href="../image/Echodoppler.png">
    <img src="../image/Echodoppler.png"  alt="Echodoppler carotide de brebis après pontage"  title="Echodoppler carotide de brebis après pontage" style="width:90%; padding:10px;" class="displayed">
  </a> 
  </div> 
 <div class="displayed" style=" width:30%; ">
  <a target="_blank" href="../image/Injection.png">
    <img src="../image/Injection.png"  title="Injection intervertébrale chez le mouton" alt="Injection intervertébrale chez le mouton" class="displayed" style="width:90%; padding:10px;">
  </a>  
  </div>
 
<div class="displayed" style=" width:30%; margin:5px;">
  <a target="_blank" href="../image/Photoluminescence.png">
    <img src="../image/Photoluminescence.png"  title="Photoluminescence d’activité bactérienne en site osseux" alt="Photoluminescence d’activité bactérienne en site osseux" class="displayed"style="width:90%; padding:10px;">
  </a>  
  </div>  
</div>
<div style="display:flex; flex-direction:row; ">
<div style=" width:30%; padding:5px;"><?php echo TXT_IVI1; ?></div><div style=" width:30%; padding:5px;"><?php echo TXT_IVI2; ?></div><div style=" width:30%; padding:5px;"><?php echo TXTIVI3; ?></div>
</div>
</div>
<br></div></div>

<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>
</div>
</body>
</html>