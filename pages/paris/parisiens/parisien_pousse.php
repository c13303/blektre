<?php




 $action2='karma=karma+10';
$action3='place="rue des noy�s"';
$bonus1="karma";

require("include/panel.php"); 




$hapen=$_SESSION['hapen'];


 ?>
<div id="texte">
  <p>Vous poussez <b><?php echo $hapen; ?></b> qui tombe � la flotte comme un bouffon en faisant un grotesque "HOoOOOOO" suivi d'un "Plouf" majestueux. Ce gros tas n'a que ce qu'il m�rite. .</p>
  <p>    <?php 
  
  requete('UPDATE players SET place="Vous avez �t� tej � la flotte par '.$nom.'" WHERE nom="'.$hapen.'";');
  in_log($nom, 'Vous avez tej '.$hapen.' � la flotte','100 points');
  in_log($hapen, 'Vous avez �t� tej � la flotte par '.$nom.'','ridicule');
  update_stat($nom, 'karma', '+50');
 update_stat($nom, 'best', '+100');
 set_chara($hapen, 'road1', 'tej � la flotte par '.$nom.'');
  update_stat($hapen, 'karma', '-50');
$m2="J'erre sans but, comme une pauvre &acirc;me en peine";
$v2="paris/ruelle/erre";
$m3="Je me tej' � la flotte aussi";
$v3="paris/suicide/suicide2";
  
    ?>
  
  
    

  </p>
 
<?php  ?>

 




























