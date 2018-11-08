<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte">
 
 <?php 
 $josielover=check_special('josie_lover');
 $dj=check_special('tube');
 $tune=check_point($id, 'fricjosiane');
if ($tune)
{
 if ($karma>0||$dj!=$nom)
    {
	
	echo "-Tu sais.. Toi et moi ... Ca marchera pas.. Tu vois ... J'aime les artistes, les musiciens surtout, les bad boyz, tu le sais mais .. surtout je cherche un type un peu mauvais .. Tu es trop orgueilleux.. Ca va te paraitre con mais je trouve que t'as trop un bon karma, tu vois ? Tu vois, ".$josielover." est un mec mieux pour ça.";
	 $m1="Je chiale comme une merde";
$v1="paris/josiane/chezjosiane_chiale";
$m2="Je la fume";
$v2="paris/josiane/chezjosiane_fume";
$m3="Je prends un air t&eacute;n&eacute;breux et je me casse";
$v3="paris/_street/streetnord";
$_SESSION['flashsene']='chezjosianeopen';

	 
	 
	include('include/exit.php');
	
	}
 if ($karma<0&&$dj==$nom)
    {
	$tube=check_rank('tube');
	$tube=$tube['title'];
	echo "Vous racontez à Josiane comment vous vous faites souvent bastonner dans la rue, comment les gens vous traitent comme de la merde, et comment vous songez à vous suicider chaque matin en vous reveillant. Elle semble émue.<br><br>Soudain, votre morceau, ".$tube.", passe dans la radio.<br>Josiane se met à vous regarder avec les yeux qui tremblent, comme savent si bien le faire les filles dans les mangas.";
	
	$m1="Je l'emballe";
	$v1="paris/josiane/chezjosiane_emballe";
	$m2="Je chiale comme une merde";
$v2="paris/josiane/chezjosiane_chiale";
	
	}
 
 
 $_SESSION['flashsene']='chezjosianeopen';

  
  
 include('include/exit.php');
 }
 
 
 
 
 if ($sex>499)
 {
 	echo "Vous faites votre regard de loveur à Josiane qui semble touchée. 
	<br/>-Soit gentil, rend moi mon argent.
	<br/>Un petit pincement vous assaille au coeur, mais vous semblez determiné à vous comporter comme un homme digne.
	";
	
	
 }
 else
 {
 	echo "-Ne m'approche pas, connard !!! 
	<br/>Josiane vous repousse violemment. Elle vous invite cordialement à dégager.
<br/>- Reviens quand t'auras mes tunes, ajoute-t-elle.
<br/>
	";
	
 }
 
 ?>
 
 
  
  <?php 
  $m1="Je chiale comme une merde";
$v1="paris/josiane/chezjosiane_chiale";
$m2="Je la fume";
$v2="paris/josiane/chezjosiane_fume";
$m3="Je prends un air t&eacute;n&eacute;breux et je me casse";
$v3="paris/_street/streetnord";
  
    ?>



</p></form>
 
<?php 
$_SESSION['flashsene']='chezjosianeopen';
$present=player_present($nom,$place);
$hapen=$present['nom'];
 ?>

 























