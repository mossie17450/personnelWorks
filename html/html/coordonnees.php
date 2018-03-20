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
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<link rel="icon" type="image/png" href="../image/logoCIC-ITB.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />-->

<link rel="stylesheet" type="text/css"  media="screen and (min-width:640px)"href="../css/CSSPage.css" /> 
<link rel="stylesheet"  media="screen and (max-width:540px)" media="screen and (min-width:240px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-width:640px)" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)"  media="screen and (min-width:240px)" href="../css/menuHDR2petit.css" />

<script>
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
<div id="body" class="arrondie">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
 <?php include '../inc/objetMenuhtml.php'; ?>

<div  class="table-responsive"  width="100%">
<table class="ex2" width="100%" style="padding:2%;">
<tr><td colspan="9"><?php //echo TXT_CoordoTitre; ?></td></tr>


<!--<tr><td colspan="9"><h4>personnes à contactées:</h4></td></tr>-->
<tr colspan="9"><td colspan="1"><a target="_blank" href="../image/personnels/MarleneP.png">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MarleneP.png\" width=\"100%\" >";
		}
		else {
			
		echo "<img src=\"../image/personnels/MarleneP.png\" width=\"100%\" >";
		}
		?>
  </a></td><td colspan="2"><?php echo TXT_CoordoResponsable;?></td>
  
  <td colspan="1"><a target="_blank" href="../image/personnels/ClaireP.png">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/ClaireP.png\" width=\"100%\" >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/ClaireP.png\" width=\"100%\" >
			";
		}
		?></a></td>
		<td colspan="2"><?php echo TXT_CoordoCoSecretériat; ?></td>
		<td colspan="1"><a target="_blank" href="LaurenceBordenave.php">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/LBordenavePP.png\" width=\"100%\" >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/LBordenavePP.png\" width=\"100%\" >
			";
		}
		?>
  </a></td>
  <td colspan="2"><?php echo TXT_CoordoLB;?></td></tr>
  
 
 
 <tr colspan="9">
<td colspan="5"><?php echo TXT_Coordo; ?>
 
<div align="center"><h3><?php echo TXT_CoordoAdresse; ?></h3></div></td>
<td colspan="4" style="padding:2%;"><iframe width="100%" height="100%" margin-left="1px" frameborder="1px" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Hopital+Xavier+Arnozan,+33600+Pessac&amp;aq=&amp;sll=44.848567,-0.623131&amp;sspn=0.120486,0.220757&amp;ie=UTF8&amp;hq=Hopital+Xavier+Arnozan,&amp;hnear=Pessac,+Gironde,+Aquitaine&amp;cid=14449669705423434568&amp;ll=44.833474,-0.604935&amp;spn=0.121735,0.192261&amp;z=11&amp;output=embed">
</iframe></td>
</tr>

<tr colspan="9" rowspan="2">
<td colspan="3" style="padding:2%;"><a href="http://www.bisonfute.equipement.gouv.fr/diri/listeflashs.do?pageAstec=ie1_bordeaux.html&amp;langue=fr&amp;evt=1" target="_blank">
<hr><?php echo TXT_CoordoTrafic; ?>
<p><img src="../image/coordonnees_bison_fute.jpg" width="90%"/><br/></p></a></td>

<td colspan="3"> <?php echo "<h3>Pour se déplacer grâce aux transports en commun.</h3><br>"; echo "<h6>".TXT_MobiliteTBM."</h6>"; ?>
<br>
<div align="inline"><?php echo "<h6><a target=\"_blank\" href=\"aeroportXavierXernozan.php\" >En avion :</a>de l'aéroport de Mérignac au CIC-IT,Hôpital Xavier Arnozan (Pessac)</h6>"; ?><br>
<!--<img src="../image/aeroportXavierXernozan.png" width="50%"><br/>-->
</div>
<br>
<div align="inline"><?php echo "<h6><a target=\"_blank\" href=\"gareStJeanXavierXernozan.php\">En train :</a>de la gare Saint Jean (Bordeaux) au CIC-IT, hopital Xavier Arnozan (Pessac)</h6>"; ?></td>
<td colspan="3" style="padding:2%;">
<!--<a href="http://www.infotbm.com/" ></a>-->
<a target="http://www.infotbm.com/" href="plantbcchu.php" ><?php echo TXT_CoordoBusTram; ?>

<img src="../image/plantbcchu.jpg" width="100%"><br/>
</a>
</td>


</tr>
</table></div>

<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</body>
</html>