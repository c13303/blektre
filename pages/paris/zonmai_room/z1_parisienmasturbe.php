<?php
 $action1='';
$action2='sex=sex-500';
$action3='karma=karma-20';
include("include/panel.php"); 

$bonus1="sex";



?><div id="texte">
  <p>Vous ouvrez grand la fen�tre et commencez � vous secouer la nouille de fa�on all�gre.</p>
  <p>    
  <?php if ($sex>-1)
{
echo "Vous pinez au bout de quelques secondes de ramonage et vous regardez votre semence choir du 6�me �tage pour atterrir sur quelques 
quidams qui se promenaient. Ils ont l'air visiblement �mus, et la f�licit� innonde votre visage.";
in_log($nom, "Vous vous branlez par la fen�tre", "hum hum ..");
in_point($id, "branlefenetre");
update_stat($nom, 'karma','-20');
$malus1="karma";
}

  if ($sex<0)
{
echo "Vous vous branlez de plus en plus fr�n�tiquement mais vous avez une peine � jouir tr�s d�sagr�able. Vous finissez par pisser
tristement par la fen�tre, arrosant ainsi une flop�e de passants scandalis�s. Maigre consolation, malgr� tout, vous d�cidez de ne pas vous laisser abattre.";
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

 























