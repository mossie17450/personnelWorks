<?php
echo"
<div id=\"CdL\" style=\"display:flex; flex-direction:row; width:100%; border:none;\">   
<div>";
 

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "
			<div class=\"table-responsive, ex2\" style=\"border:none; width:100%;\">
		<table class=\"table, ex2\" style=\"border:none; min-height:50px;max-height:100px; width:100%;\"><tr><td>	
			
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\">
<div  class=\"table-responsive, ex2\" >
<table style=\"border:none; width:30%; float:right; \"><tr colspan=\"3\">


<td colspan=\"1\"><a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"150%\"></a></td>

<td colspan=\"1\"><a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"150%\"></a></td>
<td colspan=\"1\"><a href=\"admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"40%\"></a></td>
</tr></table></div></form></tr></td></table>	
			"; 	
		}
		
		else {			
		echo "<div class=\"table-responsive, ex2\" style=\"border:none; width:100%;\">
		<table class=\"table, ex2\" style=\"border:none; min-height:50px; width:100%;\"><tr><td>
		<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" >
		<div class=\"table-responsive, ex2\" style=\"min-height:50px; min-width:100px;\">			
			<table class=\"table, ex2\" style=\"border:none; min-height:50px; min-width:100px;\">
<tr colspan=\"29\">
<td colspan=\"20\"><img src=\"../image/transparent.png\"></td>			
<a href=\"\" ><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><td colspan=\"1\"><label for=\"choixlangue1\"><img src=\"../image/fr.png\" width=\"100%\"></td></a>
<a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><td colspan=\"1\"><label for=\"choixlangue2\"><img src=\"../image/en.png\" width=\"100%\"></td></a>		
	<td colspan=\"1\"><a href=\"admin.php \" ><img src=\"../image/cadenasp.png\" width=\"100%\"></a></td>
	</tr></table></div></form></td></tr></table>
		";
		}				
	echo"</div>";	



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

 </div>
 </div>";
 
?>