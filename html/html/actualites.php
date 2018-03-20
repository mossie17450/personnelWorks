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
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---  icone barre du navigateur...                        -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->
<!--                            -->
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />-->
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" media="screen and (min-width: 240px)" type="text/css" href="../css/CSSPage.css" />

<link rel="stylesheet" media="screen and (min-width: 240px)" type="text/css" href="../css/menuHDR2.css" />

<!--- mes scripts javascript : -->
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

<div>	
	<h3>Les actualités du CIC-IT :</h6>	 
<!-- calendrier des evenements  --> 
<?php
//affichage de tous les evenements passés futures....
//connexion
$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev');
// site local'localhost', 'root','','cic-it2017' site distant: 'localhost', 'c1cicitdev','yuvREZ_7s3B','c1cicitdev'		
//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');
	if (!$link) {
	die('Impossible de se connecter : ' . mysql_error());
	}
//récuperation des jour et mois (et annee) ayant un evenement.
	$sql ='SELECT DISTINCT jour_evenement, mois_evenement, annee_evenement, titre_evenement, contenu_evenement, Nomfichier  FROM calendrier join evenements on(calendrier.id_evenement=evenements.id_evenement)  ';	
	$query=mysqli_query($link, $sql) or die("Une requête a échouée.");
$mf=array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Septembre","Octobre","Novembre","Décembre");
	
	echo "<div class=\"ex2\" >
	<table class=\"table, ex2\" style=\"width:100%;  \">";
	
	echo "<tr colspan=\"20\"><td>";
	$p=2;
	$i=0;
	$r=$i % $p;
	//echo $r."<br>";
	//echo $i;
		while($row=mysqli_fetch_array($query, MYSQLI_BOTH)) 
		{
		//echo row[5]	; 
	if($r==0){
		
		echo"<table class=\"table\" style=\"width:48%; float:left; \" border=\"solid\" margin-bottom=\"5%\" >
		<!--<tr><td colspan=\"10\" style=\"width:45%;\"><img src=\"../image/ptibbis.jpg\" width=\"100%\"></td></tr>-->
		<tr><td style=\"background-color:orange;\" colspan=\"2\"><h3>".$row[0]."<br>".$mf["$row[1]"]."<br>".$row[2]."</td>
		<td style=\"background-color:none; \" colspan=\"8\"><h6>".$row[3]."<br>".$row[4]."</h6></td></tr>
		<tr><td colspan=\"5\" style=\"background-color:grey;\" ><a href=www/".html_entity_decode($row[5])."> à telegargé et/ou pour imprimer!!!</a></td><td colspan=\"5\"style=\"background-color:green;\"><a>pour en savoire plus...</a></td></tr>
		</table>"; 
	
		}
		
		else		
		{
		
		echo"<table class=\"table\" style=\"width:48%; float:right; \" border=\"solid\" margin-bottom=\"5%\">
		<!--<tr><td colspan=\"10\" style=\"width:45%;\"><img src=\"../image/ptibbis.jpg\" width=\"100%\"></td></tr>-->
		<tr><td style=\"background-color:orange;\" colspan=\"2\"><h3>".$row[0]."<br>".$mf["$row[1]"]."<br>".$row[2]."</td>
		<td style=\"background-color:yellow; \" colspan=\"8\"><h6>".$row[3]."<br>".$row[4]."</h6></td></tr>
		<tr><td colspan=\"5\" style=\"background-color:grey;\" ><a href= www/".html_entity_decode($row[5]).">pièce à telegargé</a></td><td colspan=\"5\"style=\"background-color:green;\"><a>lien pour en savoire plus...</a></td></tr>
		</table>"; 

		}
		$i++;
		}
		
	echo "</td></tr></table></div>";
	//echo "variable!!!!<br>".$row[5]."<br>";
mysqli_close($link);

?>
<h6>Fin des actualités</h6>
<br>
</div>

<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</body>
</html>