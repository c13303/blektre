
<?php

 $action1='place ="rue des voyous"';
include("include/panel.php"); 

 $pute=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));
$sexpute=mysqli_fetch_assoc(requete('SELECT sex FROM players WHERE nom="'.$pute['title'].'";'));
$sexpute=$sexpute['sex'];
$blaze=clean($_GET['entree']); 
?>

<div id="texte">

Vous êtes à présent <?php echo $blaze; ?> la pute. <?php echo $mac['player']; ?> vous réclamera de l'argent car il est votre mac.
  <?php

requete('UPDATE `special` SET title="'.$blaze.'" WHERE nom = "prostituee" LIMIT 1;');

    $entree='';
$m1="Je me maquille";
$v1="paris/ruelle/erre";
    

	
	
   


    ?>
</p>
 
<?php 
$perso4=$nom;
$perso3=$mac['player'];

 ?>

 
