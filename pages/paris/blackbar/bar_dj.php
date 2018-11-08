
<?php

 $action1='place ="Black bar"';
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$dj=check_special('tube');

$drogue=check_rank('dealer');
$drogue=$drogue['title'];
$_SESSION['flashsene']='bar_dj';
?>

<div id="texte">

  <p><?php echo $dj; ?> est concentr&eacute; aux platines. Il sue à grosses gouttes, suinte et pue.</p>

    <?php


 if ($frakass>50)
 {
 echo "<br><br>Vous êtes tellement défoncé que ".$dj." se sent en confiance avec vous. Deux ou trois vannes plus tard, vous lui payez une latte et devenez potes. ";
 echo "<br><br>- Hey, t'es super groovy tu sais, je pourrais te produire";
 $m1="Ouais, putain, classe !";
 $v1="paris/blackbar/bar_tube";


 
 }
 if ($frakass<51)
 {
 echo "<br><br>Le Dj vous regarde avec un air méprisant. Peut être est ce à cause de votre air constipé ?  ";

 }




$m2="Je vais boire un verre";
$v2="paris/blackbar/bar_verre";    
$m4="Je me tire";
$v4=$_SESSION['rue']; 





    ?>
  </p>
 
<?php 
$perso3=$dj;
 ?>

 
