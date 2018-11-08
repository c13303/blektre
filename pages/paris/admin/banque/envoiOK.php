<?php



$corres=clean($_GET['entree']);$corres=clean($corres);
$somme=clean($_GET['entree2']);$somme=clean($somme);

$corres=strtolower($corres);
$corres=ucfirst($corres);
$benef=$corres;
include("include/panel.php"); 

 ?>
<div id="texte">

 
 <p>   
   <?php
   $all=mysqli_fetch_assoc(requete('SELECT nom FROM players WHERE nom="'.$benef.'";'));
   if(!is_numeric($somme) || $somme<1)
   {
   echo '- Désolée, je n`ai pas compris le montant. Vous me faites perdre mon temps.';
   }
   else
   {
   if($all)
   {
    	
	
	  if($money>$somme) 
	  {
	  echo '- Voila monsieur, l`argent a été transféré.';
	  update_stat($nom,'money','-'.$somme);
	  update_stat($benef,'money','+'.$somme);
	  in_log($nom,'Vous faites un virement à '.$benef,$somme);
	  in_log($benef,'Vous avez reçu un virement de la part de '.$nom,$somme);
	  
	  }
	  else
	  {
	  echo '-Désolée, vous n`avez pas assez d`argent. Veuillez foutre le camp, je n`ai pas de temps à perdre avec les crevards de votre sorte.';
	  	
	  }
	 }
	 else
	 echo '-Désolée,Il n`existe personne de ce nom là. Vous me faites perdre mon temps, monsieur.';
  }
$entree="";
$entree2='';
  
  $m3="Je vais saisir une autre somme";
	$v3="paris/admin/banque/envoi"; 
	 $m4="Je la défonce";
	$v4="paris/admin/banque/braquage"; 
$m5="Je me tire";
$v5="paris/admin/3administration"; 
  
  
  
 


$_SESSION['flashsene']='banque';

 ?>
   
   
   
   
   </p>
   
   
   
   
   
   
   
   
   
   
   
</p>
