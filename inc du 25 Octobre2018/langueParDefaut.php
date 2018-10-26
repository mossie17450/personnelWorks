<?php 
	  
	   if(empty($_SESSION['lang']) && empty($_GET['langue'])){                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
	 $_SESSION['lang']='fr';
	
  	 }
	  	 
	  else if($_SESSION['lang'] && empty($_GET['langue'])){
	 $_SESSION['lang'];
 }
	else if(!empty($_GET['langue'])){
 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change
 }


 //inclusion des fichiers langue ... différent du choix de la langue.
	if($_SESSION['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
 include('lang/fr-lang.php');
  	 } 
  	 
  	 else if($_SESSION['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
  	 include('lang/en-lang.php');
  	 }
  	
	 if(isset($_SESSION['lang'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	
	echo '<br/>';

	// On affiche un lien pour fermer notre session
	 
}
else {
	echo 'Les variables ne sont pas déclarées.';
}

?>