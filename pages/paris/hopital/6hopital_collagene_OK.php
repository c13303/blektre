<?php 


 include("include/panel.php"); 


$docteur=check_special('docteur');

?>

<div id="texte">
    
    <?php
$cb=check_point($id,'CB');

if($cb||$money>2999)
	{
		echo "<p>Le docteur ".$docteur." vous fait allonger sur un lit roulant et vous fait emmener dans les fin-fonds de 		l'hopital. Il vous raconte des petites plaisanteries pour vous rassurer, commme l'histoire des seins de Britney Spears qui ont explos� dans l'avion juste apr�s son op�ration.</p>
		<p>Quelques heures plus tard, vous vous reveillez de l'anesth�sie. Le docteur vous apporte un miroir.</p>";
		
		in_log($nom,'Vous vous faites faire une injection de Collag�ne','Freak');

		if($karma>2500||$sex>1500)
			{
			echo "<p>Le r�sultat est hideux, le docteur ".$docteur." s'est visiblement chi� dessus.</p>";
			in_log($nom,'Votre op�ration a rat�','Horreur');
			update_stat($nom,"sex","-3000");
			
			}
			else
			{
			echo "<p>Vous avez une vraie bouche de salope. Le docteur ".$docteur." a plut�t assur�.</p>";
			in_log($nom,'Votre op�ration a r�ussi','Bouche de salope');
			update_stat($nom,"sex","+3000");
			}



			if($cb)
			{
				echo "<p>La CB de votre m�re a �t� d�truite car le compte a �t� vid�.</p>";
				no_point($id,'CB');
			
			}
			else
			{
				update_stat($nom,"money","-3000");
			}
	
	
	update_stat($docteur,'money','+500');

	}
	

else
{
	echo '<br><br>- Est ce que je peux l`acheter � cr�dit ? demandez vous de fa�on piteuse. <br>Le docteur vous adresse un sourire navr�.';
	$m1="Je le fume";
	$v1="paris/hopital/6fume_docteur";
}


$m2="Je me casse";
$v2=$retour;


$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';

 
 
?>
    </p>
 
