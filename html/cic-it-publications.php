<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---  icone barre du navigateur...                        -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script type="text/javascript" src="../js/jquery.bootpag.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>


<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" type="text/css"  media="screen and (min-width:240px)"href="../css/CSSPage.css" />
<!--<link rel="stylesheet" media="screen and (min-width:240px)and(max-width:640px)" href="../css/toutpetitResolution.css" />-->

<!--<link rel="stylesheet" type="text/css" media="screen and (max-width:640px)" href="../css/menuHDR2petit.css" />-->
<link rel="stylesheet" type="text/css" media="screen and (min-width:240px)" href="../css/menuHDR2.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

<body style="font-family:'Century Gothic Normal'; height:auto; " >

 <?php

	  if($_SESSION['lang'] && empty($_GET['langue'])){

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
<br>

<!-- ************************ -->
<!--   choix de la langue     -->
<!-- ************************ -->
<div  style="display:flex; flex-direction:row;"> 

<div id="contenu" align="inline" width="100%">


<div id="CdL" style="float:right; align:inline;"> 
	
<!-- nouvel mise en forme des "choix de langues" --->
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
</div>

</div></div></div>
<!--                                           -->
<!-- choix des langues en php              fin -->
<!--                                           -->	
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
<!--                                           -->
<div  style="display:flex; flex-direction:row;"> 

<div id="contenu" align="inline" width="100%">
<nav style="display:inline;">
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div></div> 
<!-- fin du menu                               -->
<br>
<div id="contenu"  width="100%" style="display:flex; flex-direction:column; height:100%;">

<!-- à traduire ?                              -->
<?php echo TXT_TV;  ?>

<!-- Bouton execution modal -->
	<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#myModal" style=" position:relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#339fff;" >
	<h1><?php echo TXT_TM2 ;  ?></h1>
	</button>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:90%; left:5%;">
	<div class="modal-dialog" style="width:100%;">
	<div class="modal-content" >
	<div class="modal-header">
	<button type="button-lg" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h2 class="modal-title" id="myModalLabel"><?php echo TXT_STM1 ;  ?></h2>
	</div>
	<div class="modal-body">
	<h1><?php echo TXT_TbM2 ;  ?></h1>

	<?php 
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev'); //serveur distant
//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....	
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}	
?>

<?php

//$sql= "SELECT DISTINCT titre ,annee ,href ,titreJournal ,codification  FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('ACL') ORDER BY annee DESC";

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification ,href ,communique.idPublication  FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('ACL') ORDER BY annee DESC";



$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">
 <?php echo TXT_VRET; ?>
	
<!--premiere boucle while : liste des publications -->

<?php 
while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){ 
//$teste=$row[4]; 
// \" https://www.ncbi.nlm.nih.gov/pubmed/28683837 \" 
//remplacer href par l'adresse de la publi dans pubmed si elle existe... (page publi "82")
//echo "<TR><TD width=\"40%\"><a href=\" https://www.ncbi.nlm.nih.gov/pubmed/28683837 \" >".$row[0]."</a></TD><TD width=\"35%\">";

//echo "<TR><TD width=\"40%\">".$row[0]."</TD><TD width=\"35%\">";
echo "<TR><TD width=\"40%\"><a href=\" ".$row[4]." \" >".$row[0]."</a></TD><TD width=\"35%\">"; 
// si publication ecrite : mettre en lien vers la publication(sur pubmed par exemple....
// deuxième boucle while à l'intérieur de la première :

$sql1="SELECT nom, prenom, Rang FROM auteur join communique on auteur.idAuteur=communique.idAuteur   WHERE communique.idPublication=".$row[5]." ORDER BY communique.Rang";

$req1= mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link)); 

while($row1= mysqli_fetch_array($req1, MYSQLI_BOTH)){ 
//liste des auteurs du CIC-IT de Bordeaux :
if((trim($row1['nom'])=="Roques" && trim($row1['prenom'][0])=="S")||(trim($row1['nom'])=="Meulle" && trim($row1['prenom'][0])=="M")||( trim($row1['nom'])=="Charles" && trim($row1['prenom'][0])=="G")|| (trim($row1['nom'])=="Luc" && trim($row1['prenom'][0])=="G")||(trim($row1['nom'])=="Couraud")||(trim($row1['nom'])=="Delmond")||(trim($row1['nom'])=="Durand")||(trim($row1['nom'])=="Bordenave")||(trim($row1['nom'])=="Renard" && trim($row1['prenom'])=="M")||(trim($row1['nom'])=="Seris" && trim($row1['prenom'])=="E")||(trim($row1['nom'])=="" && trim($row1['prenom'])==""))

{ 

echo "<strong><em style=\"color:yellow;\">".$row1['nom']." ".$row1['prenom'][0]." </em></strong>";

} 

else

{

echo $row1['nom']." ".$row1['prenom'][0]."  "; 

}

}

echo "</TD><TD width=\"10%\">".$row[2]."</TD>"; 

echo "<TD width=\"5%\">".$row[1]."</TD></TR>"; 

}

?>

	</table></CENTER>         
	</div>
	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<div><br></div>	
	<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#myModal1" style=" position: relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#339fff;" >
	 <h1><?php echo TXT_TM1 ; ?></h1>
	</button>
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:90%; left:5%;" >
	<div class="modal-dialog" style="width:100%;">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button-lg" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h2 class="modal-title" id="myModalLabel"><?php echo TXT_STM1 ; ?></h2>
	</div>
	<div class="modal-body">
	<h2><?php echo TXT_TbM1 ; ?></h2>
	<?php

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');  //serveur distant
//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....	
 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification ,href ,communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('AFF','ACTN','ACTI') ORDER BY annee DESC";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRET; ?>

<!--premiere boucle while : liste des publications -->

<?php 
while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"40%\"><a href=\" ".$row[4]." \" >".$row[0]."</a></TD><TD width=\"35%\">";// si publication ecrite : mettre en lien vers la publication(sur pubmed par exemple....
// deusième boucle while à l'intérieur de la première :

$sql1="SELECT nom, prenom, Rang FROM auteur join communique on auteur.idAuteur=communique.idAuteur   WHERE communique.idPublication=".$row[5]." ORDER BY communique.Rang";

$req1= mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link)); 

while($row1= mysqli_fetch_array($req1, MYSQLI_BOTH)){ 

//if((trim($row1['nom'])=="Charles" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Luc" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Couraud"&& trim($row1['prenom'])=="G")||trim($row1['nom'])=="Delmond"||trim($row1['nom'])=="Durand"||trim($row1['nom'])=="Bordenave"||trim($row1['nom'])=="Renard"||trim($row1['nom'])=="Seris")

if((trim($row1['nom'])=="Roques" && trim($row1['prenom'][0])=="S")||(trim($row1['nom'])=="Meulle" && trim($row1['prenom'][0])=="M")||( trim($row1['nom'])=="Charles" && trim($row1['prenom'][0])=="G")|| (trim($row1['nom'])=="Luc" && trim($row1['prenom'][0])=="G")||(trim($row1['nom'])=="Couraud")||(trim($row1['nom'])=="Delmond")||(trim($row1['nom'])=="Durand")||(trim($row1['nom'])=="Bordenave")||(trim($row1['nom'])=="Renard" && trim($row1['prenom'])=="M")||(trim($row1['nom'])=="Seris" && trim($row1['prenom'])=="E")||(trim($row1['nom'])=="" && trim($row1['prenom'])==""))


{ 

echo "<strong><em style=\"color:yellow;\">".$row1['nom']." ".$row1['prenom']."  </em></strong>";

} 

else

{

echo $row1['nom']." ".$row1['prenom']."  "; 

}



}

echo "</TD><TD width=\"10%\">".$row[2]."</TD>"; 

echo "<TD width=\"5%\">".$row[1]."</TD></TR>"; 

}



?>
	</table></CENTER>              


	</div>
	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<div><br></div>

	<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal2" style=" position: relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#339fff;" >
	   <h1><?php echo TXT_TM3 ; ?></h1>
	</button>
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:90%; left:5%;">
	<div class="modal-dialog" style="width:100%;">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h2 class="modal-title" id="myModalLabel"><?php echo TXT_STM1 ?></h2>
	</div>
	<div class="modal-body">
	<h1><?php echo TXT_TbM3 ; ?></h1>
	
		<?php

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');  // serveur distant
//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....	
 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification, communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('COM') ORDER BY annee DESC";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRET; ?>

<!--premiere boucle while : liste des publications -->

<?php 
while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"40%\">".$row[0]."</TD><TD width=\"35%\">";// si publication ecrite : mettre en lien vers la publication(sur pubmed par exemple....
// deusième boucle while à l'intérieur de la première :


$sql1="SELECT nom, prenom, Rang FROM auteur join communique on auteur.idAuteur=communique.idAuteur   WHERE communique.idPublication=".$row[4]." ORDER BY communique.Rang";

$req1= mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link)); 

while($row1= mysqli_fetch_array($req1, MYSQLI_BOTH)){ 

//if((trim($row1['nom'])=="Charles" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Luc" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Couraud"&& trim($row1['prenom'])=="G")||trim($row1['nom'])=="Delmond"||trim($row1['nom'])=="Durand"||trim($row1['nom'])=="Bordenave"||trim($row1['nom'])=="Renard"||trim($row1['nom'])=="Seris")
if((trim($row1['nom'])=="Roques" && trim($row1['prenom'][0])=="S")||(trim($row1['nom'])=="Meulle" && trim($row1['prenom'][0])=="M")||( trim($row1['nom'])=="Charles" && trim($row1['prenom'][0])=="G")|| (trim($row1['nom'])=="Luc" && trim($row1['prenom'][0])=="G")||(trim($row1['nom'])=="Couraud")||(trim($row1['nom'])=="Delmond")||(trim($row1['nom'])=="Durand")||(trim($row1['nom'])=="Bordenave")||(trim($row1['nom'])=="Renard" && trim($row1['prenom'])=="M")||(trim($row1['nom'])=="Seris" && trim($row1['prenom'])=="E")||(trim($row1['nom'])=="" && trim($row1['prenom'])==""))


{ 

echo "<strong><em style=\"color:yellow;\">".$row1['nom']." ".$row1['prenom']."  </em></strong>";

} 

else

{

echo $row1['nom']." ".$row1['prenom']."  "; 

}



}

echo "</TD><TD width=\"10%\">".$row[2]."</TD>"; 

echo "<TD width=\"5%\">".$row[1]."</TD></TR>"; 

}

?>

	</table></CENTER>              
	</div>
	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<div><br></div>
	<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal3" style=" position: relative; width:80%;  height:12%; left:10%; align:justify; color:white; background-color:#339fff;" >
	<h1><?php echo TXT_TM4 ; ?></h1>
	</button>
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:90%; left:5%;">
	<div class="modal-dialog" style="width:100%">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h2 class="modal-title" id="myModalLabel"><?php echo TXT_STM1 ; ?></h2>
	</div>
	<div class="modal-body">
	<h1><?php echo TXT_TbM4 ; ?></h1>
		<?php

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');  //serveur distant
//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....	
 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification, communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('Brevet') ";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRET; ?>

<!--premiere boucle while : liste des publications -->

<?php 
while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"40%\">".$row[0]."</TD><TD width=\"35%\">";// si publication ecrite : mettre en lien vers la publication(sur pubmed par exemple....
// deusième boucle while à l'intérieur de la première :

$sql1="SELECT nom, prenom, Rang FROM auteur join communique on auteur.idAuteur=communique.idAuteur   WHERE communique.idPublication=".$row[4]." ORDER BY communique.Rang";

$req1= mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link)); 

while($row1= mysqli_fetch_array($req1, MYSQLI_BOTH)){ 

//if((trim($row1['nom'])=="Charles" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Luc" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Couraud"&& trim($row1['prenom'])=="G")||trim($row1['nom'])=="Delmond"||trim($row1['nom'])=="Durand"||trim($row1['nom'])=="Bordenave"||trim($row1['nom'])=="Renard"||trim($row1['nom'])=="Seris")

if((trim($row1['nom'])=="Roques" && trim($row1['prenom'][0])=="S")||(trim($row1['nom'])=="Meulle" && trim($row1['prenom'][0])=="M")||( trim($row1['nom'])=="Charles" && trim($row1['prenom'][0])=="G")|| (trim($row1['nom'])=="Luc" && trim($row1['prenom'][0])=="G")||(trim($row1['nom'])=="Couraud")||(trim($row1['nom'])=="Delmond")||(trim($row1['nom'])=="Durand")||(trim($row1['nom'])=="Bordenave")||(trim($row1['nom'])=="Renard" && trim($row1['prenom'])=="M")||(trim($row1['nom'])=="Seris" && trim($row1['prenom'])=="E")||(trim($row1['nom'])=="" && trim($row1['prenom'])==""))


{ 

echo "<strong><em style=\"color:yellow;\">".$row1['nom']." ".$row1['prenom']." </em></strong>";

} 

else

{

echo $row1['nom']." ".$row1['prenom']."  "; 

}



}

echo "</TD><TD width=\"10%\">".$row[2]."</TD>"; 

echo "<TD width=\"5%\">".$row[1]."</TD></TR>"; 

}



?>

</table></CENTER>              
<br/>	
	</div>
	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<div><br></div>
	<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal4" style=" position: relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#339fff;" >
	 <h1><?php echo TXT_TM5; ?></h1>
	</button>
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:90%; left:5%;">
	<div class="modal-dialog" style="width:100%;">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo TXT_STM1 ; ?></h4>
	</div>
	<div class="modal-body">
	<h1><?php echo TXT_TbM5;?></h1>
			<?php
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');  //serveur distant
//$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....	
 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification, communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('Ouvrage') ";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRET; ?>

<!--premiere boucle while : liste des publications -->

<?php 

while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"40%\">".$row[0]."</TD><TD width=\"35%\">";
// si publication ecrite : mettre en lien vers la publication(sur pubmed par exemple....
// deusième boucle while à l'intérieur de la première :

$sql1="SELECT nom, prenom, Rang FROM auteur join communique on auteur.idAuteur=communique.idAuteur   WHERE communique.idPublication=".$row[4]." ORDER BY communique.Rang";

$req1= mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link)); 

while($row1= mysqli_fetch_array($req1, MYSQLI_BOTH)){ 

//if((trim($row1['nom'])=="Charles" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Luc" && trim($row1['prenom'])=="G")||(trim($row1['nom'])=="Couraud"&& trim($row1['prenom'])=="G")||trim($row1['nom'])=="Delmond"||trim($row1['nom'])=="Durand"||trim($row1['nom'])=="Bordenave"||trim($row1['nom'])=="Renard"||trim($row1['nom'])=="Seris")
if((trim($row1['nom'])=="Roques" && trim($row1['prenom'][0])=="S")||(trim($row1['nom'])=="Meulle" && trim($row1['prenom'][0])=="M")||( trim($row1['nom'])=="Charles" && trim($row1['prenom'][0])=="G")|| (trim($row1['nom'])=="Luc" && trim($row1['prenom'][0])=="G")||(trim($row1['nom'])=="Couraud")||(trim($row1['nom'])=="Delmond")||(trim($row1['nom'])=="Durand")||(trim($row1['nom'])=="Bordenave")||(trim($row1['nom'])=="Renard" && trim($row1['prenom'])=="M")||(trim($row1['nom'])=="Seris" && trim($row1['prenom'])=="E")||(trim($row1['nom'])=="" && trim($row1['prenom'])==""))

{ 

echo "<strong><em style=\"color:yellow;\">".$row1['nom']." ".$row1['prenom'].", </em></strong>";

} 

else

{

echo utf8_encode($row1['nom'])." ".utf8_encode($row1['prenom'])." "; 

}



}

echo "</TD><TD width=\"10%\">".$row[2]."</TD>"; 

echo "<TD width=\"5%\">".$row[1]."</TD></TR>"; 

}



?>

	</table></CENTER>              

<br/>
	</div>
	</div></div>
	</div>
	

</div>	

<!-- pied de page --> 
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
<!-- fin pied de page -->

</div>

</body>

</html>