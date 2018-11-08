<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 
$fat=check_special('fat');	$perso2=$fat;
?>

<div id="texte"><p>
- 30 euros monsieur. </p>
<?php

if($money>30) {

	echo '<p>Vous lâchez les 30 euros et engloutissez le menu. Vous avez mangé trop vite, mais l`odeur était irresistible.</p>';
	update_stat($nom,'life','+30');
	update_stat($nom,'money','-30');
	update_stat($fat,'money','+30');
	$bonus1="life";
	$malus1="money";
	in_log($nom,'Vous achetez un ICanHas Cheezburger menu','gros lard');
	in_log($fat,'Vous vendez un ICanHas Cheezburger menu','gros lard');
	
	$life=check_stat($nom,'life');
	$life=$life['life'];
	$obese=check_point($id,'obèse');
	
	if($life>150 && !$obese) {
		echo '<p>Vous rotez de façon écoeurante. Vous êtes devenu obèse !!';
		in_log($nom,'Vous devenez obèse !','fat burger !');
		in_point($id,'obèse');
		
	}
	
	if($obese && $life>120) {
		echo '<p>En bon obèse, vous dégueulez promptement tout le déjeuner. Les clients s`enfuient, et vous vous félicitez d`avoir activement lutté contre le capitalisme destructeur de ce genre d`établissement.</p>';
		in_log($nom,'Vous luttez contre le capitalisme','+karma');
		update_stat($nom,'karma','+100');
		update_stat($nom,'sex','-100');
	}
	
	if($life>200)
	{
	echo '<p> Vous êtes complètement malade d`avoir trop mangé et foncez aux toilettes rendre tout ce que vous pouvez, par tous les orifices. Vous en ressortez affaibli, et un petit creu vous assaille.</p>';
	set_stat($nom,'life','50');
	in_log($nom,'Vous dégueulez vos hamburgers','obèse');
	}
	
	
	$m1="Je commande un autre ICanHas Cheezburger";
	$v1="ivry/fat/burger"; 
	
}


else
{
echo '<p>Vous n`avez même pas de quoi vous le payer. Vous êtes pathétique.</p>';
$m2="Je défonce ce putain de serveur du Fat Burger.";
$v2="ivry/fat/defonce";
}
	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	
	if($hapen && $hapen!=$fat)
	{
	echo $hapen.' rôte grassement.';
	$m4='Je défonce '.$hapen;
	$v4="sp/fume";

	}
	
	
	
	
	
	
	
	
	


$m5="Je criss mon camp";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='fatburger';


 ?>

 
