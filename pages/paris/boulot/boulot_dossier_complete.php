<?php




 $action1='';
$action3='karma=karma+100';


include("include/panel.php"); 

 $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));
$patron=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="patron";'));
 ?>
<div id="texte">
  <p>C'est la feuille qu'il manquait &agrave; votre dossier. Vous courez chez le patron  <?php echo $patron['player']; ?> en contenant vos flatulences tant bien que mal.</p>

  <?php


  in_log($nom,'Vous rendez un dossier','Gentil employé');
  
$what=check_point($id, 'CDI');
if ($what)
{
echo "<br>Le patron est là, ténébreux, observant une feuille bleue. Vous posez le tas de feuilles roses sur son bureau et il se met à renifler de façon étrange.<br>
- Decidemment, tu me plais.";

  if($nom==check_special('directeur'))
  {
	echo "Je suis content de t'avoir nommé directeur. Voilà une petite prime. <p>Vous faites un effort pour ne pas pisser d exitation dans votre froc.</p>";
	update_stat($nom,'money','+150');
	update_stat($karma,'karma','+150');
	
  }
 
 $m1="En toute vraisemblance, il se fout de ma gueule et je le fume";
$v1="paris/boulot/bureaubossfume";

$m2="Je joue le jeu";
$v2="paris/boulot/boulot_dossier_complete2";
$m3="Je souris et je prends congé";
$v3="paris/boulot/cafe";

}
  
  else{
  
  echo "
  <br>Le patron est là, ténébreux, observant une feuille bleue. Vos posez le tas de feuilles roses sur son bureau et il se met à renifler de façon étrange.<br>"
 ;
  
  

 
 
 $m1="En toute vraisemblance, il se fout de ma gueule et je le fume";
$v1="paris/boulot/bureaubossfume";

$m2="Vous abordez le sujet du CDI";
$v2="paris/boulot/CDI";
$m3="J'appelle Patricia";
$v3="paris/boulot/boulot_patricia";



}



// chouicess
  
  
  
  
    ?>

 
<?php 
$_SESSION['flashsene']='patron';
$perso2=check_special('patron');
 ?>

 














