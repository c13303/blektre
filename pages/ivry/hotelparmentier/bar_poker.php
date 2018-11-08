
<?php


include("include/panel.php"); 


$poker=check_special('poker');
$mise=check_title('poker');

?>

<div id="texte">

<?php
if($nom!=$poker)
{
echo "<p>La salle est enfum&eacute;e et vous toussez comme un impoli, perdant toute classe au milieu de ces gens bien habill&eacute;s avec leurs surv&ecirc;tements blancs immacul&eacute;s. Malgr&eacute; tout, on tol&egrave;re votre pr&eacute;sence.</p>
<p>Au fond se trouve une table ou se d&eacute;roule une partie de Poker endiabl&eacute;e. </p>";
$m3="Je rejoint la partie de Poker";
$v3="ivry/hotelparmentier/bar_poker2"; 
}
else
{
echo "<p>En tant que champion de Poker, vous avez un croupier qui joue à votre place. Vous regardez la table de jeu d'un oeil bienveillant. La mise est pour l'instant de ".$mise." euros et si le joueur perd face au croupier, tout ira dans votre poche.</p>";
}
?>


<p>
  <?php

 if ($present)
 {
 echo $present." joue comme un gros con, il est vraiment ridicule, mais toutefois il a l'air d'avoir du fric.";
 $hapen=$present;
 
 }



$m4="Je retourne boire un verre";
$v4="ivry/hotelparmentier/bar_verre"; 

   
$m5="Je me tire";
$v5=$_SESSION['rue']; 




$_SESSION['flashsene']='poker';
$perso3=$poker;
if($hapen!=$perso3)$perso2=$hapen;

 ?>
  
  
</p>
