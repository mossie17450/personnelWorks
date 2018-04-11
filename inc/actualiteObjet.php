<?php

echo"
<html>
<head>
<!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">-->
</head>
<body>";

?>
<?php

include("connect.php");
	
//requete...on recupères toutes les variables.	
	$sql ='SELECT DISTINCT evenements.id_evenement, jour_evenement, jour_fin_evenement, mois_evenement, mois_fin_evenement, annee_evenement, annee_fin_evenement, titre_evenement, contenu_evenement, Nomfichier, lienweb FROM calendrier join evenements on(calendrier.id_evenement=evenements.id_evenement) GROUP BY evenements.id_evenement ';	
	$query=mysqli_query($link, $sql) or die("Une requête a échouée.");
	//tableau des mois en lang choisie...
	$num_rows = mysqli_num_rows($query);
	//echo "nombre de ligne: ".$num_rows;  pour le developpement
	if($_SESSION['lang']==fr){
 $m=array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Septembre","Octobre","Novembre","Décembre");
 //echo "langue francaise";//developpemnent
 }
 else if($_SESSION['lang']==en){
$m=array("","January", "February","March","April","May","June","July","September","October","November","December");
//echo "langue englaise";// pour le dev...
}

//afficher tous les evenements :
		while($row=mysqli_fetch_array($query)){
		//echo"quelque chose!!!!";
		
		
		if(($row[5]!=$row[6]))  //années de l'évenement différents, on affiche toutes la date : du jj/mm/aaaa au jj/mm/aaaa
		{
		//echo"annee differentes...<br>"; //pour le develloppement...
		echo "<div class=\"ex2\" style=\"margin-top:2%;\" >		
		<table class=\"table-responsive, ex2\" style=\"width:50%; float:left;  borders:none; margin-top:2%; \">
		<tr colspan=\"15\">
		<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->		
		<td style=\"background-color:orange;\" colspan=\"3\"><h3>du ".$row[1]."<br>".$m["$row[3]"]."<br>".$row[5]."<br>au ".$row[2]."<br>".$m["$row[4]"]."<br>".$row[6]."</td>
		<td style=\"background-color:#F0F7D4; \" colspan=\"10\"><h6 style=\"text-align:center;\"><strong>".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
		<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
		</tr>";
			//condidition sur la presence ou non de fichier attaché ou lien vers le promoteur de l'événement.
			if(($row[10]!=NULL)&&($row[9]!=NULL)){ 
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"11\"><a href=".$row[10]." style=\"color:white;\"><h6>lien web vers l'éditeur de l'événement</h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if(($row[10]==NULL)&&($row[9]!=NULL)){ 
		
			echo"<tr colspan=\"15\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6></h6></a></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table>
			</div>"; 
			
			//echo $row[9]."<br>";
			}
			else if(($row[10]!=NULL)&&($row[9]==NULL)){ 
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a><h6></h6></a></td><td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"11\"><a href=".$row[10]." style=\"color:white;\"><h6>lien web vers l'éditeur de l'événement</h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			</tr>
			</table></div>";
			}
			else if(($row[10]==NULL)&&($row[9]==NULL)){ 
			
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a><h6><br><br></h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a  style=\"color:white;\"><h6><br><br></h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td>
			</tr></table></div>";
			}	
				
			//	echo $row[9]." un truc!!!<br>";
		}
		
		//jour different(on s'enfiche...)  mois different et meme année, on affiche du jj/mm au jj/mm/aaaa , seul l'anné n'est pas repet 
		else if(($row[3]!=$row[4])&&($row[5]==$row[6])){
		echo "<div class=\"table-responsive, ex2\" style=\"margin-top:2%;\">
		<table class=\"table-responsive, ex2\" style=\"width:50%; float:left; border:none; margin-top:2%; \" >
		<tr colspan=\"15\">
		<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
		<td style=\"background-color:orange;\" colspan=\"3\"><h3> du ".$row[1]."<br>".$m["$row[3]"]."<br>au ".$row[2]."<br>".$m["$row[4]"]."<br>".$row[6]."<br><br>  </td>
		<td style=\"background-color:#F0F7D4; \" colspan=\"10\"><h6 style=\"text-align:center;\"><strong>".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
		<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
		</tr>";	
		
			if(($row[10]!=NULL)&&($row[9]!=NULL)) {
			echo"<tr colspan=\"15\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6>lien web vers l'éditeur de l'événement</h6></a></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if(($row[10]==NULL)&&($row[9]!=NULL)){ 
			echo"<tr colspan=\"15\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger?!</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6></h6></a></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if(($row[10]!=NULL)&&($row[9]==NULL)){ 
			echo"<tr colspan=\"15\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a \" style=\"color:white; \"><h6></h6></a></td>
			<td style=\"background-color:#005580; color:white;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6></h6></a></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}	
			else if(($row[10]==NULL)&&($row[9]==NULL)){ 
			echo"<tr colspan=\"15\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a  style=\"color:white; \"><h6><br><br></h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a  style=\"color:white;\"><h6><br><br></h6></a></td>   
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
		}
		
	
		// seul le jour est different on affiche du jj au jj/mm/aaaa (ainsi les deux jour sont afficher et le mois et l'année n'est pas repété.
		else if(($row[1]!=$row[2])&&($row[3]==$row[4])&&($row[5]==$row[6])){
		echo "<div class=\"table-responsive, ex2\" style=\"margin-top:2%;\">
		<table class=\"table-responsive, ex2\" style=\"width:50%; float:left; border:none; margin-top:2%; \">	
		<tr colspan=\"15\">
		<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
		<td style=\"background-color:orange;\" colspan=\"3\"><h3> du ".$row[1]."<br> au ".$row[2]."<br>".$m["$row[4]"]."<br>".$row[6]."<br><br><br></td>
		<td style=\"background-color:#F0F7D4; \" colspan=\"10\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><h6>".$row[8]."</h6></td>
		<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
		</tr>";
		
			if(($row[10]!=NULL)&&($row[9]!=NULL)){ 
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6>lien web vers l'éditeur de l'événement</h6></a></td><td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td></tr>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			</table></div>";
			}
			else if(($row[10]==NULL)&&($row[9]!=NULL)) {
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>	<!--du blanc: un espace	-->
			<td style=\"background-color:grey;\" colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger!!".$row[9]."</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6>  </h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:2%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if(($row[10]!=NULL)&&($row[9]==NULL)){ 
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><h6></h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6>lien web vers l'éditeur de l'événement</h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if(($row[10]==NULL)&&($row[9]==NULL)) {
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a  style=\"color:white; \"><h6><br><br></h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a  style=\"color:white;\"><h6><br><br></h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
		}
	
		//jour, mois et année identique (évenement d'un jour) une ligne...	
		else if (($row[1]==$row[2])&&($row[3]==$row[4])&&($row[5]==$row[6])){
		echo "<div class=\" ex2\" style=\"margin-top:2%;\" >
		<table class=\"table-responsive, ex2\" style=\"width:50%; float:left; margin-top:2%; border:none; \">		
		<tr colspan=\"15\">
		<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td><!-- espace blanc à gauche-->
		<td style=\"background-color:orange;\" style=\"width:20%;\" colspan=\"3\"><h3>".$row[1]."<br>".$m["$row[3]"]."<br>".$row[5]."<br><br><br><br></td>
		<td style=\"background-color: #F0F7D4; style=\"width:80%;\" colspan=\"10\"><h6 style=\"text-align:center;\"><strong >".$row[7]."</strong></h6><br><h6>".$row[8]."</h6></td>
		<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td> <!--  espace blanc à droite -->
		</tr>";
		// conditions sur presence ou non de fichier attaché à l'actu ($row[9]) et lien vers le promoteur de l'événement ($row[10])... 
			if(($row[10]!=NULL)&&($row[9]!=NULL)){ //fichier et lien vers promoteur...
			echo" <tr colspan=\"15\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6>lien web vers l'éditeur de l'événement</h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if(($row[10]==NULL)&&($row[9]!=NULL)){
			echo"<tr colspan=\"15\">
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><img src=\"../image/logos/telechargement.png\" width=\"20%\"; title=\"Telechargement\" alt=\"Telechargement\" height=\"auto\"; float=\"left\"; ><h6>à télécharger</h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6></h6></a></td>
			<td colspan=\"1\"><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			</tr></table></div>";
			}
			else if(($row[10]!=NULL)&&($row[9]==NULL)){ 
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]."\" style=\"color:white; \"><h6></h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6>lien web vers l'éditeur de l'événement</h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
			else if(($row[10]==NULL)&&($row[9]==NULL)){ 
			echo"<tr colspan=\"15\">
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td>
			<td style=\"background-color:grey;\"  colspan=\"3\"><a href=\"www/".$row[9]." \" style=\"color:white; \"><h6><br><br></h6></a></td>
			<td style=\"background-color:#005580; color:white;\" style=\"background-color:#005580; color:#005580;\" colspan=\"10\"><a href=".$row[10]." style=\"color:white;\"><h6><br><br></h6></a></td>
			<td><img src=\"../image/blanc.png\" style=\"width:1%; height:10%; borders:none;\"></td></tr>
			</table></div>";
			}
		
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
			echo "</div><div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>"; 
			echo"<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>"; //saut de ligne en fonction du nombre d'évenements...
			//echo 2*$i+1; //pour le developpement
			$i=(2*$i);
			//echo $num_rows."<br>";
			//echo $i."<br>";
			}
	}
	
mysqli_close($link);



?>