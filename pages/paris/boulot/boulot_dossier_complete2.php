<?php




 $action1='';
$action3='';


require("include/panel.php"); 


$patron=check_special('patron');
 ?>
<div id="texte">
  <p>Le patron <?php echo $patron ?> tire nerveusement sur sa cigarette. </p>
  
  <?php
  
  

$stagiaire=check_special('stagiaire');
if ($nom==check_special('directeur'))
{
echo "<br>Vous remarquez le dossier Henri qui traine sous une pile de paperasse sur le bureau. 
<p>-H� mais, c'est le dossier Henri, celui qui nous a fait perdre le contrat avec les Am�ricains! 200 personnes licenci�es � cause de cette historie ! Vous avez menti !</p>
<p>Le patron se jette sur la pile, mais vous avez d�j� saisi le dossier.</p>
<p>-  ... Les actionnaires seraient surement surpris de savoir qu'en fait il �tait juste cach� dans le bordel de votre bureau, dites vous d'un air narquois. Le patron ".$patron." avale sa salive avec difficult�.</p><p>- J...je ... </p><p>- Vous avez commis un crime ! Vous meritez la taule ! hurlez vous.</p>
<p>Le boss est au bord des larmes.</p>

";
 
 
 
 $m1="Je lui propose de me laisser sa place pour taire la chose";
$v1="paris/boulot/boulot_BETHEBOSS";
$m2="En toute vraisemblance, il se fout de ma gueule et je le fume";
$v2="paris/boulot/bureaubossfume";
$_SESSION['flashsene']='patron_chiale';

}
  
  else{
  
  echo "Il regarde avec beaucoup d'insistance. Puis il vous fait ses yeux de biche. Puis enfin, il vous f�licite sur votre travail et vous lache un billet de 100 balles, en disant que c'est ce qu'on attend d'un petit employ� comme vous.
    ";
  in_log($nom,"Vous faites de la l�che au patron","pd");
  in_point($id,"dragueboss");
  update_stat($nom,'money','+100');
  
  
   $m1="Je retourne dans mon bureau";
$v1="paris/boulot/bureau";
$m2="En toute vraisemblance, il se fout de ma gueule et je le fume";
$v2="paris/boulot/bureaubossfume";
  $_SESSION['flashsene']='patron';
  }
  
  

 
// chouicess
  
  
  
  
    ?>

 
<?php 


$perso2=check_special('patron');
 ?>



 














