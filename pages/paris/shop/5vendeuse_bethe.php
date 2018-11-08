<?php 


 include("include/panel.php"); 



?>
<div id="texte">
 <p>Vous vous trainez molement entre les rayonnages de votre boutique. A vrai dire, vous n'y vendez que de la merde, si ce n'est peut etre ce magnifique stock de godemichet &quot;mon petit poney&quot; qui fait la fiert&eacute; de l'enseigne, et que les gens viennent voir de loin. Une etiquette 250 &euro; tr&ocirc;ne sur l'&eacute;talage. Vous touchez une commission sur chaque gode vendu. Vous soupirez.</p>

   <?php
$present=player_present($nom,$place);
$present=$present['nom'];
if($present)
{
$hapen=$present;
echo $hapen.' regarde stupidement la montagne de godes. ';
}

$m1="Je vais voir le directeur pour discuter de ma condition de travail";
$v1="paris/shop/5vendeuse_directeur";
$m2="Je vais fumer une clope devant la boutique en soupirant";
$v2="paris/shop/5commerce";



 
if($vendeuse==$nom)
{$opt1='noplayer';}
if($voyante==$nom)
{$opt1='noplayer';}

$perso2=$nom;
$perso3=$voyante;
$_SESSION['flashsene']="5accessoire";
 
?>

 