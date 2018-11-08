
<?php

 $action1='place ="Black bar"';
$action2='retour="paris/blackbar/bar"';
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');

$drogue=check_rank('dealer');
$drogue=$drogue['title'];

?>

<div id="texte">

  <p><?php echo $dj; ?> vous emmène dans sa backroom et vous prépare un de ces cocktails de la mort à base de Viandox. Vous vous forcez à boire en déglutissant beaucoup et souriez de manière très fausse.</p>
  <p>Il sort quelques vinyles et vous les montre, et vous n'en avez rien &agrave; foutre, mais voil&agrave; qu'il sort un micro et vous demande de chanter.</p>
  <p>- Quel est le titre de ton morceau, baby ?</p>
  <p>&nbsp; </p>
  <p>    
    <?php

$entree="Nique la police";

$hapen=$dj;
$m2="Ouais! Je veux chanter ça";
$v2="paris/blackbar/bar_tube2";    
$m4="Je le fume sa mere";
$v4="sp/fume"; 


$_SESSION['flashsene']='bar_tube';


    ?>
  </p>
 


 
