<?php
session_start();
?>
<!DOCTYPE html>
<!--<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="utf8" lang="utf8" dir="ltr">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<meta name="robots" content="noimageindex" />
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique, histologie et biomatériaux" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icone dans la barre du navigateur   -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
-->

<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" /> 
<!--<link rel="stylesheet"  media="screen and (max-width:540px)" media="screen and (min-width:240px)" href="../css/toutpetitResolution.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)"  media="screen and (min-width:240px)" href="../css/menuHDR2petit.css" />-->


<link rel="stylesheet" type="text/css" href="../css/slideshow.css" media="screen" />
<script type="text/javascript" src="../js/mootools.js"></script>
<script type="text/javascript" src="../js/slideshow.js"></script>
<script type="text/javascript">

<!-- Debut
// JavaScript pris sur le site: "http://www.java.scripts-fr.com"
//nous donne la largeur de la fenetre (ne marche pas sous iE

var larg = (window.innerWidth);
var haut = (window.innerHeight);
//alert(larg);

	if(larg>=700){
	//<![CDATA[
	  window.addEvent('domready', function(){
	    var data = {
	      '13-03(G10)2.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G10)TM3.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G20).jpg': { caption: 'coloration trichromique de Masson.' }, 
	     
	    };
	    var myShow = new Slideshow('show', data, {controller: false, height:200, hu: '../image/', thumbnails: false,width:200  });
	  });
	//]]>
	
	window.addEvent('domready', function(){
	    var data1 = {
	      '16-01 1a-1 (G40).jpg': { caption: 'coloration HES.' }, 
	      '16-01 1a-1 (G400)5.jpg': { caption: 'coloration HES.' }, 
	    };
		
	    var myShow = new Slideshow('show1', data1, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data2 = {
	      '10-08 1-BV0-P07-1 CK8 (G10)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P07-1 CK8 (G40)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P21-2 CK8(G20)b.jpg': { caption: 'IHC-CK8.' }, 
	    };
		
	    var myShow = new Slideshow('show2', data2, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
		var myShow = new Slideshow('show7', data2, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	  
	  
	  window.addEvent('domready', function(){
	    var data3 = {
	      '10-08 1-BV0-P10-1 ki67(G40)7b.jpg': { caption: 'IHC-ki67.' }, 
	      '10-08 1-BV4-P06-2 ki67 (G40)5b.jpg': { caption: 'IHC-ki67.' },     
	    };
		
	    var myShow = new Slideshow('show3', data3, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data4 = {
	      '15-01 158D-c- A (G10)b.jpg': { caption: 'Goldner?.' }, 
	      '15-01 167G(C)-B2 (G10)b.jpg': { caption: 'G.' }, 
	      '15-01 170G(C)-D1(G10)b.jpg': { caption: 'G.' }, 
	      '15-01 172G(C)-I2 (G10)b.jpg': { caption: 'G.' }, 
		   '15-01 180G-d- D (G10)defect et osb.jpg': { caption: 'G?.' }, 
	    };
	    var myShow = new Slideshow('show4', data4, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data5 = {
	      '15-01 170D(C) (G10)b.jpg': { caption: 'VVK?' }, 
	      '15-01 170D(C) (G40)b.jpg': { caption: 'VVK.' }, 
	     '15-01 170D(C) (G100)b.jpg': { caption: 'VVK.' }, 
	     
	    };
	    var myShow = new Slideshow('show5', data5, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data6 = {
	      '16-01 1a-4 ORC (G400)2b.jpg': { caption: 'coloration spécifique à l\'orcéine' },  
	    };
	    var myShow = new Slideshow('show6', data6, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	  window.addEvent('domready', function(){
	    var data7 = {
	      '11-08 P1B-9 caldesmon (G10)pp.jpg': { caption: 'Caldesmon' },  
	    };
	    var myShow = new Slideshow('show7', data7, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	}

	else if(larg>=500 && larg<700){
	//<![CDATA[
	  window.addEvent('domready', function(){
	    var data = {
	      '13-03(G10)2.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G10)TM3.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G20).jpg': { caption: 'coloration trichromique de Masson.' }, 
	     
	    };
	    var myShow = new Slideshow('show', data, {controller: false, height:150, hu: '../image/', thumbnails: false,width:150  });
	  });
	//]]>
	
	window.addEvent('domready', function(){
	    var data1 = {
	      '16-01 1a-1 (G40).jpg': { caption: 'coloration HES.' }, 
	      '16-01 1a-1 (G400)5.jpg': { caption: 'coloration HES.' }, 
	    };
		
	    var myShow = new Slideshow('show1', data1, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data2 = {
	      '10-08 1-BV0-P07-1 CK8 (G10)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P07-1 CK8 (G40)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P21-2 CK8(G20)b.jpg': { caption: 'IHC-CK8.' }, 
	    };
		
	    var myShow = new Slideshow('show2', data2, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
		var myShow = new Slideshow('show7', data2, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  
	  window.addEvent('domready', function(){
	    var data3 = {
	      '10-08 1-BV0-P10-1 ki67(G40)7b.jpg': { caption: 'IHC-ki67.' }, 
	      '10-08 1-BV4-P06-2 ki67 (G40)5b.jpg': { caption: 'IHC-ki67.' },     
	    };
		
	    var myShow = new Slideshow('show3', data3, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data4 = {
	      '15-01 158D-c- A (G10)b.jpg': { caption: 'Goldner' }, 
	      '15-01 167G(C)-B2 (G10)b.jpg': { caption: 'G.' }, 
	      '15-01 170G(C)-D1(G10)b.jpg': { caption: 'G.' }, 
	      '15-01 172G(C)-I2 (G10)b.jpg': { caption: 'G.' }, 
		   '15-01 180G-d- D (G10)defect et osb.jpg': { caption: 'G.' }, 
	    };
	    var myShow = new Slideshow('show4', data4, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data5 = {
	      '15-01 170D(C) (G10)b.jpg': { caption: 'VVK' }, 
	      '15-01 170D(C) (G40)b.jpg': { caption: 'VVK.' }, 
	     '15-01 170D(C) (G100)b.jpg': { caption: 'VVK.' }, 
	     
	    };
	    var myShow = new Slideshow('show5', data5, {controller: false, height:180, hu: '../image/', thumbnails: false,width: 180  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data6 = {
	      '16-01 1a-4 ORC (G400)2b.jpg': { caption: 'coloration spécifique à l\'orcéine' },  
	    };
	    var myShow = new Slideshow('show6', data6, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  window.addEvent('domready', function(){
	    var data7 = {
	      '11-08 P1B-9 caldesmon (G10)pp.jpg': { caption: 'Caldesmon' },  
	    };
	    var myShow = new Slideshow('show7', data7, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });

	}
	
		else if(larg<=500){
	//<![CDATA[
	  window.addEvent('domready', function(){
	    var data = {
	      '13-03(G10)2.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G10)TM3.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G20).jpg': { caption: 'coloration trichromique de Masson.' }, 
	     
	    };
	    var myShow = new Slideshow('show', data, {controller: false, height:80, hu: '../image/', thumbnails: false,width:80  });
	  });
	//]]>
	
	window.addEvent('domready', function(){
	    var data1 = {
	      '16-01 1a-1 (G40).jpg': { caption: 'coloration HES.' }, 
	      '16-01 1a-1 (G400)5.jpg': { caption: 'coloration HES.' }, 
	    };
		
	    var myShow = new Slideshow('show1', data1, {controller: false, height:80, hu: '../image/', thumbnails: false,width: 80  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data2 = {
	      '10-08 1-BV0-P07-1 CK8 (G10)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P07-1 CK8 (G40)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P21-2 CK8(G20)b.jpg': { caption: 'IHC-CK8.' }, 
	    };
		
	    var myShow = new Slideshow('show2', data2, {controller: false, height:80, hu: '../image/', thumbnails: false,width: 80  });
		var myShow = new Slideshow('show7', data2, {controller: false, height:80, hu: '../image/', thumbnails: false,width: 80  });
	  });
	  
	  
	  window.addEvent('domready', function(){
	    var data3 = {
	      '10-08 1-BV0-P10-1 ki67(G40)7b.jpg': { caption: 'IHC-ki67.' }, 
	      '10-08 1-BV4-P06-2 ki67 (G40)5b.jpg': { caption: 'IHC-ki67.' },     
	    };
		
	    var myShow = new Slideshow('show3', data3, {controller: false, height:80, hu: '../image/', thumbnails: false,width: 80  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data4 = {
	      '15-01 158D-c- A (G10)b.jpg': { caption: 'Goldner' }, 
	      '15-01 167G(C)-B2 (G10)b.jpg': { caption: 'G.' }, 
	      '15-01 170G(C)-D1(G10)b.jpg': { caption: 'G.' }, 
	      '15-01 172G(C)-I2 (G10)b.jpg': { caption: 'G.' }, 
		   '15-01 180G-d- D (G10)defect et osb.jpg': { caption: 'G.' }, 
	    };
	    var myShow = new Slideshow('show4', data4, {controller: false, height:120, hu: '../image/', thumbnails: false,width: 120  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data5 = {
	      '15-01 170D(C) (G10)b.jpg': { caption: 'VVK' }, 
	      '15-01 170D(C) (G40)b.jpg': { caption: 'VVK.' }, 
	     '15-01 170D(C) (G100)b.jpg': { caption: 'VVK.' }, 
	     
	    };
	    var myShow = new Slideshow('show5', data5, {controller: false, height:120, hu: '../image/', thumbnails: false,width: 120  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data6 = {
	      '16-01 1a-4 ORC (G400)2b.jpg': { caption: 'coloration spécifique à l\'orcéine' },  
	    };
	    var myShow = new Slideshow('show6', data6, {controller: false, height:80, hu: '../image/', thumbnails: false,width: 80  });
	  });
	  window.addEvent('domready', function(){
	    var data7 = {
	      '11-08 P1B-9 caldesmon (G10)pp.jpg': { caption: 'Caldesmon' },  
	    };
	    var myShow = new Slideshow('show7', data7, {controller: false, height:80, hu: '../image/', thumbnails: false,width: 80  });
	  });

	}
	
	</script>



<!--pour le menu...  -->
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
<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    /* fonction demander par la CNIL  */
    _paq.push([function() { 
var self = this; 
function getOriginalVisitorCookieTimeout() { 
var now = new Date(), 
nowTs = Math.round(now.getTime() / 1000), 
visitorInfo = self.getVisitorInfo(); 
var createTs = parseInt(visitorInfo[2]); 
var cookieTimeout = 33696000; // 13 mois en secondes 
var originalTimeout = createTs + cookieTimeout -
nowTs; 
return originalTimeout; 
} 
this.setVisitorCookieTimeout( getOriginalVisitorCookieTimeout() ); 
}]);
   /* fin de la fonction demander par la CNIL  */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.cic-it-bordeaux.fr/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>
<!-- langue par défaut                        -->
<?php include'../inc/languesParDefauthtml.php';?>
<body style="font-family:'Century Gothic Normal'; max-width:1200px; height:auto; border:none;" >
<div class="arrondie">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
<?php include '../inc/objetMenuhtml.php'; ?>
<histologie au CIC-IT de Bordeaux>
<histologie sur les biomatériaux>
<!-- nouvelle mise en forme du cartouche "rsponsable activité"  (resssemble au boostrap)-->
<div class="container-fluid" style="padding-left:-20; padding-right:-15;">
<div id="fin-article" class="row justify-content-center">
<div class="col-6 col-sm-4"><?php echo TXT_TH ; ?></div>
<div class="col-6  col-sm-2" >
<a target="_blank" href="../image/personnels/Samantha18pp.jpg" style="padding:20px;">
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/Samantha18pp.jpg\" width=\"80%\"; title=\"Samantha Roques Delmond\" alt=\"Samantha Roques Delmond\" class=\"img-responsive center-block\" >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/Samantha18pp.jpg\" width=\"100\" title=\"Samantha Roques Delmond\" alt=\"Samantha Roques Delmond\" class=\"img-responsive center-block\">
			";
		}
		?></a>
</div>

<div class="col-12 col-sm-6  style="padding-left:2px;padding-top:2px;" align="left"><?php echo TXT_ResponsableHisto ; ?><?php echo TXT_THR ; ?>

<?php echo TXT_CH; ?></div>
</div></div>
</histologie sur les biomatériaux>

<histologie inflamations et biomateriaux>
<div class="container-fluid" ><!--style="padding-left:-10; padding-right:-10;"-->
<div  class="row">

<div class="col-10">
<!--les tables sont placées dans les grilles responsives...  -->
<table class="ex2"><tr>
<td colspan="6"><?php // echo TXT_HST; ?></td></tr>
<tr><td colspan="6"><?php echo TXT_HT1; ?></td></tr>
</table>

<table class="ex2"><tr><td colspan="6">
  <?php echo TXT_HTC1; ?></td></tr><td>
  <?php echo TXT_HCI; ?></td>
</table>
 
<!-- deusième tableau... -->

<table class="ex2"><tr><td colspan="4"><?php echo TXT_HTC3; ?></td></tr>
<tr><td><div id="show4" class="slideshow" >
<img src="../image/15-01 158D-c- A (G10)b.jpg" width="50%" height="auto" alt="Trichrome de Goldner" />
</div></td><td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td><div id="show5" class="slideshow" >
<img src="../image/15-01 170D(C) (G10)b.jpg" width="50%" height="auto" alt="Von Kossa Mac Neal" /></div>
<?php echo TXT_HTCIlegende; ?>
</td></tr>
</table>




<Immunohistochimie sur tissus avec biomateriaux>
<table class="ex2">

<tr><td colspan="6"><?php echo TXT_HTC4; ?></td></tr>
<tr><td><div id="show2" class="slideshow">
    <img src="../image/10-08 1-BV0-P07-1 CK8 (G10)b.jpg" alt=" CK8" width="50%" height="auto"/>	
  </div></td>
  <td><img src="../image/markerTransparent.png" width="2%" height="auto"></td>
  <td><div id="show7" class="slideshow">
    <img src="../image/11-08 P1B-9 caldesmon (G10)pp.jpg" alt="Caldesmon" width="50%" height="auto"/>
  </div></td>
  <td><img src="../image/markerTransparent.png" width="2%" height="auto"></td>
  <td><div id="show3" class="slideshow" >
  <img src="../image/10-08 1-BV0-P10-1 ki67(G40)7b.jpg" alt=" ki67" title=" ki67" width="50%" height="auto"/>
  </div></tr>
  <td style="text-align:left;"><strong>CK8</strong></td><td></td><td><strong>Caldesmon</strong></td><td></td><td style="text-align:left"><strong>Ki67</strong></td>
   
</table>
</Immunohistochimie sur tissus avec biomateriaux> 
  
  <div style="text-align:left; align:justify; ">
<analyse histomorphique><?php echo TXT_HTC5; ?>
<br>
<h6><?php echo TXT_HTC6; ?></h6>
</analyse histomorphique>
</div>

</div>




<aside  class="col-2 d-none d-md-block">
<h3><?php echo TXT_HEA; ?></h3>
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"AutomateTraitementTissus.php\"/><img src=\"../image/equipements/Tissus_Leica_TP1020.jpg\" alt=\"TP1020 LEICA\" title=\"TP1020 LEICA\" style=\"width:80%; padding:0px; height:auto;\"></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"AutomateTraitementTissus.php\"/><img src=\"../image/equipements/Tissus_Leica_TP1020.jpg\" alt=\"TP1020 LEICA\" title=\"TP1020 LEICA\" style=\"width:80%; padding:0px;\"></a>
";
		}
		?>
<br>
	
<?php echo TXT_HT11; ?>

<?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"Polisseuse.php\"/><img src=\"../image/equipements/Polisseuse.jpg\" alt=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" title=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" style=\"width:100%; padding:0px; height:auto;\"></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"Polisseuse.php\"/><img src=\"../image/equipements/Polisseuse.jpg\" alt=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" title=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" style=\"width:100%; padding:0px;\"></a>
";
		}
	
		?>
		
<tr><?php echo TXT_HT16; ?></tr>

<?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"PlateformeInclusion.php\"/><img src=\"../image/equipements/Leica_EG115.jpg\" alt=\"../image/equipements/Leica_EG115.jpg\" title=\"../image/equipements/Leica_EG115.jpg\" style=\"width:100%; padding:0px; height:auto;\"></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"PlateformeInclusion.php\"/><img src=\"../image/equipements/Leica_EG115.jpg\" alt=\"../image/equipements/Leica_EG115.jpg\" title=\"../image/equipements/Leica_EG115.jpg\" style=\"width:100%; padding:0px;\"></a>
";
		}
	
		?>
		
<tr><?php echo TXT_HT12; ?></tr>

<?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"microtome.php\"/><img src=\"../image/equipements/microtomeR2255.jpg\" alt=\"microtome\" title=\"microtome\" style=\"width:100%; padding:0px; height:auto;\"></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"microtome.php\"/><img src=\"../image/equipements/microtomeR2255.jpg\" alt=\"microtome\" title=\"microtome\" style=\"width:100%; padding:0px;\"></a>
";
		}

		?>
	
<?php echo TXT_HT13; ?>

<?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"microtomeGlissiere.php\"/><img src=\"../image/equipements/MicrotomeLEICA.jpg\" alt=\"microtome à glissière SM2500\" title=\"microtome à glissière SM2500\" style=\"width:100%; padding:0px; height:auto;\"></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"microtomeGlissiere.php\"/><img src=\"../image/equipements/MicrotomeLEICA.jpg\" alt=\"microtome à glissière SM2500\" title=\"microtome à glissière SM2500\" style=\"width:100%; padding:0px;\"></a>
";
		}
		
		?>
	
<?php echo TXT_HT14; ?>

<?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"ScieDiamante.php\"/><img src=\"../image/equipements/ScieSP1600LEICA.jpg\" alt=\"scie diamantée SM1600\" title=\"scie diamantée SM1600\" style=\"width:100%; padding:0px; height:auto;\"></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"ScieDiamante.php\"/><img src=\"../image/equipements/ScieSP1600LEICA.jpg\" alt=\"scie diamantée SM1600\" title=\"scie diamantée SM1600\" style=\"width:100%; padding:0px;\"></a>
";
		}
		
		?>
		
<?php echo TXT_HT15; ?>

<?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"automateColoration.php\"/><img src=\"../image/equipements/Automate MYREVA SS30.jpg\" alt=\"automate de coloration MYREVA SS30\" title=\"automate de coloration MYREVA SS30\" style=\"width:100%; padding:0px; height:auto;\"></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"automateColoration.php\"/><img src=\"../image/equipements/Automate MYREVA SS30.jpg\" alt=\"automate de coloration MYREVA SS30\" title=\"automate de coloration MYREVA SS30\" style=\"width:100%; padding:0px;\"></a>
";
		}
		
		?>
		</tr>
<?php echo TXT_HTC21; ?>
<!-- images centrées a droite de la page : une autre facon de faire l'aside...-->
	<?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"MicroscopeNickon.php\"><img src=\"../image/equipements/MicroscopeNi-UNIKON.jpg\"  title=\"Microscope Ni-U Nikon (CIT)\" style=\"width:100%; padding:2px;height:auto;\" ></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"MicroscopeNickon.php\"><img src=\"../image/equipements/MicroscopeNi-UNIKON.jpg\"  title=\"Microscope Ni-U Nikon (CIT)\" style=\"width:100%; padding:2px;\" ></a>
";
}		
		?>
<?php echo TXT_HTC61;  ?>
  
     <?php

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"microscopeMotorise.php\"><img src=\"../image/equipements/microscope80i.jpg\"  title=\"Microscope Ni-U Nikon (CIT)\" style=\" width:100%; padding:2px; height:auto; \" ></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"microscopeMotorise.php\"><img src=\"../image/equipements/microscope80i.jpg\"  title=\"Microscope Ni-U Nikon (CIT)\" style=\"width:100%; padding:2px;\" ></a>
";
}		
		?>
		<?php echo TXT_HTC62;   ?>

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"Loupe.php\" ><img src=\"../image/equipements/Loupe.jpg\"  title=\"Loupe binoculaire (CIT)\" style=\"width:100%; padding:2px;height:auto;\" ></a>
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"Loupe.php\"><img src=\"../image/equipements/Loupe.jpg\"  title=\"Loupe binoculaire (CIT)\" style=\"width:100%; padding:2px;\" ></a>
";
		}
	
	?>
		 <?php echo TXT_HTC63; ?>


</aside><!-- fin du row col-2 -->

</div></div><!-- fin du contenaire fluide -->
</histologie inflamations et biomateriaux>


 <!-- ajout fin fin -->
 <!--</div>
 <!-- fin du contenu  -->
 </histologie au CIC-IT de Bordeaux>
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>
</div>
</body>
</html>


