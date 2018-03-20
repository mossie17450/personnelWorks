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

<!-- framwork  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!---                         -->
<!--- mes feuilles de style : -->
<!---                         -->
<link rel="stylesheet"  type="text/css"   media="screen and (min-width:240px)"  href="../css/CSSPage.css" /> <!-- a corriger avec un autre fichier .css (min-width:240 and max-width:640px). celui-ci devient :min-width:640px   --> 
<link rel="stylesheet"  media="min-width:240px" media="max-width:1200px" href="../css/CSSPage.css" />
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
<body>
<?php include 'inc/langueParDefaut.php';?>

<?php include 'inc/EnteteCICITBordeaux.php';?><br>

<?php include 'inc/choixdeslangues.php';?>

<div id="CdL"><?php include 'inc/navigation.php'; ?></div>



<div style="display:inline-block; text-align:justify; border:none;">
<div class="table-responsive, ex2" >
<table class="table, ex2" width="100%">
<tr colspan="10"><td colspan="10">
<h2 align="center"><?php echo TXT_SSTitre; ?></h2>
<div style=" text-align:justify; margin-left:5%; margin-right:5%;">
<?php echo TXT_Article; ?>	
</div>
</td></tr>
<tr colspan="10">
<td colspan="4">
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
 </td>
 
<!--                             -->
<!--image animé                  -->
<!--                             -->	
<!--   si pas adobe flash...     -->
<!--                             -->	
<td colspan="6">             		
<?php 

if($_SESSION['lang']=='fr'){

echo "
<DIV   style=\" width:100%; height:300px; padding-left:1%; padding-right:5px; \">
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
else {
echo "
<DIV   style=\" width:100%; height:300px; padding-left:1%; padding-right:5px;  \">

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

?></td></tr>
<tr><td>
<!-- id="AlternativeContent" dans le header.... -->
<div id="AlternativeContent" style="display:align;">
<a href="http://www.adobe.com/go/getflashplayer"><img src="image/logos/Adobe-Flash-Player-icon.png" alt="Get Adobe Flash player" />installez adobe flash s'il vous plait</a>
</div>
</td></tr>
</table>
</div>
</div>

<!--                             -->
<!--   pied de page               -->
<!--                            -->

<?php include 'inc/peidDePageindex.php'; ?>


</body>
</html>
