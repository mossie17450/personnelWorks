<?php
//transmition par post des variables nececaire pour l'update.
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev'); // bd distante...
	if (!$link) {
		die('Impossible de se connecter : ' . mysql_error());
				}

echo "<br> le post, nouvel expert :".$_POST['newnomExpertise']."!!!<br>";
$newnomExpertise=$_POST['newnomExpertise'];
echo "<br>l'identifiant :".$_POST['idExpertise']."<br>";
echo "<br>l'identifiantR :".$_POST['idResponsable']."<br>";
$idExpertise=$_POST['idExpertise'];
echo "<br>".$idExpertise;
$idR=$_POST['idResponsable'];
echo "<br>".$idR;
$nomR=$_POST['newnomR'];

$sql3="UPDATE Expertise SET Expertise.nomExpertise = '".$newnomExpertise."'  WHERE Expertise.idExpertise = ".$idExpertise." ";
$req3 = mysqli_query($link,$sql3) or die ("Erreur SQL 0!<br>".$sql3."<br>".mysqli_error($link));

$sql4="UPDATE personneWCICIT SET personneWCICIT.nom = '".$nomR."' WHERE personneWCICIT.idpersonne = ".$idR." ";
$req4 = mysqli_query($link,$sql4) or die ("Erreur SQL 0!<br>".$sql4."<br>".mysqli_error($link));
 echo"<br>fin de la requete 4";
?>
<!--<label style="margin-left:10%;"><?php// echo "expertise selectionnée: "//.$_POST['expertise'] ; ?></label>
<form method="post" name="insert" action="expertExpertiseU.php">
<label style="margin-left:10%;">nom de l'expertise</label><input type="text" name="nomExpertise" value="<?php// echo $nomExpertise; ?>" ><br/>
<hr>
<input type="submit" value="OK" name="OK"/>
</form>

montrer les modifications faites !!!
-->