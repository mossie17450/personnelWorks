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
<!--<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
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
<!-- langue par défaut                        -->
<?php include'../inc/languesParDefauthtml.php';?>
<body style="font-family:'Century Gothic Normal'; height:auto; " >
<div id="body">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
 <?php include '../inc/objetMenuhtml.php'; ?>

<br>
<div id="contenu"  width="100%" style="display:flex; flex-direction:column; height:100%;">

<!-- à traduire ? -->                             
<?php echo TXT_TV;  ?>

<!-- Bouton execution modal -->
	<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#myModal" style=" position:relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#2d5986;" >
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



<?php include '../inc/connect.php'; ?>

<?php



$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification ,href ,communique.idPublication  FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN( 'ACL')ORDER BY annee DESC";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">
 <?php echo TXT_VRETA; ?>
	
<!--premiere boucle while : liste des publications -->

<?php 
while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){ 


echo "<TR><TD width=\"40%\"><a style=\"color:#ffcc66;\" href=\" ".$row[4]." \" >".$row[0]."</a></TD><TD width=\"35%\">"; 
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
	<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#myModal1" style=" position: relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#2d5986;" >
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


$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification ,href ,communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('AFF','ACTN','ACTI') ORDER BY annee DESC";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRETAFF; ?>

<!--premiere boucle while : liste des publications -->

<?php 
while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"40%\">".$row[0]."</TD><TD width=\"35%\">";// si publication ecrite : mettre en lien vers la publication(sur pubmed par exemple....
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

	<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#myModal2" style=" position: relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#2d5986;" >
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
	
 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification, communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('COM') ORDER BY annee DESC";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRETO; ?>

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
	<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#myModal3" style=" position: relative; width:80%;  height:12%; left:10%; align:justify; color:white; background-color:#2d5986;" >
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
 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification, communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('Brevet') ";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRETB; ?>

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
	<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#myModal4" style=" position: relative; width:80%; height:12%; left:10%; align:justify; color:white; background-color:#2d5986;" >
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
 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification, communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal WHERE publication.codification IN ('Ouvrage') ";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 
 
//affichage en fonction de l'annee et du type de publication
?>


<CENTER><table id="tab">

 <?php echo TXT_VRETOU; ?>

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

mysqli_close($link);

?>

	</table></CENTER>              

<br/>
	</div>
	</div></div>
	</div>
	

</div>	

<!-- pied de page --> 
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>

</div>
</body>
</html>