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

<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Recherche et développement au sein de la PTIB : biomatériaux et réparation tissulaire | CIC-IT Bordeaux</title> 
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Adossé à l&#039;unité Inserm 1026/BioTis, le CIC-IT collabore avec le pôte d&#039;activité médicale du CHU de Bordeaux. Formant de futurs chercheurs et des cadres R&amp;D via le Master BiDim, il est un moteur de de l&#039;innovation médicale en Aquitaine." />
<!--  icone dans la barre du navigateur                              -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<!--- ma premiere( presque) feuille de style : -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />-->
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" /> 
<!--<link rel="stylesheet"  media="screen and (max-width:540px)" media="screen and (min-width:240px)" href="../css/toutpetitResolution.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)"  media="screen and (min-width:240px)" href="../css/menuHDR2petit.css" />-->


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
<body style="font-family:'Century Gothic Normal'; max-width:1200px; height:auto;" >
<div id="body" class="arrondie">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
 <?php include '../inc/objetMenuhtml.php'; ?>

<!--corp de la page -->
<div  style="display:flex; flex-direction:row; ">
<div id="contenu" style="display:inline-block;" width="100%">


<!--  titres de la page....   --><br>
<?php echo TXT_TitreEnvironnement; ?><br>

<div  style="text-align:justify;" ><h6 ><?php echo TXT_ArticleEnvironnement;  ?></h6>
<?php echo "<br><br>";  ?><!-- un peu d'espace... -->
</div>
<!-- logo horyzontales -->
<div  style="display:flex; flex-direction:row;">
<div  class="table-responsive, ex2">
<table class="table, ex2" width="100%"><tr colspan="14">
<td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td colspan="2" class="blink_meb"><a href="https://www.dondusang.net/rewrite/heading/804/efs/l-efs-en-regions/aquitaine-limousin.htm?idRubrique=804"><img src="../image/logos/EFSAL.jpg" width="100%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="1" class="blink_meb"><a href="http://www.ptib.u-bordeaux2.fr/index.php?p=accueil"><img src="../image/logos/logoPTIB.png" width="100%"class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="1" class="blink_meb"><a href="https://www.ihu-liryc.fr/"><img src="../image/logos/IHU liryc.jpg" width="100%" class="displayed"></a></td>
   <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="1" class="blink_meb"><a href="http://www.2acbi-asso.fr/"><img src="../image/logos/logo-2acbi.jpg" width="100%" class="displayed"></a></td> 
   <td><img src="../image/markerTransparent.png" width="2%" height="auto"></td>
  <td colspan="2" rowspan="1" class="blink_meb"><a href="https://bcrm.u-bordeaux.fr/"><img src="../image/logos/BxCRM.png" width="100%" class="displayed"></a></td> 
  <td><img src="../image/markerTransparent.png" width="2%" height="auto"></td>
  </tr>
 </table>
</div>
</div>



</div></div>
<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</body>
</html>
