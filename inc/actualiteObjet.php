
<?php

	if($_SESSION['lang']==fr){
	$m=array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
	//echo "langue francaise";//developpemnent
	$pageE="pour en savoir + ";
	$docs="Documents";
	}
	else if($_SESSION['lang']==en){
	$m=array("","January", "February","March","April","May","June","July","August","September","October","November","December");
	//echo "langue englaise";// pour le dev...
	$docs="Files";
	$pageE="to know more ";
	}

		// année différente, on affiche du jj/mm/aaaa au jj/mm/aaaa 
		if($row[5]!=$row[6]){
			//ligne suivante à remplacer par du bootstraps
		//echo "<table class=\"table-responsive, ex2\" style=\" width:96%; float:left; border:none;margin:2%;height:250px;\">";
		
		
		echo"<div class=\"container-fluid\" style=\"margin-left:5%;\" >";		
		if(($row[11])&&($row[10])){
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</div>			
			</div>";	
			}

			if(($row[11])&& (!$row[10])){
			echo"
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a style=\"color:white;\"> <img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</div>			
			</div>";
		
			}

			else if((!$row[11])&&($row[10])){
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\">".$pageE."</a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</div>			
			</div>";	
			}
	
			else if((!$row[11])&& (!$row[10])){
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			</div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</div>			
			</div>";
			}
			
		//les lignes suivante avec détails, telechargements
		
			if($row[9]!=NULL) {
			echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			<a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"".$docs."\" alt=\"".$docs."\" height=\"auto\"; float=\"left\"; ></a>
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }		
			
			else if($row[9]==NULL){ 
				echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }
					
	echo"<br>";			
		}
		
		//mois different et annee identique, j'affiche : du jj/mm au jj/mm/aaaa	
		else if(($row[3]!=$row[4])&&($row[5]==$row[6])){
		//echo"<table class=\"table-responsive, ex2\" style=\"width:96%; border:none; float:left;\">";
		echo"<div class=\"container-fluid\" style=\"margin-left:5%;\" >";	
		//les premières lignes :
			if(($row[11])&&($row[10])){
				echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br>
			<h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";	
			}
				
			else if(($row[11])&&(!$row[10])){		
			echo"<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br>
			<h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";
			}

		
			
			else if((!$row[11])&&(!$row[10])){		
			echo"<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			</div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br>
			<h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";
			
			}
			
			else if((!$row[11])&&($row[10])){		
			echo"<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\">".$pageE."</a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br>
			<h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".row[6]."<br/><br/>
			</div></div>
			";		
			}
		//les lignes suivante avec détails
		
		 if(!$row[9]) {
			echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }
			
			else if($row[9]){ 
			echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			<a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"".$docs."\" alt=\"".$docs."\" height=\"auto\"; float=\"left\"; ></a>
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }	

		echo"<br>";	
	}

		// seul le jour est different on affiche du jj au jj/mm/aaaa (ainsi les deux jour sont afficher et le mois et l'année n'est pas repété.	
		else if(($row[1]!=$row[2])&&($row[3]==$row[4])&&($row[5]==$row[6])){			
			echo"<div class=\"container-fluid\" style=\"margin-left:5%;\" >";	
			if(($row[11])&&($row[10])){
				
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";	
			}
			
			else if(($row[11])&&(!$row[10])){		
			//echo"<tr colspan=\"15\" style=\"height:50px;\">
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\"><a>
			<img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>			
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]."".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</div>
			</div>
			";
			}

			else if((!$row[11])&&(!$row[10])){		
			echo"<div class=\"row\" style=\"height:50px;\">
			<div class=\"col-2\" style=\"background-color:grey;\">
			</div>
			
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";
			}
		
			else if((!$row[11])&&($row[10])){
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\">".$pageE."</a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".TXT_Deb." ".$row[1]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";			
			}
		
		//les lignes suivantes avec détails	en bootstraps:			
			 if($row[9]==NULL) {
			echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }
			
			else if($row[9]!=NULL){ 
			echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			<a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"".$docs."\" alt=\"".$docs."\" height=\"auto\"; float=\"left\"; ></a>
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }			 
		echo"<br>";
	}

	
	
		//jour, mois et année identique (évenement d'un jour) une ligne:
		else if (($row[1]==$row[2])&&($row[3]==$row[4])&&($row[5]==$row[6])){
		
		echo"<div class=\"container-fluid\" style=\"margin-left:5%;\" >";		
		if(($row[11])&&($row[10])){
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".$row[1]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";	
			}
			
			else if(($row[11])&& (!$row[10])){		
			//echo"<tr colspan=\"15\" style=\"height:50px;\">
			echo"		
			<div class=\"row\" style=\"height:50px;\"><a><div class=\"col-2\" style=\"background-color:grey;\">
			<img src=\"../html/www/".$row[11]."\" width=\"120%\"; height=\"auto;\" title=\"".$pageE."\" alt=\"".$pageE."\" /></a></div>			
			<!--ligne date : -->
			<div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".$row[1]." ".$m["$row[4]"]." ".$row[6]."</div>
			</div>
			";
			}

			else if((!$row[11])&&(!$row[10])){		
			echo"<div class=\"row\" style=\"height:50px;\">
			<div class=\"col-2\" style=\"background-color:grey;\"><!-- pas de lien sur une page web --></div>			
			<!--ligne date : -->
			<div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".$row[1]." ".$m["$row[4]"]." ".$row[6]."</div></div>";
			}

			else if((!$row[11])&&($row[10])){
			echo"		
			<div class=\"row\" style=\"height:50px;\"><div class=\"col-2\" style=\"background-color:grey;\">
			<a href=".$row[10]." style=\"color:white;\"></a></div>
			<!--ligne date : -->
			<br><div class=\"col-8\" style=\"background-color:#005580; color:white;\"><br><h3>".$row[1]." ".$m["$row[4]"]." ".$row[6]."<br><br></div>		
			</div>";			
			}

			if($row[9]) {
			echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			<a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"".$docs."\" alt=\"".$docs."\" height=\"auto\"; float=\"left\"; ></a>
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }		
			
			else if(!$row[9]){ 
				echo"		
			<div class=\"row\"><div class=\"col-2\" style=\"background-color:#ffad33;\">
			</div>
			<div class=\"col-8\" style=\"background-color:white;height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6>
			</div>
			</div></div>";
			 }
					
	echo"<br>";

	} 	
	


?>
