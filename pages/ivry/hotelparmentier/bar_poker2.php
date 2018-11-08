
<?php

 
include("include/panel.php"); 

 $poker=check_special('poker');
?>

<div id="texte">


    <p><?php echo $poker; ?>, le champion de Poker, fume un gros spliff d'un air suffisant.</p>

      <?php


 if ($money<50)
 {
 echo "<br>Quelqu'un vous recommande plutôt d'aller faire un flippeur. Une manière de vous signifier que vous n'avez plus les moyens de suivre cette partie de Poker.";
 $m1="Je les fume tous";
 $v1="ivry/hotelparmentier/bar_taule";

 }
 else
 {
 echo "<br>La mise minimum est de 50 euros, que vous lachez avec prestance. Les cartes sont redistribuées. ";
 update_stat($nom,'money','-50');

 $mise=check_title('poker');
 if($mise<1)
 $mise=50;
 $mise=$mise+50;
 set_title($mise,'poker');
 
echo "<p>La mise totale est de ".$mise." euros.";
 $m2="Je mate mes cartes";
$v2="ivry/hotelparmentier/bar_pcartes";  
 
 if($present)
	 {
	 	echo '<p>'.$present." renifle bruyamment, dans le but certain de vous destabiliser.";
	 }

 }




  
$m3="Je me tire en chialant";
$v3=$_SESSION['rue'];    

$_SESSION['flashsene']='poker';
$perso2=$hapen;
$perso3=$poker;
$perso4=$nom;



    ?>
    </p>

      
      
    </p>
