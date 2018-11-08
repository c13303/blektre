<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 
requete('UPDATE `players` SET life=life-30 WHERE nom = "'.$nom.'" LIMIT 1;');
in_log($nom, "Vous vous êtes fait bouffer les couilles par le chien de Josiane", "aie");
 ?>
<div id="texte">
 C'est alors que son sale cl&eacute;bard descend les escaliers &agrave; toute berzingue et vous bouffe la bite. Vous vous enfuyez avec ce qu'ils vous reste de boules.

  <?php 
   $m1="Aie, putain, merde !";
$v1="paris/_street/streetnord";

  $_SESSION['flashsene']='chezjosiane_pissemort';
    ?>



</p></form>
 
<?php 
$opt1=check_point($id,'fumejosiane');
if($opt1)
{
$opt1='deadjosie';
}


$present=player_present($nom,$place);
$present=$present['nom'];
 ?>

 
























