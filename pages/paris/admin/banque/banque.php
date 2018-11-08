<?php




 $action1='';
$action2='retour="paris/admin/banque/banque"';
$action3='place="Banque"';

include("include/panel.php"); 

 ?>
<div id="texte">
 <p>Vous entrez dans le grand batiment froid et marbr&eacute;, cela irait jusqu'&agrave; vous inspirer une erection si cette envie de d&eacute;f&eacute;quer ne prenait pas le dessus tellement vous vous sentez ridicule &agrave; c&ocirc;t&eacute; des pontes en costard-cravate.</p><?php
  if($present)
  {
  $hapen=$present;
  echo "<p>".$hapen." dépose une liasse de billet, plein d'orgueil, en parlant fort.</p>";
  $m4='Je fume cet enfoiré de '.$hapen;
  $v4='sp/fume';

}

?>
 <p>Une pouffiasse en tailleur daigne vous adresser la parole alors que vous approchez du guichet.</p>
 
 <p>- C'est pour quoi ? demande-t-elle d'un air peu am&egrave;ne. </p>
 <p>   
   <?php
  
  
 

    $m2="Je voudrais envoyer de l'argent à quelqu'un";
$v2="paris/admin/banque/envoi"; 
  $m3="C'est pour un braquage, salope";
$v3="paris/admin/banque/braquage"; 
$m5="Je décampe";
$v5="paris/admin/3administration"; 
  
  
  
 


$_SESSION['flashsene']='banque';

 ?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  </p>
