<?php




 $action1='';
$action3='place="cafe"';


include("include/panel.php"); 

 $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));

 ?>
<div id="texte">
  <p>Vous chialez pr&egrave;s de la plante verte du couloir. La vie est impitoyable pour les employ&eacute;s, mis&eacute;rables petits vermisseaux. Vous vous demandez pourquoi vous faites tout &ccedil;a, et vous repensez tristement &agrave; Josiane qui doit &ecirc;tre en train de flirter avec <?php
  $josie_lover=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="josie_lover";'));
  echo $josie_lover['player'];
  ?></p>
  
  <?php
  
  
  
  
  
$what=check_point($id, 'CDI');
if ($what)
{
echo "<p>Le patron passe et vous fait un clin d'oeil. Cela vous effraie un peu.</p>";
 
 $m1="En toute vraisemblance, il se fout de ma gueule et je le fume";
$v1="paris/boulot/bureaubossfume";

$m2="Je l'aborde pour lui parler de mon avenir";
$v2="paris/boulot/boulot_boss_couloir";
$m3="Je vais a la machine a cafe";
$v3="paris/boulot/cafe";
$hapen=check_special('patron');
}
  
  else
  {
 echo "<p>Patricia passe et pouffe de rire.</p>";
 $m1="Je la suis dans les toilettes";
$v1="paris/boulot/boulot_wc_patricia";
$m2="Je vais à la machine à café";
$v2="paris/boulot/cafe";
$m3="Je vais dans mon bureau";
$v3="paris/boulot/bureau";
$opt1='patoche';
$_SESSION['flashsene']='boulot_chiale';
}




$_SESSION['flashsene']='boulot_chiale';
// chouicess
  
  
 ?>

 













