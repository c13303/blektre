<?php




 $action1='';
$action2='';
$action3='place="bureau"';


include("include/panel.php"); 



 ?>
<div id="texte">
  <p>Vous �tes dans votre bureau, fier comme un paon. 
  
    <?php
	
	// YOURE THE BOSS:
$patron=check_special('patron');
if ($nom==$patron)
{
include('pages/paris/boulot/boulot_remplace_patron.php');
include('include/exit.php');
}
	
	
	// BEEN REMPLACED
	$what=check_point($id,"betheboss");
	if ($what)
	{
	echo "<br>Vous �tes dr�lement vener' de vous �tre fait remplacer par ".$patron."<br>";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// BOSS DRAGUED
	
	$what=check_point($id, 'dragueboss');
	$what2=check_point($id, 'CDI');
	
  if ($what&&!$what2)
  {
		 include('pages/paris/boulot/bureaubosslove.php');
		 include('include/exit.php');
  }
  
  
  // DOSSIER CANARDO
  
  
$what=check_point($id,"canardo");
if ($what)
{
   $m1="Je taffe consciencieusement ";
$v1="paris/boulot/boulot_dossier";
$m2="J'appelle Patricia";
$v2="paris/boulot/boulot_patricia";
$m3="Je vais � la machine � caf�";
$v3="paris/boulot/cafe";
  
  
  
  
}
else

{ echo "  <p>Vous hesitez entre commencer une partie de d�mineur ou un solitaire quand Patricia, la secr�taire du patron, entre dans la pi�ce avec ses botes hideuses et son sourire de pouffiasse. Elle vous demande si vous avez termin&eacute; le dossier pour M. El Canardo. </p>";
in_point($id,"canardo");
$opt1='patoche_entre';
  $m1="Je m'y met s�rieusement ";
$v1="paris/boulot/boulot_dossier";
$m2="Je lui donne un faux dossier <br/>et pr�tend avoir fait le travail";
$v2="paris/boulot/boulot_faux_dossier";
$m3="Je lui demande poliment <br/>de ne pas mes casser les couilles <br/>
    et d'aller se faire foutre ailleurs gentiment";
$v3="paris/boulot/boulotpatriciafuck";

  }
  
  
$_SESSION['flashsene']='bureau'; ?>

 














