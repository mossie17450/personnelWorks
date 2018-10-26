<?php
 session_start();
?>
<!DOCTYPE html><!-- html5-->
<!--<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">-->
<head>
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="robots" content="noimageindex" /><!-- je ne met pas les images du site à l'indexation par les robots -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l'innovation biomédicale, le Centre d'Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icon de la barre du navigateur. -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
-->
<!--<link rel="stylesheet"  type="text/css"   media="screen and (min-width:300px)"  href="css/CSSPage.css" /> <!-- a corriger avec un autre fichier .css (min-width:240 and max-width:640px). celui-ci devient :min-width:640px   --> 
<link rel="stylesheet"  media="min-width:100px" media="max-width:1200px" href="../css/CSSPage.css" />
<link rel="stylesheet"  type="text/css"   media="screen and (min-width:100px)"  href="../css/menuHD.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-width:100px)" href="../css/menuHDR2.css" />
<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:300px)"  media="screen and (min-width:100px)" href="css/menuHDR2petit.css" />-->


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
<body style="font-family:'Century Gothic Normal';  max-width:1500px; ">

<div>
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
<?php include '../inc/objetMenuhtml.php'; ?>

<!-- corps de la page  --> 
<div id="contenu" style="display:flex; flex-direction:row; align:inline-block;" >
<evaluation clinique et preclinique >

<div style="align:justfy;">

</br>
<h2 align="center"><?php echo TXT_SSSTitreMission; ?></h2>
<div style="text-align:justify; margin-left:2%; margin-right:2%;"><h4><?php echo "<br>".TXT_SSMenuMission; ?></h4>		
<br><h4><?php echo "<br>".TXT_ArticleMission; ?></h4>
</div></div>

<div class="blink_meb">
<div class="container-fluid, blink_meb"><div class="blink_meb row" >

<div class="col-4  col-sm-3" ><a href="http://www.cic-it.fr/"><img src="../image/logos/reseauCIC-ITter.jpg" style="margin-left:25%; width:65%; margin-top:5%;" class="blink_meb"></a></div>
<div class="col-4  col-sm-2" ><a href="http://ast-innovations.com/"><img src="../image/Satt-Aquitaine.png" style="margin-left:5%; width:65%; margin-top:5%;" ></a></div>
   <!-- correction de l'adresse d'euclide....   -->
<div class="col-4  col-sm-2" ><a href="https://ssl3.isped.u-bordeaux2.fr/euclid-st/Default.aspx?tabid=57"><img src="../image/logos/logo-euclid.jpg" style="margin-left:5%; width:80%; margin-top:5%;" ></a></div>
<div class="col-4 col-sm-2" ><a href="http://www.fcrin.org/" class="blink_meb"><img src="../image/logos/F-CRIN.png" style="margin-left:5%; width:30%; margin-top:5%;" ></a></div> 
<div  class="col-4  col-sm-3" ><a href="http://tech4health.fr/" ><img src="../image/logos/tech4health.jpg" style="margin-left:5%; width:65%; margin-top:5%;" class="blink_meb" ></a></div>

</div></div>
<!--
echo"<div class=\"container-fluid\"> 
  <div class=\"row\">
    <div class=\"col-6 col-sm-3\" /><a href=\"https://www.chu-bordeaux.fr\" ><img src=\"../image/logos/CHUBordeaux.jpg\"  style=\"margin-left:25%; width:50%; margin-top:5%;\" ></a></div>
    <div class=\"col-6 col-sm-3\" /><a href=\"http://www.aquitaine-poitou-charentes.inserm.fr\"><img src=\"../image/logos/inserm_logo_b.png\" style=\"margin-left:25%; width:50%; margin-top:15%; \"></a></div>
    <div class=\"col-6 col-sm-3\" /><a href=\"https://www.u-bordeaux.fr\"><img src=\"../image/logos/universitebN.jpg\" style=\"margin-top:0%; margin-left:25%; width:50%;\"></div>
    <div class=\"col-6 col-sm-3\" /><a href=\"http://www.bergonie.org\" ><img src=\"../image/logos/BergonieN.jpg\"  style=\"margin-top:10%; margin-left:30%; width:30%;\" ></a></div>
  </div>
 class="blink_meb" 
</div>
";
-->
</evaluation clinique et preclinique>
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