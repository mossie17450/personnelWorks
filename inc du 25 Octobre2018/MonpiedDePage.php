<?php

class piedDePage()
{
/*affiche en bas de la page les liens utiles et des informations techniques sur le site*/

public $lienContact;
public $lienplanDuSite;
public $MentionLégales;

public function affiche(){
echo $lienContact."|".$lienplanDuSite."|".$MentionLégales;
}

}


$monPiedDePage=new piedDePage();
$monPiedDePage->$lienContact="mes Contacts";
$monPiedDePage->$lienplanDuSite="plan du site";
$monPiedDePage->$MentionLégales="quelques mentions";

$monPiedDePage->affiche();


?>