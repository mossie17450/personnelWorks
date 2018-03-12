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
<body style="font-family:'Century Gothic Normal'; max-width:1200px; " >
  <?php
	   if(empty($_SESSION['lang']) && empty($_GET['langue'])){                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
	 $_SESSION['lang']='fr';
  	 }
	  	 
	  else if($_SESSION['lang'] && empty($_GET['langue'])){
 $_SESSION['lang'];
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
  	   	 
	 ?>
<div id="body" class="arrondie">
<!---                         -->
<!-- en tete                  -->

<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">

<img src="../image/logos/CICITBordeaux.png"  class="arrondie" style="width:100%;" > 
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>

<!-- choix des langues en php -->
<!---                         -->
<!--                                           -->	
<!-- menu HDR(Horizontale Deroulant Responsif) --> 
<div style="display:flex; flex-direction:column; align:inline-block; "> 
<div  style="display:flex; flex-direction:row; ">
<div id="contenu" align="inline" width="100%">

<!-- formulaire de choix des langue :icon auto-submit -->
<div id="CdL" style="float:right; align:inline; "> 
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

?>
</form> 
 </div> 
 </div></div><br>
 <!-- fin formulaire choix des langues -->
 <div  style="display:flex; flex-direction:row;  ">
<div id="contenu" align="inline" width="100%">
<nav style="display:inline;">
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div>
</div> 
 	



<div id="contenu" >	
<!-- a droite -->
<!-- a gauche -->


<!--<div  style="display:flex; flex-direction:row;">
 

<!-- calendrier des evenements  --> 

<?php
//affichage de tous les evenements passés futures....
$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev'); // site local'localhost', 'root','','cic-it2017' site distant: 'localhost', 'c1cicitdev','yuvREZ_7s3B','c1cicitdev'
		
		//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');
		if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}
//récuperation des jour et mois (et annee) ayant un evenement.
$sql = 'SELECT DISTINCT jour_evenement, mois_evenement, annee_evenement,titre_evenement, contenu_evenement  FROM calendrier join evenements on(calendrier.id_evenement=evenements.id_evenement)  ';	
		 $query=mysqli_query($link, $sql) or die("Une requête a échouée.");

		 echo "<div style=\"width:100%; align:left;\"><h3> </h3><ul>";
		while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
		
		
		echo "<li style=\"width:80%; text-align:left; margin-left:5%;\"><h3>Le ".$row[0]."/".$row[1]."/".$row[2]."</h3><br>evenement: <br>".$row[3]."<br>En détails: <br>".$row[4]."<br></h6></li><br>";
			
		}
		echo "</ul></div>";
		mysqli_close($link);

//faire la mise en page...



/*function getEventsDate($mois, $annee) {
		$result = array();
//connection à la base de données		
		//include("../calendrier/includes/sql_connect.php");
		$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev'); // site local'localhost', 'root','','cic-it2017' site distant: 'localhost', 'c1cicitdev','yuvREZ_7s3B','c1cicitdev'
		
		//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');
		if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}
//récuperation des jour et mois (et annee) ayant un evenment.
$sql = 'SELECT DISTINCT jour_evenement,mois_evenement,annee_evenement, titre_evenement, contenu_evenement FROM calendrier c, evenements e WHERE mois_evenement='.$mois.' AND annee_evenement='.$annee.' AND c.id_evenement = e.id_evenement ORDER BY jour_evenement';	
		 $query=mysqli_query($link, $sql) or die("Une requête a échouée.");

		 echo "<div style=\"width:50%; align:left;\">listes des evenements à venir:<ul>";
		while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
		//$date[]=$row[0]."/".$row[1]."/".$row[2] ;
		
		echo "<li>le ".$row[0]."/".$row[1]."/".$row[2]."</li>";
			//$result[] = $row[4];

			//on affiche le titre de l'evenement à gauche du calendrier.
		}
		</ul></div>
		mysqli_close($link);
	/*echo "<li><div>*:pour plus de détails, cliquer sur la date.</div></li></ul></div>";
		mysqli_close($link);
		 echo $row[3]." details".$row[4];
		return $result;
	
	
	function afficheEvent($i, $event) {
		$texte = ""; $suivant = false;
		
		foreach($event as $cle => $element) {
			if($suivant) {
				$texte .= $element."<br/>";
			}
			if($element == $i) {
				$suivant = true;
			} else {
				$suivant = false;
			}
		}
		
		return $texte;
	}
	if(isset($_GET['m']) && isset($_GET['y']) && is_numeric($_GET['m']) && is_numeric($_GET['y'])) {
		$timestamp = mktime(0, 0, 0, $_GET['m'], 1, $_GET['y']);
		
		$event = getEventsDate($_GET['m'], $_GET['y']); // Récupère les jour où il y a des évènements
	}
	else { // Si on ne récupère rien dans l'url, on prends la date du jour
		$timestamp = mktime(0, 0, 0, date('m'), 1, date('Y'));
		
		$event = getEventsDate(date('m'), date('Y')); // Récupère les jour où il y a des évènements
		
	}
	
	
	/* === Si le mois correspond au mois actuel et l'année aussi, on retient le jour actuel pour le griser plus tard (sinon le jour actuel ne se situe pas dans le mois)
	if(date('m', $timestamp) == date('m') && date('Y', $timestamp) == date('Y')) $coloreNum = date('d');
	$m = array("01" => "Janvier", "02" => "Février", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août", "09" => "Septembre", "10" => "Octobre",  "11" => "Novembre", "12" => "Décembre");
	$j = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
	
$me = array("01" => "January", "02" => "February", "03" => "March", "04" => "April", "05" => "May", "06" => "June", "07" => "July", "08" => "August", "09" => "September", "10" => "October",  "11" => "November", "12" => "Décember");
	$je = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
	$numero_mois = date('m', $timestamp);
	$annee = date('Y', $timestamp);
	
	if($numero_mois == 12) {
		$annee_avant = $annee;
		$annee_apres = $annee + 1;
		$mois_avant = $numero_mois - 1;
		$mois_apres = 01;
	}
	elseif($numero_mois == 01) {
		$annee_avant = $annee - 1;
		$annee_apres = $annee;
		$mois_avant = 12;
		$mois_apres = $numero_mois + 1;
	}
	else {
		$annee_avant = $annee;
		$annee_apres = $annee;
		$mois_avant = $numero_mois - 1;
		$mois_apres = $numero_mois + 1;
	}
	
	// 0 => Dimanche, 1 => Lundi, 2 = > Mardi...
	$numero_jour1er = date('w', $timestamp);
	
	// Changement du numéro du jour car l'array commence à l'indice 0
	if ($numero_jour1er == 0) $numero_jour1er = 6; // Si c'est Dimanche, on le place en 6ème position (après samedi)
	else $numero_jour1er--; // Sinon on mets lundi à 0, Mardi à 1, Mercredi à 2...
	?>
   <div id="cal" style="width:50%; align:right;">  
	<table class="calendrier"><!-- un peu responsif,limite les ecran de telephone !!! -->
	
<?php  
/*
if($_SESSION['lang']=='fr'){
 ?>

		<caption><?php echo TXT_TitreCal; ?><br><?php echo '<a href="?m='.$mois_avant.'&amp;y='.$annee_avant.'"><<</a>'; ?><?php echo ''.$m[$numero_mois].' '.$annee.' ' ;?><?php echo '<a href="?m='.$mois_apres.'&amp;y='.$annee_apres.'">>></a>' ;?></caption>
<?php	} 
else { ?>
<caption><?php echo TXT_TitreCal; ?><br><?php echo '<a href="?m='.$mois_avant.'&amp;y='.$annee_avant.'"><<</a>'; ?><?php echo ''.$me[$numero_mois].' '.$annee.' ' ;?><?php echo '<a href="?m='.$mois_apres.'&amp;y='.$annee_apres.'">>></a>' ;?></caption>
<?php }	?>
	<?php //}
	echo TXT_Jours; 
	
	
		// Ecriture de la 1ère ligne
		echo '<tr>';
			// Ecriture de colones vides tant que le mois ne démarre pas
			for($i = 0 ; $i < $numero_jour1er ; $i++) {		echo '<td></td>';	}
			for($i = 1 ; $i <= 7 - $numero_jour1er; $i++) {
				// Ce jour possède un événement
				if (in_array($i, $event)) {
					echo '<td class="jourEvenement';
					
					if(isset($coloreNum) && $coloreNum == $i) echo ' lienCalendrierJour';
					
					echo '"><a href="evenement.php?d='.$i.'/'.$numero_mois.'/'.$annee.'" class="info">'.$i.'<span>'.afficheEvent($i, $event).'</span></a></div></td>';
				} else {
					echo '<td ';
					
					if(isset($coloreNum) && $coloreNum == $i) echo 'class="lienCalendrierJour"';
					
					echo '>'.$i.'</td>';
				}
			}
		echo '</tr>';
		
		$nbLignes = ceil((date('t', $timestamp) - ($i-1))/ 7); // Calcul du nombre de lignes à afficher en fonction de la 1ère (surtout pour les mois a 31 jours)
		
		for($ligne = 0 ; $ligne < $nbLignes ; $ligne++) {
			echo '<tr>';
			for($colone = 0 ; $colone < 7 ; $colone++) {
				if($i <= date('t', $timestamp))	{
					// Ce jour possède un événement
					if (in_array($i, $event)) {
						echo '<td class="jourEvenement';
						
						if(isset($coloreNum) && $coloreNum == $i) echo ' lienCalendrierJour';
						
						echo '"><a href="../../calendrier/evenement.php?d='.$i.'/'.$numero_mois.'/'.$annee.'" class="info">'.$i.'<span>'.afficheEvent($i, $event).'</span></a></td>';
					} else {
						echo '<td ';
						
						if(isset($coloreNum) && $coloreNum == $i) echo 'class="lienCalendrierJour"';
						
						echo '>'.$i.'</td>';
					}
				} else {
					echo '<td></td>';
				}
				$i = $i +1;
			}
			echo '</tr>';
		}
	*/	
	?>
<!--</table>
</div>


</div>-->
<!-- fin du calendrier des evenements  --> 

</div>



<div style="display:flex; flex-direction:column; " style=" height:10%;">
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
<?php echo TXT_Piedhtml; ?> 
</div>
</div>

</div>
</body>
</html>