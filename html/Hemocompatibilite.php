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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8;">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!--- ma premiere( presque) feuille de style : -->
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>




<!-- diaporama :    -->
 <link rel="stylesheet" type="text/css" href="../css/slideshow.css" media="screen" />
	<script type="text/javascript" src="../js/mootools.js"></script>
	<script type="text/javascript" src="../js/slideshow.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
<!-- fin diaporama  -->
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />-->
<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />-->

<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" />
<!--<link rel="stylesheet" media="screen and (min-width:200px)and(max-width:640px)" href="../css/toutpetitResolution.css" />-->
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="../css/menuHDR2petit.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />

<!---                         -->
<!---mes scripts javascript : -->
<!---                         -->
<script type="../text/javascript">
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
<body style="font-family:'Century Gothic Normal'; max-width:1200px; " >

<?php
	  if($_SESSION['lang'] && empty($_GET['langue'])){
 ($_SESSION['lang']);
 }
	else if(!empty($_GET['langue']) ){
 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change
 }


 //inclusion des fichiers langue ... différent du choix de la langue.
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
<div id="body" class="arrondie">

<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<img src="../image/logos/CICITBordeaux.png"  class="arrondie" style="width:100%;" >
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>


<!-- choix de la langue  -->

 <div  style="display:flex; flex-direction:row;"> 
 <div id="contenu" align="inline" width="100%">
 
<div id="CdL"  style="float:right;" > 
 
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
//echo "langue:".$_SESSION['lang'];
?>

 </div></div></div>
<!--                                           -->
<!-- choix des langues                     fin -->
<!--                                           -->	
<br>
<!-- menu HDR(Horizontale Deroulant Responsif) -->   
 <div  style="display:flex; flex-direction:row;"> 
 <div id="contenu" align="inline" width="100%">    
<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div></div>
<!-- fin du menu -->

<div  id="fin-article" class="table-responsive, ex2">
<table class="table, ex2" width="100%" ><tr colspan="10">
<td colspan="4"><h3><?php echo  TXT_HMT ; ?></h3></td>
<td colspan="1">
<a target="_blank" href="../image/personnels/MartineP.png" style="padding:10%;">

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MartineP.png\" width=\"80%\"; title=\"\" alt=\"\" height=\"auto\"; align=\"center\"; float=\"left\"; >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/MartineP.png\" width=\"100\" title=\"\" alt=\"\" height=\"auto\"; align=\"center\"; float=\"left\";>
			";
		}
		?></a>
	</td>
<td colspan="4" style="padding-left:5px;">
<div align="left"><h3><?php echo TXT_ResponsableCellule ; ?></h3></div>
<div  style="display:inline-block; width:100%;  text-align:left;">
<?php echo  TXT_TCBHRbis;   ?>	 
</div>
</td>
</tr></table></div>


<div  style="display:flex; flex-direction:row;">  
 
<div id="contenu" align="inline-block" width="100%">

<div id="asideEq"  class="arrondie" align="block">
<?php echo TXT_HEA; ?>

 <a target="_blank" href="../image/equipements/VetABC.jpg"><img src="../image/equipements/VetABC.jpg" style="width:95%; padding:2px;">
<br><h6><?php echo TXT_HEA1; ?></h6></a>

<a target="_blank" href="../image/equipements/Cytometre.jpg"><img src="../image/equipements/Cytometre.jpg" alt="cytometre" style="width:95%; padding:2px;" >
<br><h6><?php echo TXT_HEA2; ?></h6></a>

<a target="_blank" href="../image/equipements/PSMCell.jpg"><img src="../image/equipements/PSMCell.jpg"  alt="PSM culture cellulaire" style="width:95%; padding:2px;" >
<br><h6><?php echo TXT_HEA3; ?></h6></a>

</div>


<div  style="display:flex; flex-direction:column; ">
<div id="section-article" width="75%">

<?php echo TXT_HM; ?>
 
<div style="display:flex; flex-direction:column; ">
<?php echo TXT_HST1; ?>
<div  style="display:flex;flex-direction:column; margin:5px;">
  <a target="_blank" href="../image/hemolyse.jpg">
    <img src="../image/hemolyse.jpg" alt="test d'hémolyse" style="width:80%;" class="displayed">
  </a><br>
  <div style="display:flex;flex-direction:column; text-align:center;"><?php echo TXT_HLI1; ?></div>
  </div>
  <br>
  

 <?php echo TXT_HST2; ?><br>
  <div class="displayed" style="display:flex;flex-direction:raw; margin:5px; ">
   
   
    <div class="displayed" style="display:flex;flex-direction:raw; margin:5px; ">
  
  <div class="displayed" style="display:flex;flex-direction:column; margin:5px; ">
  <a target="_blank" href="../image/agrego.png">
    <img src="../image/agrego.png" alt="" style="width:80%" class="displayed">
  </a><br>
  <div text-align="center"><?php echo TXT_HLI4; ?></div>
  </div></div>
   
  <div class="displayed" style="display:flex;flex-direction:column; margin:5px; ">
  <a target="_blank" href="../image/facs1.jpg">
    <img src="../image/facs1.jpg" alt="activaion plaquettaire T=0min" style="width:80%" class="displayed">
  </a><br>
  <div><?php echo TXT_HLI2; ?></div>
  </div>
  
  <div class="displayed" style="display:flex;flex-direction:column; margin:5px;">
  <a target="_blank" href="../image/facs2.jpg">
    <img src="../image/facs2.jpg" alt="activaion plaquettaire T=15min" style="width:80%" class="displayed">
  </a><br>
  <div><?php echo TXT_HLI3; ?></div>
  </div>
  </div>
 </div> 
 

 
 <div style="display:flex;flex-direction:column; margin:5px;">
  <div><h3><?php echo TXT_HTI5; ?></h3></div>
 <div  style="display:flex;flex-direction:column; margin:5px;">
  <a target="_blank" href="../image/cpt.jpg">
    <img src="../image/cpt.jpg" alt="test complement:ELISA C3a" style="width:80%;" class="displayed">
  </a><br>
   <div style="display:flex;flex-direction:column; text-align:center;"><?php echo TXT_HLI8; ?></div>
 </div>
 
 <div style="display:flex;flex-direction:column; margin:5px;">
 
 <div><h3><?php echo TXT_HTI6; ?></h3></div>
 <div  style="display:flex;flex-direction:column; margin:5px;">
  <a target="_blank" href="../image/PTT.jpg">
    <img src="../image/PTT.jpg" alt="test chronométriques" style="width:20%;" class="displayed">
  </a><br>
   <div style="display:flex;flex-direction:column; text-align:center;"><?php echo TXT_HLI9; ?></div>
 </div>
 
  <div style="display:flex;flex-direction:column; margin:5px;">

 <div><h3><?php echo TXT_HTI7; ?></h3></div>
 <div  style="display:flex;flex-direction:column; margin:5px;">
  <a target="_blank" href="../image/num.jpg">
    <img src="../image/num.jpg" alt="Automate" style="width:50%;" class="displayed">
  </a><br>
   <div style="display:flex;flex-direction:column; text-align:center;"><?php echo TXT_HLI10; ?></div>
 </div>
 
 

</div>
</div>

</div>
</div>
</div></div></div>
<!-- fin du contenu  -->
<!-- ajout pied de page : plan du site....   -->

<div style="display:flex; flex-direction:column; ">
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
<?php echo TXT_Piedhtml ; ?>
</div>
</div>
<!-- fin ajout -->
</div>
</body>
</html>