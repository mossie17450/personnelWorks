
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

	    if ( !(preg_match('#194.167.179.10#', get_ip())) ) // || (preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || (preg_match('#fe80::8eb:d45:23f4:5142#', $ip))) )


	{ 

// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"../index.php". 

		"\">RETOUR</a></body></html>"; 
//retourd à la page d'acceuil du site...


       	 exit; } 


require('fpdf.php');
if(isset($_POST['idListeContactes'])){ 
//echo "idcontact :".$_POST['idListeContactes'];
$i=$_POST['idListeContactes'];
//echo $i."!!!";
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');
//echo"coucou1";
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}



// voire testePDF...
$req="SELECT * FROM contact ";
$req2="SELECT max(idContact) FROM contact ";
$contactes = mysqli_query($link, $req);
$nbreContactes = mysqli_query($link, $req2);

while($row = mysqli_fetch_array($contactes,MYSQLI_BOTH)) {
		
			

       $id = $row["idContact"];
		//echo $id."<br>";
        $nom= $row["Nom"];
		//echo $nom."<br>";
        $prenom = $row["Prenom"];
		//$email=$row['email'];
		$message=$row['message'];
		$date=$row['date'];
		//echo $date."<br>";
		





// classe étendue pour créer en-tête et pied de page
class PDF extends FPDF
{
// en-tête
function Header()
{
    //Police Arial gras 15
    $this->SetFont('Arial','B',14);
    //Décalage à droite
    $this->Cell(80);
    //Titre
    $this->Cell(30,10,'liste des contacts en PDF',0,0,'C');
	
    //Saut de ligne
    $this->Ln(20);
}

// pied de page
function Footer()
{
    //Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    //Police Arial italique 8
    $this->SetFont('Arial','I',8);
    //Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// création du pdf

$pdf=new PDF();
$pdf->SetAuthor('moi');
$pdf->SetTitle('contact CV');
$pdf->SetSubject('création de fichier PDF');
$pdf->SetCreator('fpdf_cic-it_bordeaux');
$pdf->AliasNBPages();
$pdf->AddPage();


        // titre en gras
		$pdf->SetFont('Arial','B',10);
        $pdf->Write(5,'Le ');
		$pdf->SetFont('Arial','',10);  
		$pdf->Write(5,$date);
		
		$pdf->SetFont('Arial','B',10);
        $pdf->Write(5,', contact num');
		$pdf->SetFont('Arial','',10);  
		$pdf->Write(5,$id);
		
		
      $pdf->Ln();
        $pdf->SetFont('Arial','B',10);
        $pdf->Write(5,'Nom :');
		$pdf->Write(5,$nom);
		
        // description
        $pdf->SetFont('Arial','',10);
         $pdf->Write(5,' prenom :');
		$pdf->Write(5,$prenom);
     
		$pdf->SetFont('Arial','',10);
        $pdf->Write(5,' mail : ');
		$pdf->Write(5,$email);
      
	  
	  
        $pdf->Ln();
        $pdf->Ln();
		
		
		$pdf->Output('Liste des contacts.pdf', 'I');
// sortie du fichier
}
}
?>