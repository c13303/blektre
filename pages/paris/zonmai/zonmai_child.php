
<?php

 $action1='place ="zonmai"';
require("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$_SESSION['hapen'];

$hapensex=check_stat($hapen);
$lifehapen=$hapensex['life'];
$hapensex=$hapensex['sex'];

$drogue=check_rank('dealer');
$drogue=$drogue['title'];


?>

<div id="texte">

<?php if ($sex<0)
{
echo "Avec tous les efforts du monde,<b>votre popol n'arrive pas à bander.</b> ".$hapen." vous regarde de façon perplexe. 
<br>
<br>- Je ne te fais plus bander, c'est ça ? Tu t'es trouvé une autre petite salope ? Pauvre connard! ";
update_stat($hapen,'karma','+100');
$bonus2='karma';


 $m5="Je m'excuse et je vais faire un tour pour retrouver ma virilité";
   $v5="paris/_street/street";
   $m2="Espèce de salope, dégage, tu ne vaux plus rien";
   $v2="paris/zonmai/zonmai_largue";

$m3="Faut pas m'emmerder et je la fume";
$v3="paris/zonmai/zonmai_fume"; 

 
$_SESSION['flashsene']='zonmai_debande';
$perso2=$hapen;
 
require('include/exit.php');
}
?>

<?php if ($hapensex<0)
{
echo "Avec tous les efforts du monde, <b>".$hapen." reste seche comme le desert de l'Arizona.  </b>
<br>
<br>- Je ne te fais plus bander, c'est ça ? Tu t'es trouvé un autre connard, c'est ça ? Petite salope !! ";

 $m5="Je m'excuse et je vais faire un tour pour me calmer";
   $v5="paris/_street/street";
   $m2="Espèce de salope, dégage, tu ne vaux plus rien";
   $v2="paris/zonmai/zonmai_largue";

$m3="Faut pas m'emmerder et je la fume";
$v3="paris/zonmai/zonmai_fume"; 

 
$_SESSION['flashsene']='zonmai_seche';
$perso2=$hapen;
 
require('include/exit.php');
}
?>


  <p>Vous chopez sauvagement votre femme <b><?php echo $hapen; ?></b> qui hurle toute sa jouissance &agrave; travers le voisinage, puis elle retourne faire la vaisselle. </p>
  <p>- Les enfants ont encore cassé la télé, dit-elle en soupirant. Tu veux pas jeter un oeil ?
  <p>Vous &eacute;crasez votre m&eacute;got et allez reparer la t&eacute;l&eacute;. </p>
  <p>- Putain de m&ocirc;mes. Heureusement qu'ya les allocs. </p>
  <p></p>
  <p>&nbsp;</p>
  <p> 
    <?php
	requete('UPDATE `players` SET place="zonmai" WHERE nom = "'.$hapen.'" LIMIT 1;');
	
	in_log($nom,'Vous sautez votre meuf '.$hapen, 'Bon pour les allocs!');
    in_log($hapen, 'Votre mec '.$nom.' vous saute', 'housewife');


	require('pages/sp/_CHILD.php');
	

   $m1="Je vais mater la télé";
   $v1="paris/zonmai/zonmai_tele";

$m3="Je vais faire un tour";
$v3="paris/_street/street"; 





    ?>
  </p>
  </p>
 
<?php 
$_SESSION['flashsene']='zonmai_tele';
$perso2=$hapen;
$enfant4=mysqli_fetch_assoc(requete('SELECT nom FROM family WHERE pere="'.$nom.'" AND nom!="'.$perso2.'" AND nom!="bébé";'));
$perso4=$enfant4['nom'];
$enfant3=mysqli_fetch_assoc(requete('SELECT nom FROM family WHERE pere="'.$nom.'" AND nom!="'.$perso2.'" AND nom!="'.$perso4.'" AND nom!="bébé";'));
$perso3=$enfant3['nom'];

 ?>

 
