<?php
 $action1='';
$action2='sex=sex-500';
$action3='karma=karma-20';
include("include/panel.php"); 

$bonus1="sex";



?><div id="texte">
  <p>Vous ouvrez grand la fenêtre et commencez à vous secouer la nouille de façon allègre.</p>
  <p>    
  <?php if ($sex>-1)
{
echo "Vous pinez au bout de quelques secondes de ramonage et vous regardez votre semence choir du 6ème étage pour atterrir sur quelques 
quidams qui se promenaient. Ils ont l'air visiblement émus, et la félicité innonde votre visage.";
in_log($nom, "Vous vous branlez par la fenêtre", "hum hum ..");
in_point($id, "branlefenetre");
update_stat($nom, 'karma','-20');
$malus1="karma";
}

  if ($sex<0)
{
echo "Vous vous branlez de plus en plus frénétiquement mais vous avez une peine à jouir très désagréable. Vous finissez par pisser
tristement par la fenêtre, arrosant ainsi une flopée de passants scandalisés. Maigre consolation, malgré tout, vous décidez de ne pas vous laisser abattre.";
}

?>



  <?php
  
    $m1="Je roule un c&ocirc;ne.";
$v1="paris/zonmai_room/z1_room_bedo3";
$m2="J'appelle le patron";
$v2="paris/zonmai_room/z1_boss";
$m3="Je vais au boulot";
$v3="paris/_street/street";
  
     ?>

  
  

   
<?php 
$_SESSION['flashsene']='parisienmasturbe';
$malus1="karma";
$bonus1="sex";
 ?>

 























