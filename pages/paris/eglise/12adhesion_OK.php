<?php 
 // endroit texte


// chemin de retour

//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');
$hapen=$rael;
 ?>
 
<div id="texte">
  <p><?php echo $rael; ?> arbore son plus beau sourire</p>
  <p>- D&eacute;pose tout dans ce panier.</p>
  <p>Vous videz votre portefeuille dans le dit panier, et vous vous sentez alors bien plus léger d'un seul coup.</p>
  <p>
  <?php
  
  	set_stat($nom,'money','0');
	in_log($nom,'Vous donnez tout votre argent au gourou '.$hapen,'Mouton de panurge');
	in_log($hapen, $nom. 'vous donne tout son argent','gourou');
	update_stat($hapen,'money','+'.$money);
  
	if($money<50)
	{
	echo $rael.' fait un peu la grimace en voyant le maigre dividende que vous venez de lacher.<br><br>- Mouais. Merci mon fils. A la prochaine';

	}
	else
	{
	echo $rael." semble satisfait.<br><br>-Vous voila membre de notre secte, cher ami ! Le premier pas vers l'illumination ultime vers laquelle je vais te guider.";
	in_point($id,'secte');

	in_log($nom, "Vous adhérez à l'eglise de Fientologie","suppot de Rael");

	}
	
	
	

	$m2="Gloire";
	$v2="paris/eglise/12eglise_rael";
	$m3="Je me tire";
	$v3="paris/_street/streetouest";


$perso2=$coeur;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_rael';

	


    ?>
  

  
</p>
 
<?php  ?>

 
























