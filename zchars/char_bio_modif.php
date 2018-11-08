<?php
require('panel_account.php');
$bio=mysqli_fetch_assoc(requete('SELECT bio FROM bio WHERE id_player='.$id.';'));
$bio=$bio['bio'];

$entree2=$bio;
if(!$entree2)
{
$entree2='Je pete e tout vent';
requete('
						INSERT INTO bio
						VALUES (
						NULL , '.$id.', "'.$entree2.'"
						)
					;');
}
  $m1="Voilà.";
$v1="char_modif_OK";
$m2="non je rigolais";
$v2="check_account2";


?>