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

<meta http-equiv="Content-Type" content="text/html; charset=utf8; image=png;" >

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---  icone barre du navigateur...                        -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->
<!--- ma premiere( presque) feuille de style : -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)" type="text/css" href="../css/CSSPage.css" />
<link rel="stylesheet"  media="screen and (min-width: 240px)"type="text/css" href="../css/menuHDR2.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />

<!-- script de verification du formulaire....   -->

<script type="text/javascript" src="../js/verifFormS.js" ></script>

<!-- script menu -->

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



// Fin -->

</script>

 

</head>
<body style="font-family:'Century Gothic Normal'; max-width:1200px; " >

<!-- choix de la langue  -->
<?php

	  if($_SESSION['lang'] && empty($_GET['langue'])){

 ($_SESSION['lang']);

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
<!-- en tete -->

<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">

<img src="../image/logos/CICITBordeaux.png"  class="arrondie" style="width:100%;" >
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>

 <!-- gestion du choix des langues en php -->
<div  style="display:flex; flex-direction:row;"> 
<div id="contenu" align="inline-block" width="100%">

<div id="CdL" style="float: right; align:inline-block;"> 
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
</form>		
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



 </div>
</div></div>
 

<!--                                           -->

<!-- choix des langues en php, fin             -->

<!--                                           -->	
<br>
<!--menu HDR(Horizontale, Deroulant, Responsif)-->  

      
<div  style="display:flex; flex-direction:row;"> 

<div id="contenu" align="inline-block" width="100%">


<nav>

<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>

</ul>

</nav>



</div></div>



<!-- fin du menu -->



<div style="margin-left:10%;margin-right:10%;">
<br>
<div style="text-align:justify;"><?php echo TXT_TitreSpon ; ?><?php echo TXT_Spon ; ?></div><br>
<div id="FdC">

 <!--paging_filter-->

<script type="text/javascript" src="../js/verifFormS.js" ></script> 

<form name="ficheS"  accept-charset="iso-8859-1"  enctype="multipart/form-data" method="post" onSubmit="return verifformS()" >

<fieldset><legend><?php echo TXT_Contacte ; ?></legend>

 <label><?php echo TXT_Int; ?> *</span></label>

 <input type="text" maxlength="128" name="intitule" size="60"  />

<br/><br/>

<label><?php echo TXT_Nom ;?> *</span></label>

 <input type="text" maxlength="128" name="nom" size="60"  />

<br/><br/>

<label for=""><?php echo TXT_Prenom ; ?>*</span></label>

 <input type="text" maxlength="128" name="prenom" id="" size="60" />

<br/><br/>



 <label for=""><?php echo TXT_Email; ?>*</span></label>

 <input type="email" maxlength="128" name="email" id="" size="60"/>

<br/><br/>

<label for=""><?php echo TXT_Tel ; ?></label>

 <input type="tel" maxlength="128" name="tel" id="" size="60"/> 

<br/><br/>



 <label for=""><?php echo TXT_Message ; ?></label>

 <textarea cols="60" rows="5" name="message"></textarea>

 <br/><br/><br/></fieldset>

 <fieldset><legend><?php echo TXT_Competences ;  ?></legend>

<!-- upload de fichiers  -->

<p>

 <!-- On limite le fichier à 8000Ko -->
     <input type="hidden" name="MAX_FILE_SIZE" value="8000000">

    <?php echo TXT_CV; ?><input type="file" name="avatar">

     <br><?php echo TXT_Max; ?>

</p>

<br>

<p>

   <!-- On limite le fichier à 8000Ko -->

     <input type="hidden" name="MAX_FILE_SIZE" value="8000000">

    <?php  echo TXT_Motiv ;?><input type="file" name="avatar2" value="un truc!">

	 <br><?php echo TXT_Max; ?>

	<br><br>

 <br/><strong>

<?php echo TXT_Note;  ?>

 </p>

 <br>

 </fieldset>

<fieldset>

 <legend><?php echo TXT_Donnees;  ?></legend>

 <br>

    <img src="captchaLettres.php" ><label><?php echo TXT_Code; ?></label> 

		<input type="text" name="code" >

		<br>

        <input type="submit" value="<?php echo TXT_ValueE; ?>" style="width:80px;" ><span><img src="../image/transparent.png" width="5%" height="5%"></span><input type="reset" value="<?php echo TXT_ValueR; ?>" style="width:80px;">	

</fieldset>	
<br>
		</form>



<br>

</div>

<br><br>



<?php

//echo "code captcha :".$_SESSION['captcha']; 

// on se connecte à MySQL, si post cic-it et ok...




if ($_SERVER["REQUEST_METHOD"] == "POST"){
/*
echo "langue :".$_SESSION['lang']."<br>";  //pour le dev : les sessions!
	echo "code captcha :".$_SESSION['captcha']; 
	echo "le post est: ".$_POST['code'];
	echo "<br/>bonjour, verification du formulaire :<br/>";
*/
	

	if($_POST['code']!=$_SESSION['captcha']){

	echo "<br/>vous n'avez pas entrez le bon code, recommencez!";		

 }

	else {

	echo "<br/><h3 style=\"text-align:center\">vous avez entrez le bon code.</h3>";

}


//echo "<br/><h3 style=\"text-align:center\">vous avez entrez le bon code.</h3>";

//formulaire contact 
if (empty($_POST['intitule'])) {

    $nameErr = "Votre intitulé est requis!<br/>";

	echo $nameErr;

	$intitule=NULL;

  } else {

    $intitule = $_POST['intitule'];

  }

if (empty($_POST['nom'])) {

    $nameErr = "Votre nom est necssecaire<br/>";

	echo $nameErr;

	$nom=NULL;

  } else {

    $nom = $_POST['nom'];

  }



if (empty($_POST['prenom'])) {

    $nameErr = "il faut informer la rubrique prenom<br/>";

	echo $nameErr;

	$prenom=NULL;

  } else {

    $prenom = $_POST['prenom'];

  }



if (empty($_POST['email'])) {

    $nameErr = "votre email et exigé!<br/>";

	echo $nameErr;

	$mail=NULL;

  } else {

    $mail = $_POST['email'];

	

  }

if (empty($_POST['tel'])) {

    $nameErr = "pas de telephone? un oubli?<br/>";

	echo $nameErr;

	$telephone=NULL;

  } else {

    $telephone = $_POST['tel'];

  }

if (empty($_POST['message'])) {

    $nameErr = "pas de message? un oubli?<br/>";

	echo $nameErr;

	$message=NULL;

  } else {

    $message = $_POST['message'];

  }

if($nom==NULL|$prenom==NULL|$intitule==NULL|$mail==NULL)

{

echo "<br/>SVP, remplissez à nouveau le formulaire contact en renseignant les rubliques \"*\" obligatoire!";

}



$dossier = 'www/';

$fichier = basename($_FILES['avatar']['name']); //?????

$fichier2 = basename($_FILES['avatar2']['name']);

//echo $fichier; //(nom du fichier?)

//echo "<br/>deusieme fichier: ".$fichier2; //(nom du fichier 2?)

$taille_maxi = 8000000;

$taille = "<br>".filesize($_FILES['avatar']['tmp_name']);

//echo "<br/>taille :".$taille."!";

$extensions = array('.jpg', '.jpeg', '.pdf','.doc','.txt','.zip','.rar');

$extension = strrchr($_FILES['avatar']['name'], '.'); 

$date=date("Y-m-d h-i-sa");

	$fichier=$date.$fichier; //concatenation fichier et date ???

	$fichier2=$date.$fichier2;

	//echo "premier fichier: ".$fichier;

//Début des vérifications de sécurité...



if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau

{

     $erreur = 'Vous devez uploader un fichier de type  jpg, jpeg, zip, rar, pdf, txt ou doc...';

}



if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload

{

     //On formate le nom du fichier ici...

     $fichier = strtr($fichier, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

	 //deusieme fichier: fichier2

		$fichier2 = strtr($fichier2, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichier2 = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier2);

    }

	 if( move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier.$fichier)&&move_uploaded_file($_FILES['avatar2']['tmp_name'], $dossier.$fichier2)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...

          //echo 'Upload 2 effectué avec succès !'; //pour le développement

	 

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');		 

			
if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$date=date("Y-m-d h:i:sa");

//echo $date;

// on sélectionne la table...

mysqli_select_db($link,"cvjoint");

// on crée la requête SQL

$sql = "INSERT INTO cvjoint VALUES( 0,'$nom','$prenom','$intitule','$mail','$telephone','$message','$date','$fichier','$fichier2') " ;



// on envoie la requête, jusque la...ca va presque...



$req = mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));

//  envoie automatique d'un mail à Marlène:

$message = "Bonjour Marlène,\r\nUne nouvelle candidature spontanée viens d'être déposé sur le site.\nTu peux la consulter dès maintenant sur l'administration du site, gestion des candidatures spontanées.\nCordialement,\nLe webmaster du CIC-IT.";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
//$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('marlene.durand@chu-bordeaux.fr, cecile.raymond@chu-bordeaux.fr', 'Nouvelle candidature spontané aujourd\'hui', $message);

mysqli_close($link);

//echo"fin de mise a jour de la bd";

echo "<h3 style=\"text-align:center\">vous avez correctement remplie le formulaire et vos données sont enrgistrées.<br/>Un mail à ete envoyé au DRH.<br>Merci de votre visite,<br> à bientot.<h3/>";

}



?>


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
 <!-- fin ajout -->

</div>

</body>

</html>





