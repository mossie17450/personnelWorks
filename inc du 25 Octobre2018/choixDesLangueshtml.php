<?php


// avec IE
echo"<div   style=\"margin-left:5%;\">";

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "<div class=\"table-responsive,\" style=\"border:none; width:100%;\">		
		<table class=\"table, ex2\" style=\"width:100%; min-height:50px; max-height:200px;\"><tr>";
		if($_SESSION['lang']=='en'){
		echo"<td colspan=\"1\"><img src=\"image/logos/logo-afaq-iso-9001.png\" width=\"20%\"></td>
		<td colspan=\"2\"><img src=\"image/logos/INPROGRESS.png\" width=\"20%\" style=\"float:left;\"></td>
		";
		}
		else {
		echo"<td colspan=\"2\"><img src=\"image/logos/logo-afaq-iso-9001.png\" width=\"20%\" ></td>
		<td colspan=\"4\"><img src=\"image/logos/blancINPROGRESS.png\" width=\"20%\" style=\"float:left;\"></td>
		";
		}
		
		echo"<td>		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" >
		<div id=\"CdL\" class=\"row\"  class=\"col-lg-12\"  style=\"margin-left:5%;border:none;\"> 
<table  style=\"border:none; width:100%; float:right; margin-right:1%; margin-left:5%;\"><tr colspan=\"12\">

<td colspan=\"4\"><a href=\"#\" style=\"display:flex; flex-direction:row; border:none;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"image/fr.png\" width=\"200%\"></a></td>
<td colspan=\"4\"><a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"image/en.png\" width=\"200%\"></a></td>
<td colspan=\"2\"><a href=\"html/admin.php\"><label><img src=\"image/cadenasp.png\" width=\"80%\"></a></td>
</tr></table></div></form></tr></td></table></div>	
		"; 	
		}		
		
		
	
	/*pour firefox...faire en boostrap.... */
	/*colonne de taille inegales */
		
echo "<div class=\"container-fluid\"><div class=\"row\" >
 <div class=\"col-2 col-sm-1\"><img src=\"../image/logos/logo-afaq-iso-9001.png\" width=\"80%\" ></div>
<div class=\"col-1 col-sm-1\"></div>
<div class=\"col-3 col-sm-1\">";

if($_SESSION['lang']=='en'){
		echo"
		<img src=\"../image/logos/INPROGRESS.png\" width=\"80%\" \">
		";
		}
		else {
		echo"
		<img src=\"../image/logos/blancINPROGRESS.png\" width=\"80%\" \"></td>
		";
		}


echo"</div>
<div class=\"col-1 col-sm-6\"></div>
<div class=\"col-5 col-sm-2\">	 
	 <table style=\"border:none;\">
<tr><form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" >
<td><a href=\"\"><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><td colspan=\"3\"><label for=\"choixlangue1\"><img src=\"../image/fr.png\" width=\"100%\"></td></a>
<a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><td><label for=\"choixlangue2\"><img src=\"../image/en.png\" width=\"100%\"></td></a>		
<td><a href=\"admin.php \" ><img src=\"../image/cadenasp.png\" width=\"100%\"></a></td>
</tr></form></table>	 
	 </div>
	 
	 </div></div>";	
	

// include des fichiers langues suivant le choix :		
 if($_SESSION['lang'] && empty($_POST['langue'])){
 $_SESSION['lang'];
 }
else if($_POST['langue']=='fr'){
 include('../lang/fr-lang.php');
$_SESSION['lang']='fr';

}
else if($_POST['langue']=='en'){

 $_SESSION['lang']='en';
 include('../lang/en-lang.php');
}
//fermeture de l'objet.
echo"

 </div>
 </div>";
 
?>