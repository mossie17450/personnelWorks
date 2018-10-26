<?php
//IE:
echo"<div id=\"CdL\"    style=\"margin-left:5%;\"> ";

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo	"<div class=\"container-fluid\"><div class=\"row\" >
 <div class=\"col-2 col-sm-1\"><img src=\"image/logos/logo-afaq-iso-9001.png\" width=\"100%\" ></div>
<div class=\"col-1 col-sm-1\"></div>
<div class=\"col-3 col-sm-1\">";

if($_SESSION['lang']=='en'){
		echo"
		<img src=\"image/logos/INPROGRESS.png\" width=\"100%\" \">
		";
		}
		else {
		echo"
		<img src=\"image/logos/blancINPROGRESS.png\" width=\"80%\" \"></td>
		";
		}
			echo"</div>
<div class=\"col-1 col-sm-6\"></div>
<div class=\"col-4 col-sm-2\">	 
	 <table style=\"border:none;\">
<tr><form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" >
<td><a href=\"\"><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><td colspan=\"3\"><label for=\"choixlangue1\"><img src=\"image/fr.png\" width=\"80%\"></td></a>
<a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><td colspan=\"3\"><label for=\"choixlangue2\"><img src=\"image/en.png\" width=\"80%\"></td></a>		
<td colspan=\"3\"><a href=\"html/admin.php \" ><img src=\"image/cadenasp.png\" width=\"50%\"></a></td>
</tr></form></table>	 
	 </div>
	 
	 </div></div>";
			
			

		
		}
	
	
	
	/*pour firefox...faire en boostrap.... */
	/*colonne de taille inegales */
else{		
echo	"<div class=\"container-fluid\"><div class=\"row\" >
 <div class=\"col-2 col-sm-1\"><img src=\"image/logos/logo-afaq-iso-9001.png\" width=\"100%\" ></div>
<div class=\"col-1 col-sm-1\"></div>
<div class=\"col-3 col-sm-1\">";

if($_SESSION['lang']=='en'){
		echo"
		<img src=\"image/logos/INPROGRESS.png\" width=\"100%\" \">
		";
		}
		else {
		echo"
		<img src=\"image/logos/blancINPROGRESS.png\" width=\"80%\" \"></td>
		";
		}


echo"</div>
<div class=\"col-1 col-sm-6\"></div>
<div class=\"col-4 col-sm-2\">	 
<table style=\"border:none;\"><tr>
<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" >

<td><a href=\"\"><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><td colspan=\"3\"><label for=\"choixlangue2\"><img src=\"image/fr.png\" width=\"80%\"></td></a>	
<td><a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><td colspan=\"3\"><label for=\"choixlangue2\"><img src=\"image/en.png\" width=\"80%\"></td></a>		
<td colspan=\"3\"><a href=\"html/admin.php \" ><img src=\"image/cadenasp.png\" width=\"50%\"></a></td>
</tr></form></table>	 
	 </div>
	 
	 </div></div>";
	
}	
	
//inclure les fichier "lang"
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

echo"
 </div></div>
 ";
 
?>



