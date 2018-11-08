<?php  $action3='place="chez maman"';
 require("include/panel.php");
 
 $hapen=$_SESSION['hapen'];
 
 
 
  
 $verif='SELECT * FROM players ORDER BY best DESC;';
  $req=requete($verif);
 
 
 
 ?><div id="texte">
  <p>Vous attrapez une part de gateau en bousculant <b><?php echo $hapen; ?></b> qui renverse son chocolat chaud. Il se met à geindre, alors, pour ne pas alerter votre maman, vous lui faites bouffer son mug tandis qu'il change de couleur. 

  <p>	
    <?php
	$endroit="chez maman";
	require('pages/sp/fumage.php');
	
	
	
	
	
	
      $m1="Je vais au salon rassurer maman ";
$v1="paris/maman/chezmaman_salon";
$m2="Je vais jouer dans ma chambre, me calmer les nerfs";
$v2="paris/maman/chezmaman_chambre";
$m3="Je met tire, j'en ai assez vu";
$v3="paris/_street/street";

    ?>
    

    
   
<?php  ?>

 
























