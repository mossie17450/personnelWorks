<?php
session_start();
?>

<!html5>
<html>	

<head>


<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />

<!---                         -->

<!--- mes feuilles de style : -->

<!---                        
 <link rel="stylesheet" type="text/css" href="../css/SecondePage.css" >
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="../css/adminPage.css" >
  <link rel="stylesheet" type="text/css" href="../css/SecondePage.css" >

<!-- <link rel="stylesheet" type="text/css" href="css/menuHD.css" > 

<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />

<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />

<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
-->
<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.cic-it-bordeaux.fr/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


</head> 



<?php 

function get_ip()
{
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		
	}
	elseif(isset($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	else
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	//echo $ip;
	return $ip;	
}

$ip=$_SERVER["REMOTE_ADDR"]; //cette ligne permet de recuperer l'adresse du visiteur de la page.
//echo "ip?:".get_ip()."!<br>"; //pour le developpement

$ip=get_ip();

 //cette ligne permet de recuperer l'adresse du visiteur de la page.
//echo "ip du visiteur?:".get_ip()."!!!<br>"; //pour le developpement

if(isset($_POST['login'])&& !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])){

$login=$_POST['login']; 

$password=$_POST['password']; 

}
//echo $login; //pour le developpement


//if(isset($login)) { // on arrive du formulaire  

    $log="Admin"; // change ton login ici 

    $pwd="Admin"; //  change ton password ici 

//	echo $log;
	//ici, l'adresse ip des ordinateurs autorisé à consulter l'espace administration....

 if (((strcmp($login, $log) != 0)||(strcmp($password, $pwd) != 0))||(!(preg_match('#194.167.179.10#', $ip)))) {
  // if (((strcmp($login, $log) != 0)||(strcmp($password, $pwd) != 0)) && (!(preg_match('#194.167.179.10#', get_ip())) || !((preg_match('#127.0.0.1#', get_ip()))) ))  // || (preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || (preg_match('#fe80::8eb:d45:23f4:5142#', $ip))) )
	
// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href= ".htmlentities($_SERVER['PHP_SELF'])."\">RETOUR</a></body></html>"; 

//echo "petite page bien formée qui efface  la paire login/password"; 

        exit; //ici on sort de la page....
	 }
	 
	 <body style="font-family:'Century Gothic Normal'; max-width:1200px; " >
<!-- CRUD catalogue des instrument de chirurgie, le read est sur le site visible par tous , ici nous faison l'update...  -->
 <h1 align="center"><?php echo "Catalogue des instruments de chirurgie disponible au prêt: mise à jour!"; ?></h1> 

	
	 ?>

	 
	 
</body> 

</html> 