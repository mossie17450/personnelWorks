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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	

<!--- ma premiere( presque) feuille de style : -->
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
<!-- langue par défaut                        -->
<?php include'../inc/languesParDefauthtml.php';?>
<body style="font-family:'Century Gothic Normal';" >
<div id="body" class="arrondie" height="100%" >
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
 <?php include '../inc/objetMenuhtml.php'; ?>


<div  style="display:flex; flex-direction:row;"> 

<div id="contenu" style="text-align:justify; "><br>
<?php  //echo  TXT_TitresFonctionnement ; ?>
<?php  echo TXT_A1Fonction ; ?>

<?php echo TXT_A2Fonction ; ?>

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


	
<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>


 <!-- fin ajout -->
</div>
</body>
</html>