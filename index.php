<?php
session_start();
?>
<!DOCTYPE html>
<!--<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">-->
<head>
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<link rel="icon" type="image/png" href="image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="image/logos/logoCIC-ITB.png" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- framwork  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!---                         -->
<!--- mes feuilles de style : -->
<!---                         -->
<link rel="stylesheet"  type="text/css"   media="screen and (min-width:140px)" media="max-width:1200px" href="css/CSSPage.css" /> <!-- a corriger avec un autre fichier .css (min-width:240 and max-width:640px). celui-ci devient :min-width:640px   --> 
<link rel="stylesheet"  type="text/css"   media="screen and (min-width:100px)"  href="css/menuHD.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-width:140px)" href="css/menuHDR2.css" />
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
<body>
<?php include 'inc/langueParDefaut.php';?>

<?php include 'inc/EnteteCICITBordeaux.php';?><br>

<?php include 'inc/choixdeslangues.php';?>

<div><?php include 'inc/navigation.php'; ?></div>

<div style=" text-align:justify;  ">

<h2 align="center"><?php echo TXT_SSTitre; ?></h2>
<div style="text-align:justify; margin-left:2%; margin-right:2%;">
<h4><?php echo TXT_Article; ?></h4>	
</div>
<br>
<div class="container-fluid"><div class="row" >
 <div class="col-12 col-sm-6">
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
 <div class="col-sm-6" >
<!--                             -->
<!-- image animé                  -->
<!--                             -->	
<!--   si pas adobe flash...     -->
<!--                             -->	            		
<?php 
 if(strchr($_SERVER[ 'HTTP_USER_AGENT' ], "Chrome")){
	   // $browser = "Chrome";//remplacer par l'animation avi!!!
echo"
<!-- video....blender... -->
<div style=\"margin-left:2%;\">
 <video id=\"myVideo\" width=\"80%\" height=\"auto\" loop=\"true\" playing autoplay>
 <!-- sous chrome, seule les mp4 marche...   -->
<source src=\"image/biomat.webm\" type=\"video/webm\">
<source src=\"image/AnimCICIT.mp4\" type=\"video/mp4\">
<source src=\"image/biomat.ogg\" type=\"video/ogg\"><!-- pour les smartphone?! -->
Your browser does not support the video tag.
</video>
</div>";
}
else{


if($_SESSION['lang']=='fr'){

echo "
<DIV   style=\" width:90%; height:300px; padding-left:1%; padding-right:5px;padding-top:5px; \">
<p id=cloud></p>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"100%\", \"100%\",
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
 else{
echo "
<DIV   style=\" width:90%; height:300px; padding-left:1%; padding-right:5px; padding-top:5px;  \">

<p id=cloud ></p>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"100%\", \"100%\",
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
}

?>
</div>
</div></div>
<!--                            -->
<!--   pied de page             -->
<!--                            -->
<?php include 'inc/peidDePageindex.php'; ?>
<iframe frameborder="no" width="800px" height="150" scr="http://demo.piwik.org/index.php?module=CoreAdminHome&action=optOut&language=fr"></iframe> 
</body>
</html>
