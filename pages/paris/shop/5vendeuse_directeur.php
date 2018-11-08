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
Il commence à ouvrir sa braguette";

$m1="Je le suce de façon docile";
$v1="paris/shop/5promotion3";

}
else
{
echo "- Une promotion ? Ecoutez .. Je vous en ai déjà donné une. C'est pas que vous n'êtes plus mon genre.. Mais .. Ca se mérite. Vous comprendez ? Essayez de susciter un peu plus l'envie.
<br> déclare-t-il d'un air snob.";



}

$m2="Je le fume";
$v2="paris/shop/5bordel";
$m3="Je veux démissionner";
$v3="paris/shop/5demission"; 
$m5="Je sors";
$v5=$retour; 

$_SESSION['flashsene']='face';
 
 
?>