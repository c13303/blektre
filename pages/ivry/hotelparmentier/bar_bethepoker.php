
<?php

 $action='best = best + 800';
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
 $poker=check_special('poker');
 

 
?>

<div id="texte">
<p>- Relax, les gars. Je n'ai fait qu'utiliser les cartes qui étaient sous la table. C'était interdit ?</p>
<p><?php echo $poker; ?> sourit. Il fait signe &agrave; aux autres de baisser leurs armes. </p>
<p>- Tu as du cran petit, j'aime &ccedil;a. Tu iras loin. Va voir mon cousin Tony de ma part. Il aime les gens qui ont du cran. et prends la mise, champion.
<?php
 $mise=check_title('poker');
 update_stat($nom,'money','+'.$mise);
 set_title(0,'poker');
 in_log($nom,'Vous raflez la mise au Poker','Champion');
 set_special($nom,'poker');

  
$m3="J'assure un max.";
$v3='ivry/hotelparmentier/bar_poker';    


$_SESSION['flashsene']='poker';
$perso2=$hapen;
$perso3=$poker;
$perso4=$nom;


    ?>
    </p>

      
      
    </p>
