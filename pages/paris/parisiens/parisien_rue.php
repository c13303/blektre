
<div id="texte">

  <p>Vous descendez dans la rue avec votre jean et les clés de la Lada, et curieusement une bande de connards vous attends en bas. Certains ont l'air humides, pourtant, il ne pleut pas. Ils sont visiblement furieux, et l'un d'eux vous vocif&egrave;re au visage. Certains parlent d'appeller la police. </p>
  <p>

  <?php 
    $m1="Je ne vois pas trop de quoi ils parlent, <br>
    mais j'invite tout le monde &agrave; se detendre tout de suite afin de r&eacute;gler ce dissident &agrave; l'amiable";
$v1="paris/parisiens/parisien_dissident";
$m2="Je chiale comme une merde";
$v2="paris/parisiens/parisien_chiale";
$m3=" J'adopte une attitude violente et desinvolte";
$v3="paris/parisiens/parisien_violence"; 
  
    ?>
 
  

 
<?php
$_SESSION['flashsene']="parisien_rue";
$present=player_present($nom,$place);
$hapen=$present['nom'];
if(!$hapen)
{
$hapen="Blektre";
}

  ?>

 




























