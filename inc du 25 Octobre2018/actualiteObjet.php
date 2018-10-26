
<?php	
include("connect.php");	
//requete...on recupères toutes les variables.	
	$sql ='SELECT DISTINCT evenements.id_evenement, jour_evenement, jour_fin_evenement, mois_evenement, mois_fin_evenement, annee_evenement, annee_fin_evenement, titre_evenement, contenu_evenement, Nomfichier, lienweb, Nomlogo FROM calendrier join evenements on(calendrier.id_evenement=evenements.id_evenement) WHERE evenements.affiche=1 GROUP BY evenements.id_evenement ORDER BY jour_fin_evenement AND mois_fin_evenement DESC';	
	$query=mysqli_query($link, $sql) or die("Une requête a échouée.");
	//tableau des mois en lang choisie...

	$num_rows = mysqli_num_rows($query);
	//echo "nombre de ligne: ".$num_rows;  pour le developpement
	if($_SESSION['lang']==fr){
 $m=array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
 //echo "langue francaise";//developpemnent
 }
 else if($_SESSION['lang']==en){
$m=array("","January", "February","March","April","May","June","July","August","September","October","November","December");
//echo "langue englaise";// pour le dev...
}

//afficher tous les evenements :
	while($row=mysqli_fetch_array($query)){

		// important :à tester...avec ou sans webpromoteur, logo..., doc,...
	
		// année différente, on affiche du jj/mm/aaaa au jj/mm/aaaa 
		if($row[5]!=$row[6]){
		
		echo "<div class=\"table-responsive, ex2\" style=\"width:46%;  margin:2%; height:250px; \" >
		<table class=\"table-responsive, ex2\" style=\" float:left; border:none;\">";
		//les premières lignes :
			if(($row[11])&&($row[10])){
			echo"<tr colspan=\"15\">			
			<td clospan=\"1\"><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"100%\"; height=\"30px;\" title=\"pour en savoir plus sur le promoteur\" alt=\"pour en savoir plus\" /></a></td>
			<!--ligne date : -->
			<td style=\" background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>			
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			</tr>";	
			}
			if(($row[11])&&($row[10]==NULL)){
			echo"<tr colspan=\"15\" >			
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"100%\"; height=\"40px;\" title=\"pour en savoir plus sur le promoteur\" alt=\"pour en savoir plus\" /></a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>			
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			</tr>";
			}

			else if((!$row[11])&&($row[10]!=NULL)){		
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\">lien</a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if((!$row[11])&&($row[10]==NULL)){		
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\">lien</a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".$row[5]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
		//les lignes suivante avec détails
			if($row[9]!=NULL){ 
			echo"<tr colspan=\"15\" style=\"height:200px;\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:#ffad33;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"Documents\" alt=\"Documents\" height=\"auto\"; float=\"left\"; ></a></td>
			<td style=\"background-color:white; \" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</table></div>";
			}
			if($row[9]==NULL){ 
			echo"<tr colspan=\"15\" style=\"height:200px;\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:#ffad33;\"  colspan=\"3\"></td>
			<td style=\"background-color:white; \" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</table></div>";
			}
	echo"<br>";			
		}
		
		//mois different et annee identique, j'affiche : du jj/mm au jj/mm/aaaa

	
		else if(($row[3]!=$row[4])&&($row[5]==$row[6])){

		echo "<div class=\"table-responsive, ex2\" style=\"width:46%; margin:2%; height:250px; \" >
		<table class=\"table-responsive, ex2\" style=\" border:none; float:left;\">";
		
		//les premières lignes :
			if(($row[11])&&($row[10])){
			echo"<tr colspan=\"15\">			
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:50px; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"100%\"; height=\"40px;\" title=\"pour en savoir plus sur le promoteur\" alt=\"pour en savoir plus\" /></a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>
			
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			</tr>";
			}
			else if(($row[11])&&(!$row[10])){		
			echo"<tr colspan=\"15\" >
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:80px;\"  colspan=\"3\"></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			";
			}

			else if((!$row[11])&&(!$row[10])){		
			echo"<tr colspan=\"15\" >
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:80px;\"  colspan=\"3\">rien</td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			";
			}
			else if((!$row[11])&&($row[10])){		
			echo"<tr colspan=\"15\" >
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:80px;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\">lien</a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".$m["$row[3]"]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			";
			}
		//les lignes suivante avec détails
			if($row[9]){ 
			echo"<tr colspan=\"15\" style=\"height:200px;\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:#ffad33;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"Documents\" alt=\"Documents\" height=\"auto\"; float=\"left\"; ></a></td>
			<td style=\"background-color:white; \" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</tr></table></div>";
			}
			
				else if(!$row[9]){ 
			echo"<tr colspan=\"15\"  style=\"height:200px;\">
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			<td style=\"background-color:#ffad33;\"  colspan=\"3\">rien</td>
			<td style=\"background-color:white; \" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
		echo"<br>";	
	}

		// seul le jour est different on affiche du jj au jj/mm/aaaa (ainsi les deux jour sont afficher et le mois et l'année n'est pas repété.
		/*à teste le 8 Juin 2018*/		
		else if(($row[1]!=$row[2])&&($row[3]==$row[4])&&($row[5]==$row[6])){		
		echo "<div class=\"table-responsive, ex2\" style=\"width:46%; margin:2%;  height:250px; float:left;\" >
		<table class=\"table-responsive, ex2\" style=\" border:none;\">";
		//en dev..
			if(($row[11])&&($row[10])){
			echo"<tr colspan=\"15\">			
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:50px; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"100%\"; height=\"80px;\" title=\"pour en savoir plus sur le promoteur\" alt=\"pour en savoir plus\" /></a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			</tr>";
			}
			else if(($row[11])&&(!$row[10])){		
			echo"<tr colspan=\"15\" style=\"height:50px;\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:80px;\"  colspan=\"3\"><a  style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"100%\"; height=\"80px;\" title=\"pour en savoir plus sur le promoteur\" alt=\"pour en savoir plus\" /></a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]."".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			";
			}

			else if((!$row[11])&&(!$row[10])){		
			echo"<tr colspan=\"15\" style=\"height:50px;\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\">rien</td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]."".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			";
			}
			else if((!$row[11])&&($row[10])){		
			echo"<tr colspan=\"15\" style=\"height:50px;\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\">lien</a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".TXT_Deb." ".$row[1]." ".TXT_Fin." ".$row[2]." ".$m["$row[4]"]." ".row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			";
			}
		
		//les lignes suivante avec détails		
		 if($row[9]!=NULL) {
			echo"<tr colspan=\"15\" style=\"height:200px;\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:#ffad33;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"Documents\" alt=\"Documents\" height=\"auto\"; float=\"left\"; ></a></td>
			<td style=\"background-color:white; \" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</table></div>";
			}
			
			else if($row[9]==NULL){ 
			echo"<tr colspan=\"15\" style=\"height:200px;\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:#ffad33;\"  colspan=\"3\"></td>
			<td style=\"background-color:white; \" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</table></div>";
			}
		//echo"<br>";
	}

		//jour, mois et année identique (évenement d'un jour) une ligne...
	

		else if (($row[1]==$row[2])&&($row[3]==$row[4])&&($row[5]==$row[6])){
		//si logo ou non (et eventuellement lien page web promoteur...)
		//echo "<div class=\"table-responsive,ex2\" style=\"width:48%; margin:2%; height:250px; border:none;\" >
		//<table class=\"table-responsive,ex2\" style=\"border:none;  float:left;\">";
		
			echo "<div class=\"table-responsive, ex2\" style=\"width:46%; margin:2%;  height:250px; float:left;\" >
		<table class=\"table-responsive, ex2\" style=\" border:none;\">";
			
		if(($row[11])&&($row[10])){
		echo"<tr colspan=\"15\">			
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:50px; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\"><img src=\"../html/www/".$row[11]."\" width=\"100%\"; height=\"40px;\" title=\"pour en savoir plus sur le promoteur\" alt=\"pour en savoir plus\" /></a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><h3>" .$row[1]." ".$m["$row[4]"]." ".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			</tr>";
			}
			else if(($row[11])&&(!$row[10])){		
			echo"<tr colspan=\"15\" style=\"height:50px;\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\">lien</a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"11\"><h3>".$row[1]." ".$m["$row[3]"]." ".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td></tr>
			<tr><td>un truc</td></tr>
			";
			}

			else if((!$row[11])&&(!$row[10])){		
			echo"<tr colspan=\"15\" style=\"height:50px;\">
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\">rien</td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".$row[1]." ".$m["$row[3]"]."".$row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td></tr>
			";
			}
			else if((!$row[11])&&($row[10])){		
			echo"<tr colspan=\"15\" style=\"height:50px;\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey; height:50px;\"  colspan=\"3\"><a href=".$row[10]." style=\"color:white;\">lien</a></td>
			<!--ligne date : -->
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><h3>".$row[1]." ".$m["$row[3]"]."  ".row[6]."</td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			";
			}

			if($row[9]!=NULL) {
			echo"<tr colspan=\"15\" style=\"height:200px;\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:#ffad33;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"50%\"; title=\"Documents\" alt=\"Documents\" height=\"auto\"; float=\"left\"; ></a></td>
			<td style=\"background-color:white; \" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</table></div>";
			}
			
			else if($row[9]==NULL){ 
			echo"<tr colspan=\"15\" style=\"height:200px;\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:#ffad33;\"  colspan=\"3\"></td>
			<td style=\"background-color:white;\" colspan=\"10\" style=\"height:200px;\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</table></div>";
			}		
	//echo"<br>";
	} 	
}	

//echo"<div><br><br><div>";
		//compter le nombre de ligne de la BD... $num_rows.
		$i=2;
		if($num_rows<=$i){ 
		//echo"<div><br></div>";
		echo "</div><div><br><br><br><br><br><br><br><br><br><br><br><br><br></div>"; 
		}
		else{
			while($i<$num_rows){
			//echo "coucou:".$num_rows; // pour le developpement...
			echo "</div><div><br><br><br><br></div>"; 
			echo"<div><br><br><br><br><br><br></div>"; //saut de ligne en fonction du nombre d'évenements...
			//echo 2*$i+1; //pour le developpement
			$i=(2*$i);
			}			
	}
	
	mysqli_close($link);
?>
