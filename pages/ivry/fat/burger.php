<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php


include("include/panel.php"); 
$fat=check_special('fat');	$perso2=$fat;
?>

<div id="texte"><p>
- 30 euros monsieur. </p>
<?php

if($money>30) {

	echo '<p>Vous l�chez les 30 euros et engloutissez le menu. Vous avez mang� trop vite, mais l`odeur �tait irresistible.</p>';
	update_stat($nom,'life','+30');
	update_stat($nom,'money','-30');
	update_stat($fat,'money','+30');
	$bonus1="life";
	$malus1="money";
	in_log($nom,'Vous achetez un ICanHas Cheezburger menu','gros lard');
	in_log($fat,'Vous vendez un ICanHas Cheezburger menu','gros lard');
	
	$life=check_stat($nom,'life');
	$life=$life['life'];
	$obese=check_point($id,'ob�se');
	
	if($life>150 && !$obese) {
		echo '<p>Vous rotez de fa�on �coeurante. Vous �tes devenu ob�se !!';
		in_log($nom,'Vous devenez ob�se !','fat burger !');
		in_point($id,'ob�se');
		
	}
	
	if($obese && $life>120) {
		echo '<p>En bon ob�se, vous d�gueulez promptement tout le d�jeuner. Les clients s`enfuient, et vous vous f�licitez d`avoir activement lutt� contre le capitalisme destructeur de ce genre d`�tablissement.</p>';
		in_log($nom,'Vous luttez contre le capitalisme','+karma');
		update_stat($nom,'karma','+100');
		update_stat($nom,'sex','-100');
	}
	
	if($life>200)
	{
	echo '<p> Vous �tes compl�tement malade d`avoir trop mang� et foncez aux toilettes rendre tout ce que vous pouvez, par tous les orifices. Vous en ressortez affaibli, et un petit creu vous assaille.</p>';
	set_stat($nom,'life','50');
	in_log($nom,'Vous d�gueulez vos hamburgers','ob�se');
	}
	
	
	$m1="Je commande un autre ICanHas Cheezburger";
	$v1="ivry/fat/burger"; 
	
}


else
{
echo '<p>Vous n`avez m�me pas de quoi vous le payer. Vous �tes path�tique.</p>';
$m2="Je d�fonce ce putain de serveur du Fat Burger.";
$v2="ivry/fat/defonce";
}
	$present=player_present($nom,$place);
	$hapen=$present['nom'];
	
	
	if($hapen && $hapen!=$fat)
	{
	echo $hapen.' r�te grassement.';
	$m4='Je d�fonce '.$hapen;
	$v4="sp/fume";

	}
	
	
	
	
	
	
	
	
	


$m5="Je criss mon camp";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='fatburger';


 ?>

 
