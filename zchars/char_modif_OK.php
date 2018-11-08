<?php
require('panel_account.php');
 $bio=$_POST['entree2'];
 $bio=clean($bio);
 requete('UPDATE bio SET bio="'.$bio.'" WHERE id_player='.$id.';');
 
?>

<div id="texte">
Bio mise e jour.

<?php
echo '<br><br>"'.$bio.'"';
$entree2='';
  $m1="Groovy.";
$v1="check_account2";

$nom=$noma;

?>


</div>
