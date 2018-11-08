
<?php

 $action1='place ="Train"';
$action2="retour='paris/voyage/09voyage'";
require("include/panel.php"); 

$hapen=$_SESSION['hapen'];
$endroit="dans le train";
?>

<div id="texte">


  <p>Vous attrapez <b><?php echo $hapen; ?></b> par le col et vous le propulsez par la fenetre. Seulement, celle ci est fermée, et il s'écrase contre le plexiglas.</p>
  <p>&nbsp;</p>

    <?php
	in_log($hapen, "Vous vous faites défoncer par ".$nom." dans le train","loser");
	in_log($nom, "Vous aplatissez ".$hapen." contre la vitre du train", "Bad boy");
	update_stat($nom,"best","+100");
	update_stat($nom,"karma","-100");
	update_stat($hapen,"life","-5");
	set_stat($hapen,"road1",'"défoncé par '.$nom.' dans le train"');
	set_stat($hapen,"place",'"défoncé par '.$nom.' dans le train"');
	
$entree='';
$entree2='';



$m1="Je regarde par la fenetre";
$v1="paris/voyage/09voyage";       






    ?>
  </p>
  </p>
 
<?php  ?>

 
