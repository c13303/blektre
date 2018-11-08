<?php




 $action1='sex=sex-10';
 $action2='karma=karma+20';
$action3='';


include("include/panel.php"); 



 ?>
<div id="texte">
 <p>Vous payez la reservation du patron. </p>

   <?php 
  
 if($money<301)
 {
 echo "<p>Juste de quoi vider complètement votre compte en banque.</p>";
 set_stat($nom,'money','0');
 }
 else
 {
 update_stat($nom,'money','-300');
 }
 
 echo "<p>Vous vous sentez pas très très bien.</p>";
 
$m1="Je chiale";
$v1="paris/boulot/boulot_chiale";
$m3="Je retourne travailler";
$v3="paris/boulot/bureau";
$m4="Je vais fumer le patron";
$v4="paris/boulot/bureaubossfume";






// chouicess
  
  
  
  
    ?>
   
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 