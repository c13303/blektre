
<?php

 include("include/panel.php"); 
$present=player_present($nom,$place);
$present=$present['nom'];
$entree=$_GET['entree'];$entree=clean($entree);
$hapen=$present;
?>

<div id="texte">
<?php
$_SESSION['flashsene']='4formtaf';
if($entree=='A446')
{
echo "Après avoir bien emmerdé le secretariat, vous finissez par obtenir votre foutu papier! ";
in_log($nom,'Vous obtenez le formulaire pour l`ASSEDIC','Yeah');
in_point($id, 'A446');

}
  else
  {
  echo "Patricia, la secrétaire aigrie, vous regarde d'un air rance.<br>- Je n'ai jamais entendu parler du formulaire ".$entree;
  echo " Vous devriez mieux vous renseigner, mais moi je ne peux plus vous aider.";
  in_log($nom,'Ces histoires de formulaire commencent à vous faire chier','putain');
  in_point($id, 'formchier');
  $m1="Je l'éclate";
$v1="paris/boulot/bureau_schtoss"; 
  }
  

$m3="Je me tire";
$v3="paris/_street/street"; 
 




$entree='';

    ?>
  </p>
 
<?php  ?>

 
