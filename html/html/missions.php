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
  <title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icon de la barre du navigateur. -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	

<!--- ma premiere( presque) feuille de style : -->
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" />
<!--<link rel="stylesheet" media="screen and (max-width:640px)" href="../css/toutpetitResolution.css" />-->
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
<body style="font-family:'Century Gothic Normal'; height:auto; " >
 
<div id="body" class="arrondie">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
<?php include '../inc/objetMenuhtml.php'; ?>

<!-- corps de la page  --> 
<div  style="display:flex; flex-direction:row;" >
<div id="contenu" align="inline-block" >

<div style="align:justfy;">

</br>
<h2><?php echo TXT_SSSTitreMission; ?></h2>
<h6><?php echo "<br>".TXT_SSMenuMission; ?></h6>		
<br><h6><?php echo "<br>".TXT_ArticleMission; ?></h6>
</div>

 <div  class="table-responsive, ex2">
<table class="table, ex2" width="100%"><tr colspan="16">
<td><img src="../image/markerTransparent.png" width="1%" height="auto"></td>
<td colspan="2" class="blink_meb"><a href="http://www.cic-it.fr/" ><img src="../image/logos/reseauCIC-ITter.jpg" width="100%"></a></td>
  <td><img src="../image/markerTransparent.png" width="1%" height="auto"></td>
  <td colspan="2" class="blink_meb"><a href="http://ast-innovations.com/"><img src="../image/Satt-Aquitaine.png" width="100%" ></a></td>
  <td><img src="../image/markerTransparent.png" width="1%" height="auto"></td>
  <td colspan="3" class="blink_meb"><a href="http://euclid-ctu.eu/"><img src="../image/logos/logo-euclid.jpg" width="100%" ></a></td>
  <td><img src="../image/markerTransparent.png" width="1%" height="auto"></td>
  <td colspan="1" class="blink_meb"><a href="http://www.fcrin.org/" ><img src="../image/logos/F-CRIN.png" width="100%" ></a></td> 
 <td><img src="../image/markerTransparent.png" width="1%" height="auto"></td>
    <td colspan="2" class="blink_meb"><a href="http://tech4health.fr/" ><img src="../image/logos/tech4health.jpg" width="100%" ></a></td>
 <td><img src="../image/markerTransparent.png" width="1%" height="auto"></td>	
  </tr>
 </table>
</div>

</div>
</div>
<!-- corps de la page, fin  -->
<br>
 
<!-- pied de page  -->
<div style="display:flex; flex-direction:column; "> 
<?php include '../inc/piedDePage.php'; ?> 
</div>
<!-- pied de page :fin  -->
 </div>
</body>
</html>