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
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---  icone barre du navigateur...                        -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->
<!--                            -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--  mes feuilles de styles -->
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" />
<!--<link rel="stylesheet" media="screen and (min-width:200px)and(max-width:640px)" href="../css/toutpetitResolution.css" />-->
<!--  mes feuilles de styles pour le menu horyzontal et responsif -->
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:240px)" href="../css/menuHDR2petit.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />


<!--- mes scripts javascript : -->
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
<?php include'../inc/languesParDefauthtml.php';?>
<body>

<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<div style="display:flex; flex-direction:column;">
<?php include '../inc/choixDesLangueshtml.php';?>
<?php include '../inc/objetMenuhtml.php'; ?>
</div>


<!-- a droite -->
<!-- a gauche -->
<div  style="display:flex; flex-direction:row; ">
<div id="contenu" style="display:inline-block;" width="100%">

<div style="display:flex; flex-direction:column; height:auto;">
<br>
<!--  titres de la page....  -->
<div>

<?php echo TXT_histoire; ?></div>

<div  class="table-responsive, ex2" style=" height:100%;">
<table class="ex2" width="100%"><tr colspan="10">
<td colspan="1" ><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td colspan="1" class="blink_meb"><a href="http://www.bergonie.org" ><img src="../image/logos/logo_biotis_t.jpg" width="100%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="3"class="blink_meb"><a href="https://cic-p.u-bordeaux.fr/"><img src="../image/logos/logo_cic_p_bordeaux.png" width="50%" class="displayed"></a></td>
  <td colspan="1"><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="3" class="blink_meb"><a href="https://cic-p.u-bordeaux.fr/"><img src="../image/logos/CIC-EC.png" width="50%" class="displayed"></a></td>
  </tr>
 </table>
</div>

<!--  pied de page -->
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</div>
</body>
</html>
