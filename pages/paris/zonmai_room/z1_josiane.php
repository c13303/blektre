<?php

 $action1='';
$action2='';
$action3='';
include("include/panel.php"); 
?><div id="texte"><?php


$josielover=check_special('josie_lover');
$fumejosie=check_point($id, 'fumejosiane');
if($fumejosie)
{
echo 'Josiane d�croche et semble bl�mir au son de votre voix glaireuse.<br>
- Tu veux quoi, enfoir� ? ';

$m1='Je raccroche au nez de cette salope !';
$v1='paris/zonmai_room/z1_raccroche';
$m2='Je lui dit que b�b�, you`re the one for me, you`re my extasy';
$v2='paris/zonmai_room/z1_josieexta';
$m3='Je lui dit que b�b�, jamais je n`ai vu plus gros que son cul';
$v3='paris/zonmai_room/z1_josiegroscul';
 
$_SESSION['flashsene']='message';
 
include('include/exit.php');
}



if ($josielover==$nom)
{
 echo "Josiane d�croche.<br>- Salut mon biquet, tu va bien ? J'�tais en train de m'�piler la chatte, rien que pour toi.";
echo "<br>Vous discutez longuement de banalit�s, du labrador que vous comptez acheter ainsi que le 4x4 de ville que vous vous paierez quand vous aurez les moyens.";
$m2="Je l'embrasse et je raccroche";
$v2="paris/zonmai_room/z1_raccroche";

 
$_SESSION['flashsene']='josiane';
 
include('include/exit.php');
 
 
}



echo "<br/>
Le t�l�phone sonne. Josiane d�croche.
<br/>- Quoi .. ?
<br/>Visiblement, elle fait toujours la gueule.
<br/>- Salut ch�rie, je ..
<br/>- H�, ducon, je suis pas ta ch�rie.
<br/>- Mais.. Ecoute, sinc�rement, pour le chat ... Je suis d�sol�.
<br/>- Arr�te �a.
<br/>- Je t'assure. J'ai pas eu le temps de m'expliquer la derni�re fois, j'�tais  .. sous le choc. Tu vois ?


.";
$what=check_point($id,'fricjosiane');
if ($what)
{
echo "<br>- Hm. Toujours aussi relou.";
}

else
{
echo "<br/>- C'est pas plus le chat qui me chagrine que les 275 euros que tu me dois.
<br/>
<br/>Vous aviez compl�tement oubli� ce d�tail.";
$m2="Je promet pour l'argent";
$v2="paris/zonmai_room/z1_josianepromesse";
}

  $m1='Je lui chante 
    &quot;g&eacute;n&eacute;ration d&eacute;senchant&eacute;e&quot;, de Myl&egrave;ne Farmer';
$v1="paris/zonmai_room/z1_josianemylene";

$m3="Je raccroche promptement";
$v3="paris/zonmai_room/z1_raccroche";
  
    ?>

  


   
<?php 
$_SESSION['flashsene']='josiane';

 



?>

 




