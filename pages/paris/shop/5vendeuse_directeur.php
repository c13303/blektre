<?php 


 include("include/panel.php"); 

$hapen=check_special('directeur');


?>
<div id="texte">



<?php
$top=check_special($nom,'top');


if ($sex>2000 && $nom!=$top)
{

echo "<p>Monsieur  <b>".$hapen."</b> vous regarde avec un petit air pervers. </p>
<p>- Une promotion ? Vraiment ? Vous savez comment &ccedil;a se passe ...</p>
Il commence � ouvrir sa braguette";

$m1="Je le suce de fa�on docile";
$v1="paris/shop/5promotion3";

}
else
{
echo "- Une promotion ? Ecoutez .. Je vous en ai d�j� donn� une. C'est pas que vous n'�tes plus mon genre.. Mais .. Ca se m�rite. Vous comprendez ? Essayez de susciter un peu plus l'envie.
<br> d�clare-t-il d'un air snob.";



}

$m2="Je le fume";
$v2="paris/shop/5bordel";
$m3="Je veux d�missionner";
$v3="paris/shop/5demission"; 
$m5="Je sors";
$v5=$retour; 

$_SESSION['flashsene']='face';
 
 
?>