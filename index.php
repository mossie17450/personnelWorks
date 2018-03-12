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
<!-- Global site tag (gtag.js) - Google Analytics fin-->

<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<!--
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- page à dimention de l'ecran....  attention, bloquer la largeur pour les grand et tres grand ecran!!! -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<link rel="icon" type="image/png" href="image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="image/logos/logoCIC-ITB.png" /><![endif]-->

<!---                         -->
<!--- mes feuilles de style : -->
<!---                         -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet"  type="text/css"   media="screen and (min-width:240px)"  href="../css/CSSPage.css" /> <!-- a corriger avec un autre fichier .css (min-width:240 and max-width:640px). celui-ci devient :min-width:640px   --> 
<!--<link rel="stylesheet"  media="screen and (max-width:640px)" media="screen and (min-width:240px)" href="../css/toutpetitResolution.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)"  media="screen and (min-width:240px)" href="../css/menuHDR2petit.css" />-->


<script type="text/javascript" src="swfobject.js"></script>  
  <script type="text/javascript">  
   var flashvars = {};  
   var params = {};  
   var attributes = {};  
   swfobject.embedSWF("untitled.swf", "AlternativeContent", "0", "0", "9.0.0", false, flashvars, params, attributes);  
  </script>  

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
<?php 
	  
	   if(empty($_SESSION['lang']) && empty($_GET['langue'])){                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
	 $_SESSION['lang']='fr';
	
  	 }
	  	 
	  else if($_SESSION['lang'] && empty($_GET['langue'])){
 $_SESSION['lang'];
 }
	else if(!empty($_GET['langue']) ){
 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change
 }

 //inclusion des fichiers langue ... différent du choix de la langue.
	if ($_SESSION['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
 include('lang/fr-lang.php');
  	 } 
  	 
  	 else if ($_SESSION['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
  	 include('lang/en-lang.php');
  	 }
  	
	 if (isset($_SESSION['lang'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	
	//echo 'langue:'.$_SESSION['lang'];
	echo '<br />';

	// On affiche un lien pour fermer notre session
	
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>
<body style="font-family:'Century Gothic Normal'; max-width:1200px; height:auto;" >
<div  class="arrondie" height="auto">
<!---                         -->
<!-- en tete                  -->
<!---                         -->
<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:76%;  flex-direction:column;">
<img src="image/logos/CICITFevrier2018bis.jpg"  class="arrondie" style="width:100%; " >
</div>
<div style="display:flex; width:14%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="image/logos/reseauCIC-ITNter.jpg"  class="arrondie" style="width:100%; height:auto;" ></a></div>
</div>

<!-- menu et choix des langues -->
<!--                                                                                            -->
<!-- formulaire de choix des langue, avec bouton radio remplacé par une image et auto submit...  -->

<div  style="display:flex; flex-direction:row;">   
<div id="contenu" align="inline" width="100%">

<div id="CdL"> 
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
	<td colspan=\"3\"><a href=\"html/admin.php \" ><img src=\"../image/cadenasp.png\" width=\"100%\"></a></td>
	</tr></table></div>
		";
		}		
		?>
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
//echo "langue:".$_SESSION['lang'];
?>
</form> 
 </div>
 </div>
 </div>


<!--                               -->
<!-- choix des langues en php  fin -->
<!--                               -->
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
<div  style="display:flex; flex-direction:row; width:100%; font-family:'Century Gothic Normal'; height:auto; "> 
<div id="contenu" align="inline" style="font-family:'Century Gothic Normal'; ">
<nav style="font-family:'Century Gothic Normal'; max-width:1200px; ">
<ul id="menu" style="font-family:'Century Gothic Normal';"><?php echo TXT_Menu; ?>
</ul>
</nav>
</div>
</div>


<div  style="display:flex; flex-direction:row; height:auto;">
<div  id="contenu" ><br>
<!--<h1 align="center" ><?php // echo TXT_Titre; ?></h1> titre supprimé -->
<h2 align="center" ><strong><?php echo TXT_SSTitre; ?></strong></h2>
<!--  titres de la page....  -->
<?php echo TXT_Article; ?>		
</div>
</div>

<br>
<div id="contenu" style="display:inline-block; margin-left:5%; margin-right:5%; text-align:left; height:auto;" >

<div  style="display:flex; flex-direction:row; ">
<div id="PTIB" style="width:40%; height:auto; " class="arrondie" >
 <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"image/ptibbis.jpg\" width=\"100%\" height=\"auto\"   >
";
		}
		else {
			
		echo "<img src=\"image/ptibbis.jpg\"   width=\"100%\" height=\"auto\" >
			";
		}
		?>
 </div>
 
<!--                             -->
<!--image animé                  -->
<!--                             -->	
<!--   si pas adobe flash...     -->
<!--                             -->	             		
<?php 

if($_SESSION['lang']=='fr'){

echo "

<DIV   style=\" width:50%; height:30%px; padding-left:1%; padding-right:5px; \">
<p id=cloud></p>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"100%\", \"120%\",
					\"9\", \"\",
					{
						cloud_data:\"cloud5.xml\",
						tcolor:\"0x999999\",
						tcolor2:\"0x666666\",
						hicolor:\"0x494949\",
						tspeed:\"150\",
						fontFace:\"\"
					},
					{wmode: \"transparent\", menu: \"false\", quality: \"best\"}
					);
});



</SCRIPT>
";
}
else {
echo "
<DIV   style=\" width:50%; height:30%px; padding-left:1%; padding-right:5px;  \">

<p id=cloud ></p>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"100%\", \"120%\",
					\"9\", \"\",
					{
						cloud_data:\"cloud4.xml\",
						tcolor:\"0x999999\",
						tcolor2:\"0x666666\",
						hicolor:\"0x494949\",
						tspeed:\"150\",
						fontFace:\"\"
					},
					{wmode: \"transparent\", menu: \"false\", quality: \"best\"}
					);
});
</SCRIPT>
";
}

?></div>
<!-- id="AlternativeContent" dans le header.... -->
<div id="AlternativeContent">

<a href="http://www.adobe.com/go/getflashplayer"><img src="image/logos/Adobe-Flash-Player-icon.png" alt="Get Adobe Flash player" />installez adobe flash s'il vous plait</a>
</div>
</div>

<!--                             -->
<!-- images dans un tableau...   -->
<!-- logos à la meme taille...   -->
<!--                             -->
<!--   ied de page               -->
<!--                             -->

<div style="display:flex; flex-direction:column;" >
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



<br>
<div id="test" class="arrondie">
<?php echo TXT_Pied; ?> 
</div>
</div>
<br>
</div>
</body>
</html>
