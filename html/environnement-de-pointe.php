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
<?php
	 //premiere page du site : je choisit la langue francaise par défaut. Ce choix est nécessaire car si pas de langue choisit :renvoie d'une erreur...
	
	 if($_SESSION['lang'] && empty($_GET['langue'])){
		$_SESSION['lang'];
 }
 else if(!empty($_GET['langue']) ){
 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change: langue chois par le formulaire.
 }
//else  $_SESSION['lang']='fr';
 
	if ($_SESSION['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
 include('../lang/fr-lang.php');
  	 }  	 
  	 else if ($_SESSION['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
  	 include('../lang/en-lang.php');
  	 }	 
  	 else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
  	 include('../lang/fr-lang.php');
  	 }
	 ?>
<body style="font-family:'Century Gothic Normal'; max-width:1200px; height:auto;" >
<div id="body" class="arrondie">

<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php // echo TXT_EnTete; ?> 
<img src="../image/logos/CICITBordeaux.png"  class="arrondie" style="width:100%;" >
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>
 
<div  style="display:flex; flex-direction:row;  "> 
<!--                                                                                            -->
<!-- formulaire de choix des langue, avec bouton radio remplace par une image et autosubmit...  -->
<!--                                                                                            -->
<div id="contenu" align="inline" width="100%">

<div id="CdL" style="float:right;"> 

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "
<div style=\"display:flex; flex-direction:row; float:left; width:200% \">			
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"  \">
<div  class=\"table-responsive, ex2\" ><table style=\"border:none; width:30%; float:left; \"><tr colspan=\"12\">

<td colspan=\"1\"><img src=\"../image/transparent.png\" width=\"5%\" ></td>	
<td colspan=\"4\"><a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"100%\"></a></td>
<td colspan=\"1\"><img src=\"../image/transparent.png\" width=\"5%\" ></td>	
<td colspan=\"4\"><a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"100%\"></a></td>
<td colspan=\"2\"><a href=\"html/admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"100%\"></a></td>
</tr></table></div>	
			"; 	
		}
		
		else {			
		echo "
		<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" >
		<div class=\"table-responsive, ex2\" style=\"min-height:50px; min-width:100px;\">			
			<table class=\"table, ex2\" style=\"border:none; min-height:50px; min-width:100px;\"><tr colspan=\"13\">			
<a href=\"\" ><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><td colspan=\"4\"><label for=\"choixlangue1\"><img src=\"../image/fr.png\" width=\"100%\"></td></a><td colspan=\"1\"><img src=\"../image/transparent.png\" width=\"10%\" height=\"auto\"></td>
<a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><td colspan=\"4\"><label for=\"choixlangue2\"><img src=\"../image/en.png\" width=\"100%\"></td></a><td colspan=\"1\"img src=\"../image/transparent.png\" width=\"10%\" height=\"auto\"></td>		
	<td colspan=\"3\"><a href=\"admin.php\" ><img src=\"../image/cadenasp.png\" width=\"100%\"></a></td>
	</tr></table></div>
		";
		}		
		?>	
</form>		
 </div> 	
	

<?php

 if($_SESSION['lang'] && empty($_POST['langue'])){
 $_SESSION['lang'];
 }
else if($_POST['langue']=='fr'){
 include('lang/fr-lang.php');
$_SESSION['lang']='fr';

}
else if($_POST['langue']=='en'){

 $_SESSION['lang']='en';
 include('lang/en-lang.php');
}
//echo "langue:".$_SESSION['lang']; pour le developement.
?>
</form></div>	
 </div></div>
<!--                               -->
<!-- choix des langues en php  fin -->
<!--                               -->
<br>	
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
<div  style="display:flex; flex-direction:row;">
<div id="contenu" align="inline" width="100%">     

<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div>
</div>
	 
<!-- insertion  -->
<div  style="display:flex; flex-direction:row; ">
<div id="contenu" style="display:inline-block;" width="100%">

<div style="display:flex; flex-direction:column;">
<!--  titres de la page....   --><br>
<div align="center"><br><?php echo TXT_TitreEnvironnement; ?><br></div>
	
<!--  texte de la page....   -->
<article><?php echo TXT_ArticleEnvironnement;  ?></article>
<article><?php echo "<br><br>";  ?></article><!-- un peu d'espace... -->
</div>
<!-- logo horyzontales -->
<div  style="display:flex; flex-direction:row;">
<div  class="table-responsive, ex2">
<table class="table, ex2" width="100%"><tr colspan="14">
<td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td colspan="2"><a href="https://www.dondusang.net/rewrite/heading/804/efs/l-efs-en-regions/aquitaine-limousin.htm?idRubrique=804"><img src="../image/logos/EFSAL.jpg" width="100%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="1"><a href="http://www.ptib.u-bordeaux2.fr/index.php?p=accueil"><img src="../image/logos/logoPTIB.png" width="100%"class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="1"><a href="https://www.ihu-liryc.fr/"><img src="../image/logos/IHU liryc.jpg" width="100%" class="displayed"></a></td>
   <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="1"><a href="http://www.2acbi-asso.fr/"><img src="../image/logos/logo-2acbi.jpg" width="100%" class="displayed"></a></td> 
   <td><img src="../image/markerTransparent.png" width="2%" height="auto"></td>
  <td colspan="2" rowspan="1"><a href="https://bcrm.u-bordeaux.fr/"><img src="../image/logos/BxCRM.png" width="100%" class="displayed"></a></td> 
  <td><img src="../image/markerTransparent.png" width="2%" height="auto"></td>
  </tr>
 </table>
</div>
</div>



</div></div>

<!-- ajout pied de page : plan du site....   --> 

<div style="display:flex; flex-direction:column; " style=" height:10%;">
<div  class="table-responsive, ex2" >
<table class="table, ex2" width="100%"><tr colspan="10">
 <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td colspan="1"><a href="https://www.chu-bordeaux.fr" ><img src="../image/logos/ChuBordeauxN.jpg" width="50%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="2"><a href="http://www.aquitaine-poitou-charentes.inserm.fr"><img src="../image/logos/INSERMN.jpg" width="50%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="2"><a href="http//www.u-bordeaux.fr"><img src="../image/logos/universitebN.jpg" width="50%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td><a href="http://www.bergonie.org" ><img src="../image/logos/BergonieN.jpg" width="70%" class="displayed"></a></td> 
   <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  </tr>
 </table>
</div>

 <div id="test" class="arrondie">
 <?php echo TXT_Piedhtml; ?>  
 </div>
 </div>
 
 </div>
</body>
</html>
