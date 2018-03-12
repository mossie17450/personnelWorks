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
<!-- icone dans la barre du navigateur  -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<!-- refeuille de styles --> 

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
<!-- images changeantes...   -->

<link rel="stylesheet" href="../css/slideshow.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

	<script type="text/javascript" src="../js/mootools.js"></script>
	<script type="text/javascript" src="../js/slideshow.js"></script>
	<script type="text/javascript">				 
	   window.addEvent('domready', function(){
	    var data7 = {
	      'GRAM1p.jpg': { caption: 'etalement GRAM1' }, 
	      'GRAM2p.jpg': { caption: 'etalement GRAM2' }, 		  
	    };
		
			    var myShow = new Slideshow('show7', data7, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
		 window.addEvent('domready', function(){
	    var data8 = {
	      'TissusGRAM1pp.jpg': { caption: 'GRAM sur coupe de tissus' }, 
	      'TissusGRAM2pp.jpg': { caption: 'GRAM sur coupe de tissus 2' },  
	    };
		
	  		    var myShow = new Slideshow('show8', data8, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	   window.addEvent('domready', function(){
	    var data9 = {
	      'CMIphotoA.jpg': { caption: 'activité antibiotique:CMI.' }, 
	      'CMB.jpg': { caption: 'CMB.' },
		  'CMBIplaque.jpg': {captation: 'CMI sur microplaque.'},	
	    };
		
	  		    var myShow = new Slideshow('show9', data9, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	   window.addEvent('domready', function(){
	    var data10 = {
	      'TestAgglutination.jpg': { caption: 'teste d\'agglutination.' }, 
	      
	    };
		
	  		    var myShow = new Slideshow('show10', data10, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	//]]>
	</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" />

<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />

</head>
<body style="font-family:'Century Gothic '; max-width:1200px; " >

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
<!-- mon menu HDR -->

<div  style="display:flex; flex-direction:row;" >
<div id="contenu" align="inline-block" width="100%">

<div id="CdL" style="float:right; align:inline-block;"> 

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
 </div></div>
 </div>
<!--                                           -->
<!-- choix des langues                     fin -->
<!--                                           -->
<br>	
<!-- menu HDR(Horizontale Deroulant Responsif) -->      
<div  style="display:flex; flex-direction:row;" >
<div id="contenu" align="inline-block" width="100%">
<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div></div>
	
<!-- fin du choix de la langue  -->	
<!-- fin du menu -->


<!-- responsable bactério -->



<!-- responsable bactério fin-->
<!-- responsable bactério -->

<div  id="fin-article" class="table-responsive, ex2"  style="width:100%;" >
<table class="table, ex2" width="100%" ><tr colspan="10">
<td colspan="4"><h3><?php echo  TXT_TAB ; ?></h3></td>
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


<!-- responsable bactério fin-->

<div  style="display:flex; flex-direction:row;">
<div id="contenu" align="inline-block" style="width:100%; height:auto;">

<div id="asideEq"  class="arrondie" >
<h3><?php echo TXT_HEA; ?></h3>

<div class="img" style="border:none;" >
 <a target=\"_blank\" href=\"../image/EtuveBacterio.jpg\">
   <?php	
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
   
		echo "<a target=\"_blank\" href=\"../image/equipements/EtuveBacterio.jpg\"><img src=\"../image/equipements/EtuveBacterio.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
			}
		else {
				echo "<a target=\"_blank\" href=\"../image/equipements/EtuveBacterio.jpg\"><img src=\"../image/equipements/EtuveBacterio.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
}
		?>
	
		<div style="text-align:center;"><?php echo "Etuve pour la bactériologie.";  ?></div><br>
  </a>
 
 <a target="_blank" href="../image/PSMCell3.jpg">
   <?php	
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
   
		echo "<a target=\"_blank\" href=\"../image/equipements/PSMCell3.jpg\"><img src=\"../image/equipements/PSMCell3.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
			}
		else {
				echo "<a target=\"_blank\" href=\".../image/equipements/PSMCell3.jpg\"><img src=\"../image/equipements/PSMCell3.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
}
		?>
	
		<div><?php echo TXT_BEA4; ;  ?></div><br>
  </a>

<a target="_blank" href="../image/Spectrophotometre.jpg">
 <?php echo "<br><a target=\"_blank\" href=\"../image/equipements/Spectrophotometre.jpg\"><img src=\"../image/equipements/Spectrophotometre.jpg\" style=\"width:95%; padding:2px; height:auto\"></a>";
 ?>
<?php echo TXT_BEA2; ?><br></a>

<a target="_blank" href="../image/lecteurDePlaque.jpg">
<?php
 echo "<br><a target=\"_blank\" href=\"../image/equipements/lecteurDePlaque.jpg\"><img src=\"../image/equipements/lecteurDePlaque.jpg\" style=\"width:95%; padding:2px; height:auto\"></a>"; ?>
<div><?php echo TXT_BEA3; ?></div></a>
</div>
 </div>


<div  style="display:flex; flex-direction:column; ">


<div id="section-article" class="table-responsive, ex2"> 
<table class="table, ex2" width="75%">
<tr colspan="8"><td colspan="8"><h3><?php echo TXT_BM; ?></h3></td></tr>
<tr colspan="8"><td colspan="8"><h6><?php echo TXT_BM1; ?></h6></td></tr>
<tr colspan="8"><td colspan="8"><h3><?php echo TXT_BM4; ?><br></h3></td></tr><br>
<tr colspan="8"><td colspan="4"><img src="../image/equipements/Broyeure.jpg" alt="Broyeure" width="80%" height="auto" align="center" class="displayed"></td>
<td colspan="4"><div id="show9" class="slideshow"><img src="../image/CMIphotoA.jpg" alt="" width="60%"  align="center" class="displayed" /></div></td></tr>
<tr colspan="8"><td colspan="4"><h6 align="center"><?php echo TXT_BLI3; ?></h6></td><td colspan="4"><h6 align="center"><strong><?php echo TXT_BLI1; ?></strong></h6></td></tr>
 </table>

<h3><?php echo TXT_BM3; ?><br></h3>
<table class="table, ex2" width="78%">
 
<tr colspan="8">
<td colspan="2"><div id="show7" class="slideshow"><img src="../image/GRAM1p.jpg" alt="coloration GRAM etalement" width="50%" /></div></td>
  <td colspan="1"><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
   
	<td colspan="2"><div id="show8" class="slideshow" >
    <img src="../image/TissusGRAM1pp.jpg" alt="GRAM sur coupe de tissus" width="80%"/></div> 
	
	
	</td><td colspan="1"><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
	
	<td colspan="2"><div id="show10" class="slideshow" >
    <img src="../image/TestAgglutination.jpg" alt="" width="50%"/></div> 
	
	</td></tr><tr colspan="8"><td colspan="2" style="text-align:left;"><?php echo TXT_BLI4; ?></td><td></td><td  colspan="2" style="text-align:left;"><?php echo TXT_BLI5; ?></td><td></td><td  colspan="2" style="text-align:left;"><?php echo TXT_BLI2; ?></td></tr>
  </table><br>
 </div> 

</div>
</div></div>


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
<!-- ajout pied de page : plan du site....   --> 
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml ; ?>
</div>
</div>
<!-- fin ajout -->
</div>
</body>
</html>