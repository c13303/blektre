
<?php

 include("include/panel.php"); 

$hapen=check_special('clochard');


?>

<div id="texte">
  <p>La cloche vous remercie d'un geste auguste. </p>
  <p>- Ca vous portera chance, m'sieur ! </p>
  <p>
<?php 

set_stat($nom,'karma',$sex);
set_stat($nom,'sex',$karma);
if($money>100)
{
update_stat($nom,'money','-100');
}
else
{
set_stat($nom,'money','0');
}
in_log($nom,$hapen.' le clochard vous a entouré les poulets','karma vs sexe!');
in_log($hapen,'Vous volez 100 balles à '.$nom,'bonne blague');



echo "<br>Vous vous félicitez pour votre B.A. Un peu plus loin, vous vous apercevez que le clochard vous a fait les poches. Vous vous sentez confus, et transformé par cette drôle d'expérience.";
$m1="Je m'eloigne";
$v1=$retour;




    

	 $_SESSION['flashsene']='1gare_mendiant';

    ?>
</p>
 
<?php  ?>

 
