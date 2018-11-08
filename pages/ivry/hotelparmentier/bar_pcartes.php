
<?php

 
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
 $poker=check_special('poker');
 
 $n=1;
 while($n<6)
 {
 $r=rand(1,5);
 $c=rand(1,4);
 $carte='c'.$n;
 $couleur='cl'.$n;
 if($r==1)
 $$carte='un as';
 if($r==2)
 $$carte='un 10';
  if($r==3)
 $$carte='un roi';
  if($r==4)
 $$carte='une reine';
  if($r==5)
 $$carte='un valet';
 if($c==1)
 $$couleur='de coeur';
  if($c==2)
 $$couleur='de trefle';
  if($c==3)
 $$couleur='de pique';
  if($c==4)
 $$couleur='de carreau';

 $n++; 
 }

 
?>

<div id="texte">



      <?php
echo 'Vous avez <b>'.$c1.'</b>  '.$cl1.',   <b>'.$c2.'</b> '.$cl2.',  <b>'.$c3.'</b> '.$cl3.',  <b>'.$c4.'</b> '.$cl4.',  <b>'.$c5.'</b> '.$cl5.'.

<p> Vous vous demandez si le jeu n`est pas truqué. De plus, les règles sont bizarres. Ca doit être du poker de gauche.';

 $_SESSION['c1']=$c1;
 $_SESSION['cl1']=$cl1;
  $_SESSION['c2']=$c2;
 $_SESSION['cl2']=$cl2;
  $_SESSION['c3']=$c3;
 $_SESSION['cl3']=$cl3;
  $_SESSION['c4']=$c4;
 $_SESSION['cl4']=$cl4;
  $_SESSION['c5']=$c5;
 $_SESSION['cl5']=$cl5;
 
 if($present)
	 {
	 	echo '<p>'.$present." maugrée quelquechose, probablement quelque malédiction en arabe. Il semble avoir un bon jeu.";
	 }






$m1="Je monte la mise et change mes cartes";
$v1="ivry/hotelparmentier/bar_poker2";  
$m2="Je propose de montrer les cartes";
$v2="ivry/hotelparmentier/bar_pokerOK";
$m3="Je les défonce tous";
$v3="ivry/hotelparmentier/bar_baston";
$m4="Je me tire en chialant";
$v4=$_SESSION['rue'];    


$_SESSION['flashsene']='poker';
$perso2=$hapen;
$perso3=$poker;
$perso4=$nom;


    ?>
    </p>

      
      
    </p>
