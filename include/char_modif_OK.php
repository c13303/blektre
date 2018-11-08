<?php
 require("variables.php"); 
 require("include/panel.php");
 $bio=clean($_POST['entree2']);
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
require('include/go.php');
?>


</div>
