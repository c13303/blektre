<?php  $action1='life=100';
$action3='place="zonmai"';
 include("include/panel.php");?><div id="texte"><?php

requete('UPDATE `players` SET life=100 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET karma=0 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET sex=0 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET money=12 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET best=1 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET frakass=0 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET time=0 WHERE nom = "'.$nom.'" LIMIT 1;');
requete('DELETE FROM log WHERE player_name="'.$nom.'";');
$id=get_id($nom);
requete('DELETE FROM checkpoint WHERE id_player="'.$id.'";');
requete('DELETE FROM sac WHERE id_player="'.$id.'";');


in_log($nom,'Vous recommencez une nouvelle vie','');

  $m1="Prêt pour une nouvelle vie";
$v1="paris/1";



    ?>




   
<?php  ?>

 
























