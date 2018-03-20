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


<!-- tableau responsifs -->
<div id="asideEq"  class="table-responsive, ex2"  style="border:none; margin-right:1%;" >
<table class="table, ex2">
<th><h3><?php echo TXT_HEA; ?></h3></th>
</table>
<table class="table, ex2" >
<tr class="img2">
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"../image/equipements/VetABC.jpg\"><img src=\"../image/equipements/VetABC.jpg\" style=\"width:95%; padding:2px; height:auto;\"></a>";

		}
		else {
			
		echo "<a target=\"_blank\" href=\"../image/equipements/VetABC.jpg\"><img src=\"../image/equipements/VetABC.jpg\" style=\"width:95%; padding:2px;\"></a>";

		}
		?>
 
<tr><h6><?php echo TXT_HEA1; ?></h6><br></tr>
</tr></table>
<table class="table, ex2" >
<tr class="img2">
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"../image/equipements/Cytometre.jpg\"><img src=\"../image/equipements/Cytometre.jpg\" alt=\"cytometre\" style=\"width:95%; padding:2px; height:auto;\" ></a>";

		}
		else {
			
		echo "<a target=\"_blank\" href=\"../image/equipements/Cytometre.jpg\"><img src=\"../image/equipements/Cytometre.jpg\" alt=\"cytometre\" style=\"width:95%; padding:2px;\" ></a>";

		}
		?>
<tr><h6><?php echo TXT_HEA2; ?></h6><br></tr>
</tr></table>

<table class="table, ex2" >
<tr class="img2">
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"../image/equipements/PSMCell.jpg\"><img src=\"../image/equipements/PSMCell.jpg\"  alt=\"PSM culture cellulaire\" style=\"width:95%; padding:2px; height:auto;\" ></a>";

		}
		else {
			
		echo "<a target=\"_blank\" href=\"../image/equipements/PSMCell.jpg\"><img src=\"../image/equipements/PSMCell.jpg\"  alt=\"PSM culture cellulaire\" style=\"width:95%; padding:2px;\" ></a>";

		}
		?>

<tr><h6><?php echo TXT_HEA3; ?></h6><br></tr>
</tr></table>
</div>


<div  style="display:flex; flex-direction:column; ">
<div id="section-article" width="75%">

<?php echo TXT_HM; ?>
 <!--tableau des images-->
 
 
<div  class="table-responsive, ex2"><br>
<table class="table, ex2" style="border:none;"> 
 <tr colspan="8"><td colspan="4">
<?php //echo TXT_HST1; ?>
  <a target="_blank" href="../image/hemolyse.jpg">
    <img src="../image/hemolyse.jpg" alt="test d'hémolyse" style="width:100%;" class="displayed">
  </a>
  </td>
  <td colspan="4">
  <a target="_blank" href="../image/num.jpg">
    <img src="../image/num.jpg" alt="Automate" style="width:80%;" class="displayed">
  </a>
  </td></tr>
  <tr colspan="8"><td colspan="4" style="text-align:center;"><?php echo TXT_HLI1; ?></td><td colspan="4" style="text-align:center;"><?php echo TXT_HLI10; ?></td></tr>
	<tr colspan="8"><td colspan="8"></br></td></tr>
  <tr colspan="8"><td colspan="3">
  <a target="_blank" href="../image/agrego.png">
    <img src="../image/agrego.png" alt="" style="width:100%" class="displayed">
  </a>
  </td><td colspan="5">
  <div class="displayed" style="display:flex;flex-direction:raw; margin:5px; ">
  <a target="_blank" href="../image/facs1.jpg">
    <img src="../image/facs1.jpg" alt="activaion plaquettaire T=0min" style="width:100%" class="displayed"></a>
	<a target="_blank" href="../image/facs2.jpg">
    <img src="../image/facs2.jpg" alt="activaion plaquettaire T=15min" style="width:100%" class="displayed">
  </a>
  </div>
  </td></tr>
   <tr colspan="8"><td colspan="3" style="text-align:center;"><?php echo TXT_HLI4; ?></td><td colspan="2" style="text-align:center;"><?php echo TXT_HLI2; ?><td colspan="1"></td><td colspan="2" style="text-align:center;"><?php echo TXT_HLI3; ?></td></tr>
   <tr colspan="8"><td colspan="8"></br></td></tr><!-- espace entre les differentes lignes du tableau... -->
<tr colspan="8"><td colspan="3">
   <a target="_blank" href="../image/PTT.jpg">
    <img src="../image/PTT.jpg" alt="test chronométriques" style="width:50%;" class="displayed">
  </a>
</td>
<td colspan="5">
 <a target="_blank" href="../image/cpt.jpg">
    <img src="../image/cpt.jpg" alt="test complement:ELISA C3a" style="width:100%;" class="displayed">
 </a>
</td></tr>
 
<tr colspan="8"><td colspan="3" style="text-align:center;"><?php echo TXT_HLI9; ?> </td><td colspan="5" style="text-align:center;"> <?php echo TXT_HLI8; ?></td></tr>
</table></div>

</div>
</div>

</div>
</div>
</div></div></div>
<!-- fin du contenu  -->
<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</body>
</html>