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
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

  <title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---  icone barre du navigateur...                        -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->
<!--- mes feuilles de style : -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />-->
<link rel="stylesheet" type="text/css" href="../css/CSSPage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />

<!-- vérification du formulaire contacte -->

<script type="text/javascript" src="js/verifForm.js" ></script>

<!--  script menu   -->

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



<body>
<?php

	 //premiere page du site : je choisit la langue francaise par défaut. Ce choix est nécessaire car si pas de langue choisit :renvoie d'une erreur...

	 if($_SESSION['lang'] && empty($_GET['langue'])){

		$_SESSION['lang'];

 }

 else if(!empty($_GET['langue']) ){

 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change: langue chois par le formulaire.

 }

//else  $_SESSION['lang']='fr';

 

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
<?php echo TXT_EnTete; ?> 
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>

 <!-- gestion du choix des langues en php -->

<div  style="display:flex; flex-direction:row;"> 
<div id="contenu" align="inline-block" width="100%">

<div id="CdL" style="float:right; align:inline-block;"> 
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >			
<a href=\"admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"100%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>	
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"30px\" ></span>
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"150%\"></a>		
			"; 	
		}
		
		else {			
		echo "
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"100%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>			
<a href=\"\" ><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><label for=\"choixlangue1\"><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"30px\" ></span>
<a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><label for=\"choixlangue2\"><img src=\"../image/en.png\" width=\"150%\"></a>			
			";
		}
		
		?>


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
</div></div>
 

<!--                                           -->

<!-- choix des langues en php à améliorer, fin -->

<!--                                           -->	
<br>
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
 <div  style="display:flex; flex-direction:row;"> 

 <div id="contenu" align="inline-block" width="100%">
<nav>

<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>

</ul>

</nav>



</div></div>

<!-- fin du menu -->

<div style="margin-left:5%;margin-right:25%;">
<div style="text-align:center"><? echo TXT_TitreContact;?></div><br>
<div id="FdC">
<div style="text-align:center"><? echo TXT_stContact;?></div>

<script type="text/javascript" src="js/verifForm.js" ></script> 

<form  name="fiche" onSubmit="return verifForm()"  accept-charset="UTF-8" method="post" >

<fieldset><legend><?php echo TXT_Contacte ; ?></legend>

 <label><?php echo TXT_Nom ; ?> *</span></label>

 <input type="text" maxlength="128" name="nom" size="60"  />

<br><br>



<label><?php echo TXT_Prenom ; ?>*</span></label>

 <input type="text" maxlength="128" name="prenom" id="" size="60" />

<br><br>



 <label><?php echo TXT_Email; ?>*</span></label>

 <input type="text" maxlength="128" name="email" id="" size="60"/>

<br><br>

<label><?php echo TXT_Message; ?></label>

<textarea cols="60" rows="5" name="message"></textarea>

<br>

<br>

</fieldset>

<fieldset>

<legend><?php echo TXT_Donnees; ?></legend>

<br><br>

<img src="captchaLettres.php"><label><?php  echo TXT_Code; ?></label>

<input type="text" name="code"><br>

         
<input type="submit"  value="<?php echo TXT_ValueE; ?>" style="width:80px;"><span><img src="../image/transparent.png" width="5%" height="5%"></span><input type="reset" value="<?php echo TXT_ValueR ; ?>" style="width:80px;"><!-- un seul submit dans un formulaire suffit !  -->


</fieldset><br>
</form>


</div>
<br>
</div>


<?php



if ($_SERVER["REQUEST_METHOD"] == "POST"){


	if($_POST['code']!=$_SESSION['captcha']){

	//echo "code poste: ".$_POST['code']."!";

	//echo "<br>Session captcha: ".$_SESSION['captcha']."!";

	 echo "<br/> le code n'est pas bon, recommencez! (Attention le code est tout en majuscules."; //attention les majuscules sont differentes des minuscule 

	}

	else {

	"<br/>vous avez entrez le bon code!";

	}

 	//echo "Verification du formulaire :<br/>";	

if (empty($_POST['nom'])) {

    $nameErr = "Votre nom est requit<br/>";

	echo $nameErr;

	$nom=NULL;

  } else {

    $nom = $_POST['nom'];

  }



if (empty($_POST['prenom'])) {

    $nameErr = "informez la rubrique prenom<br/>";

	echo $nameErr;

	$prenom=NULL;

  } else {

    $prenom = $_POST['prenom'];

  }



if (empty($_POST['email'])) {

    $nameErr = "le email et exigé!<br/>";

	echo $nameErr;

	$mail=NULL;

  } else {

    $mail = $_POST['email'];

  }



if (empty($_POST['message'])) {

    $nameErr = "pas de message? un oubli?<br/>";

	echo $nameErr;

	$message=NULL;

  } else {

    $message = $_POST['message'];

  }

 if($nom==NULL || $prenom==NULL || $mail==NULL){

 echo"SVP, remplissez à nouveau les rubriques * obligatoires !";

} 

else{
//echo "le nom: ".$nom." Le prenom: ".$prenom." Le mail: ".$mail." Fin.";

 if($nom!=NULL && $prenom!=NULL && $mail!=NULL)

		{

// on se connecte à MySQL
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');
//$link = mysqli_connect( 'localhost', 'root','','cic-it2017'); //connexion local

if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

// on sélectionne la table...



mysqli_select_db($link,"contact");

// on crée la requête SQL

$today = date("Y-m-d H:i:s");   
//echo $today;
$sql = "INSERT INTO contact VALUES(0,'$nom','$prenom','$mail','$message','$today')" ;

// on envoie la requête

$req = mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));

// on ferme la connexion à mysql
//on envoie un mail à Marlène :un nouveau contacte....








 


 





 






// Le message 

$message = "Bonjour Marlène,\r\nUne nouvelle fiche de contacte vient d'être déposée sur le site.\nTu peux la consulter dès maintenant sur l'administration du site, gestion des contactes.\nCordialement,\nLe webmaster du CIC-IT.";
$sujet="Nouveau contact";
// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
//$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('marlene.durand@chu-bordeaux.fr, cecile.raymond@chu-bordeaux.fr', $sujet, $message);



mysqli_close($link);

}

}

}

?>





<!-- ajout pied de page : plan du site....   --> 

<div id="test" class="arrondie">

<?php echo TXT_Piedhtml; ?>

</div>

<!-- fin ajout -->

<br>

</div>

</body>

</html>