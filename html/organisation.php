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
<meta charset="utf8" />
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icone dans la barre du navigateur   -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<!--- ma premiere( presque) feuille de style : -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	


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
 <!-- choix de la langue -->
 <?php
		  //premiere page du site : je choisit la langue francaise par défaut. Ce choix est nécessaire car si pas de langue choisit :renvoie d'une erreur...
 if($_SESSION['lang'] && empty($_GET['langue'])){
		$_SESSION['lang'];
 }
	 
 else if(!empty($_GET['langue'])){
 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change: langue chois par le formulaire.
 }

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
<body style="font-family:'Century Gothic Normal';" >
<div id="body" class="arrondie" height="100%" >
<!-- entete -->
<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">

<img src="../image/logos/CICITBordeaux.png"  class="arrondie" style="width:100%;" >
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div><br>


<div  style="display:flex; flex-direction:row;">                                                                                        
<div id="contenu" align="inline" width="100%">
<!--                                                                                            -->
<!-- formulaire de choix des langue, avec bouton radio remplace par une image et autosubmit...  -->
<!--                                                                                            -->
<div id="CdL" style="float:right; align:inline;"> 

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
</form> 
 </div></div></div> 

<!-- choix des langues en php  fin -->
<!--                               -->	
<!-- menu HDR(Horizontale Deroulant Responsif)-->  
<br>      
<div  style="display:flex; flex-direction:row;"> 
                                                                                        
<div id="contenu" align="inline" width="100%">
<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>


</div>
</div>

<div  style="display:flex; flex-direction:row;"> 
<div  style="display:flex; flex-direction:column; height:auto; width:100%; margin-right:5%;">
<div id="contenu" style="margin-left:5%; margin-right:5%; text-align:justify; "><br>
<?php  //echo  TXT_TitresFonctionnement ; ?>
<?php  echo TXT_A1Fonction ; ?>

<?php echo TXT_A2Fonction ; ?>

</div>

</div>	
</div>


<div  id="section-article" class="table-responsive, ex2">
<table class="table, ex2" width="100%" ><tr colspan="7"><td colspan="3">


   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"equipeCIC-IT.php \"><img src=\"../image/personnels/PhotoGroupeCIC-IT2017.jpg\" alt=\"photo de l'équipe du CIC-IT\" title=\"photo de l'équipe du CIC-IT, mars 2017\" style=\"width:100%; padding:2px; \" class=\"displayed\">
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"equipeCIC-IT.php \" /><img src=\"../image/personnels/PhotoGroupeCIC-IT2017.jpg\" alt=\"photo de l'équipe du CIC-IT\" title=\"photo de l'équipe du CIC-IT\" style=\"width:100%;  padding:2px;\" class=\"displayed\">
";
		}
		?></a>
		
		
 
 </td><td colspan="4">

 
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\" ../image/OrganigrammeCIC-ITnov2016b.jpg\"><img src=\"../image/OrganigrammeCIC-ITnov2016b.jpg\" alt=\"Organigrame du CIC-IT\" title=\"Organigrame du CIC-IT\" style=\"width:100%; padding:2px; \" class=\"displayed\">
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"../image/OrganigrammeCIC-ITnov2016b.jpg \"><img src=\"../image/OrganigrammeCIC-ITnov2016b.jpg\" alt=\"Organigrame du CIC-IT\" title=\"Organigrame du CIC-IT\" style=\"width:100%; padding:2px;\" class=\"displayed\">
";
		}
		
		?></a>
		
	 </td></tr>
	 <tr colspan="7">
	 <td colspan="3"><h4 align="center"><?php  echo TXT_Equipe; ?></h4></td><td colspan="4"><h4 align="center"><?php  echo TXT_legendeImg; ?></h4></td>
	 
	 </tr>
	 </table>
	</div>	


	


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
</div></div>
 <!-- fin ajout -->
</div>
</body>
</html>