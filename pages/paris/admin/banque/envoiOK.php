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
   echo '- D�sol�e, je n`ai pas compris le montant. Vous me faites perdre mon temps.';
   }
   else
   {
   if($all)
   {
    	
	
	  if($money>$somme) 
	  {
	  echo '- Voila monsieur, l`argent a �t� transf�r�.';
	  update_stat($nom,'money','-'.$somme);
	  update_stat($benef,'money','+'.$somme);
	  in_log($nom,'Vous faites un virement � '.$benef,$somme);
	  in_log($benef,'Vous avez re�u un virement de la part de '.$nom,$somme);
	  
	  }
	  else
	  {
	  echo '-D�sol�e, vous n`avez pas assez d`argent. Veuillez foutre le camp, je n`ai pas de temps � perdre avec les crevards de votre sorte.';
	  	
	  }
	 }
	 else
	 echo '-D�sol�e,Il n`existe personne de ce nom l�. Vous me faites perdre mon temps, monsieur.';
  }
$entree="";
$entree2='';
  
  $m3="Je vais saisir une autre somme";
	$v3="paris/admin/banque/envoi"; 
	 $m4="Je la d�fonce";
	$v4="paris/admin/banque/braquage"; 
$m5="Je me tire";
$v5="paris/admin/3administration"; 
  
  
  
 


$_SESSION['flashsene']='banque';

 ?>
   
   
   
   
   </p>
   
   
   
   
   
   
   
   
   
   
   
</p>
