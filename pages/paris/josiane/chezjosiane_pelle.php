<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte">
 

 <?php 
 
  $algent=check_point($id,'fricjosiane');
 
 if ($algent>0)
 {
 	echo "Josiane se laisse embrasser tendrement. Puis vous la regardez dans les yeux avec romantisme, et alors vous lachez une caisse
	peu convenable. Josiane rit, et puis elle plonge dans ses pensées. Au bout d'un long moment, elle vous explique qu'il ne faut pas 
	revenir en arriere, que c'est pas bien, qu'on ne réparera jamais les pots cassés.
	<br/>Un petit pincement vous assaille au coeur, mais vous semblez déterminé à vous comporter comme un homme digne.
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
 
 

 
   $m1="Je chiale comme une merde";
$v1="paris/josiane/chezjosiane_chiale";
$m1="Je promet de faire sa vaisselle et de passer l'aspirateur";
$v1="paris/josiane/chezjosiane_vaisselle";
$m3="Je prends un air t&eacute;n&eacute;breux et je me casse";
$v3="paris/_street/streetnord";
  
    ?>



</p></form>
 
<?php 
$_SESSION['flashsene']='chezjosianeopen';
$present=player_present($nom,$place);
$hapen=$present['nom'];
 ?>

 
























