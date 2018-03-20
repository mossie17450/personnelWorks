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
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>  
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!--<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>-->
   
    <script src="https://raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
  
<script type="text/javascript" src="../js/jquery.bootpag.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)" type="text/css" href="../css/CSSPage.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)"type="text/css" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />

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
<body style="font-family:'Century Gothic Normal'; max-width:1200px; " >
<div  class="arrondie">
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
 <?php include '../inc/objetMenuhtml.php'; ?>



<div  style="display:flex; flex-direction:row; width:100%"> 
<div id="contenu" width="100%" height="auto" style="display:inline;" >


<div  style="display:flex; flex-direction:column; height:auto;">
<div id="section-article" style="width:100%;">
<div style="text-align:center"><?php echo TEXT_TitreStage; ?></div>                              
   
	  <br><br><br>
	  <?php 
	  
$link =mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev' );	
					
	 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

$req = "SELECT * FROM stage";
		$poste = mysqli_query($link, $req);
		
		if(mysqli_num_rows($poste))
		$nbStages = true;
		else $nbStages = false;
		
		
		mysqli_close($link);

	if($nbStages) {
		
		while($stages = mysqli_fetch_array($poste,MYSQLI_BOTH)) {
			echo '
			<table class="listeEvent">
				<tr><td>'.$stages['titreStage'].'</td></tr>
				<tr><td>'.$stages['descriptionStage'].'</td></tr>
				<tr><td>'.TXT_TPDF.'</td></tr>
				<tr><td><a href="../admin/www/'.$stages['NomStagePDF'].'">'.$stages['NomStagePDF'].'</a></td></tr>
				<tr><td>'.TXT_PostulerS.'</td></tr>
				<tr><td><a href="cic-it-spontanee.php">'.TXT_IciPostulerS.'</a></td></tr>						
			</table>
			<br/><br/>
			';
		}
		
	} 
	
		else {
	
		echo TXT_ArticleStage;
		}	
		
?>
</div>
	  
	
<!-- une fenetre modale!  
<button class=\"btn btn-md btn-info \" data-toggle=\"modal\" data-target=\"#myModal1\" style=\"position:center;color:#9999ff; background-color:transparent; border:none; \" >-->


<!--
<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#StagesModal" style="position:relative; width:80%%; height:2%; left:2%; align:justify; color:#9999ff; background-color:transparent; border:none;" >
	<h4><?php //echo TXT_TMS; ?></h4>
	</button>
	<!-- Modal --> 
	<!--<div class="modal fade" id="StagesModal" tabindex="-1" role="dialog" aria-labelledby="StagesModalLabel" aria-hidden="true" style="width:90%; padding:5%; " >
	<div class="modal-dialog" style="width:100%;">
	<div class="modal-content" >
	<div class="modal-header">
	<button type="button-lg" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h2 class="modal-title" id="StagesModalLabel"><?php  echo TXT_STMS ; ?></h2>
	</div>
	<div class="modal-body">
	<?php // echo TXT_ATMS ; ?>
	
<CENTER><table id="tab">
	<?php 
/*
$link =mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev' );	
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}	

$sql = "SELECT * FROM stagiaires";
$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 

while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"10%\">".$row[1]."</TD><TD width=\"10%\">".$row[2]."</TD><TD width=\"10%\">".$row[3]."</TD><TD width=\"40%\">".$row[4]."</TD><TD width=\"10%\">".$row[5]."</TD></TR>";

}
mysqli_close($link);
*/
?>

	</table></CENTER>         
	</div>
	</div><!-- /.modal-content 
	</div><!-- /.modal-dialog 
	</div><!-- /.modal -->
<br>





</div></div></div>
<!-- pied de page  -->
<div style="display:flex; flex-direction:column; ">
<?php include '../inc/piedDePage.php'; ?>
</div>


</div>
</body>
</html>