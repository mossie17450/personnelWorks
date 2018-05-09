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
<!-- langue par défaut                        -->
<?php include'../inc/languesParDefauthtml.php';?>
<body style="font-family:'Century Gothic Normal'; max-width:1200px; " >
<!-- entete                                    -->
<!--                                           -->
<!-- choix des langues                         -->
<!--                                           -->	
<!-- menu HDR2                                 -->  
<?php include "../inc/EnTeteCICITBordeauxhtml.php";?>
<?php include '../inc/choixDesLangueshtml.php';?>
<?php include '../inc/objetMenuhtml.php'; ?>

<div style="margin-left:2%; margin-right:15%;">
<br>
<div style="text-align:justify;"><?php echo TXT_TitreSpon ; ?><?php echo TXT_Spon ; ?></div><br>
<div id="FdC">

 <!--paging_filter-->

<script type="text/javascript" src="../js/verifFormS.js" ></script> 

<form name="ficheS"  accept-charset="iso-8859-1"  enctype="multipart/form-data" method="post" onSubmit="return verifformS()" >

<fieldset><legend><?php //echo TXT_Contacte ; ?></legend><!--text_Contact n'existe plus -->

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

 <br><br/><?php  echo TXT_Champs; ?><br/><br/></fieldset>

 <fieldset><legend><?php echo TXT_Competences ;  ?></legend>

<!-- upload de fichiers  -->

<p>

 <!-- On limite le fichier à 8000Ko -->
     <input type="hidden" name="MAX_FILE_SIZE" value="8000000">

    <?php echo TXT_CV; ?><input type="file" name="avatar" value="OK">

     <br><?php echo TXT_Max; ?>

</p>

<br>

<p>

   <!-- On limite le fichier à 8000Ko -->


     <input type="hidden" name="MAX_FILE_SIZE" value="8000000">

    <?php  echo TXT_Motiv ;?><input type="file" name="avatar2" id="1" value="<?php echo TXT_selectfichier ;?>">


	 <br><?php echo TXT_Max; ?>
<script>
document.getElementById("1").innerHTML = "Hello Dolly.";
</script>
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
		<br>

        <input type="submit" value="<?php echo TXT_ValueE; ?>" style="width:80px;" ><span><img src="../image/transparent.png" width="5%" height="5%"></span><input type="reset" value="<?php echo TXT_ValueR; ?>" style="width:80px;">	

	</fieldset>	
<br>
</form>
<br>
<div>


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
	echo TXT_codenok;
	
 }

	else {
	echo TXT_codeok ;
}

//formulaire contact 
if(empty($_POST['intitule'])) {

    $nameErr = TXT_intform ;

	echo $nameErr;

	$intitule=NULL;

  } else {

    $intitule = $_POST['intitule'];

  }

if (empty($_POST['nom'])) {

    $nameErr = TXT_nomform;

	echo $nameErr;

	$nom=NULL;

  } else {

    $nom = $_POST['nom'];

  }

if (empty($_POST['prenom'])) {

    $nameErr = TXT_prenomform;

	echo $nameErr;

	$prenom=NULL;

  } else {

    $prenom = $_POST['prenom'];

  }

if (empty($_POST['email'])) {

    $nameErr = TXT_mail ;

	echo $nameErr;

	$mail=NULL;

  } else {

    $mail = $_POST['email'];

	

  }

if (empty($_POST['tel'])) {

    $nameErr = TXT_phone;

	echo $nameErr;

	$telephone=NULL;

  } else {

    $telephone = $_POST['tel'];

  }

if (empty($_POST['message'])) {

    $nameErr = TXT_messageform;

	echo $nameErr;

	$message=NULL;

  } else {

    $message = $_POST['message'];

  }

if($nom==NULL|$prenom==NULL|$intitule==NULL|$mail==NULL)
{

echo TXT_formnok ;

}
//fin de la vérification du formulaire.

if( $nom!=NULL && $prenom!=NULL && $intitule!=NULL && $mail!=NULL && $_POST['code']==$_SESSION['captcha']){
//on traite le formulaire et on les rentre dans la BD

//echo "je suis connectée...<br>"; pour le developpement
	
$dossier = 'www/';

$fichier = basename($_FILES['avatar']['name']); //?????

$fichier2 = basename($_FILES['avatar2']['name']);

//echo "mon fichier :".$fichier; //(nom du fichier?) pour le developpement

//echo "<br/>deusieme fichier: ".$fichier2; //(nom du fichier 2?)

if($fichier!=NULL){
$taille_maxi = 8000000;

$taille = "<br>".filesize($_FILES['avatar']['tmp_name']);

//echo "<br/>taille :".$taille."!";

$extensions = array('.jpg', '.jpeg', '.pdf','.doc','.txt','.zip','.rar');

$extension = strrchr($_FILES['avatar']['name'], '.'); 

//$date=date("Y-m-d h-i-sa");

	$fichier=$date.$fichier; //concatenation fichier et date ???
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

    }

	 if( move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier.$fichier)){ echo " ";}  //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
}
//else $fichier=NULL;

if($fichier2!=NULL){

$taille_maxi = 8000000;

$taille = "<br>".filesize($_FILES['avatar2']['tmp_name']);

//echo "<br/>taille :".$taille."!";

$extensions = array('.jpg', '.jpeg', '.pdf','.doc','.txt','.zip','.rar');

$extension = strrchr($_FILES['avatar2']['name'], '.'); 

$date=date("Y-m-d h-i-sa");

	$fichier2=$date.$fichier2; //concatenation fichier et date ???


	//echo "premier fichier: ".$fichier;

//Début des vérifications de sécurité...

if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau

{

     $erreur = TXT_upload ;

}

if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload

{

	 //deusieme fichier: fichier2

		$fichier2 = strtr($fichier2, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichier2 = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier2);

    }

	 if(move_uploaded_file($_FILES['avatar2']['tmp_name'], $dossier.$fichier2)){ echo " ";} //Si la fonction renvoie TRUE, c'est que ça a fonctionné...

          //echo 'Upload 2 effectué avec succès !'; //pour le développement

		  }



$date=date("Y-m-d h:i:sa");

//echo $date; //pour le developpement....
include("../inc/connect.php");	
//on se connect à la BD
// on sélectionne la table...
mysqli_select_db($link,"cvjoint");
// on crée la requête SQL
$sql = "INSERT INTO cvjoint(nom, prenom, intitule, email, telephone, message, date, NomfichierCV, NomfichierLettreM ) VALUES('$nom','$prenom','$intitule','$mail','$telephone','$message','$date','$fichier','$fichier2') " ;


// on envoie la requête, jusque la...ca va presque...

$req = mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));


//  envoie automatique d'un mail à Marlène:
$message = "Bonjour Marlène,\r\nUne nouvelle candidature spontanée vient d'être déposée sur le site.\nTu peux la consulter dès maintenant sur l'administration du site, gestion des candidatures spontanées.\nCordialement,\nLe webmaster du CIC-IT.";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
//$message = wordwrap($message, 70, "\r\n");
// Envoi du mail

mail('marlene.durand@chu-bordeaux.fr, cecile.raymond@chu-bordeaux.fr', 'Nouvelle candidature spontané aujourd\'hui', $message);
//mail('marlene.durand@chu-bordeaux.fr, cecile.raymond@inserm.fr' , 'Nouvelle candidature spontané aujourd\'hui', $message); 

mysqli_close($link);

//echo"fin de mise a jour de la bd";

echo TXT_formok ;

}
}
?>
</div>

<!--<div>fin</div><!-- pour le developpement -->
<!-- pied de page  -->
</div></div>
<br><br>

<div>
<?php include '../inc/piedDePage.php'; ?>
</div>


</div>

</body>

</html>





