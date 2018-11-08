<?php 


 include("include/panel.php"); 


$docteur=check_special('docteur');

?>

<div id="texte">
    
    <?php
$cb=check_point($id,'CB');

if($cb||$money>2999)
	{
		echo "<p>Le docteur ".$docteur." vous fait allonger sur un lit roulant et vous fait emmener dans les fin-fonds de 		l'hopital. Il vous raconte des petites plaisanteries pour vous rassurer, commme l'histoire des seins de Britney Spears qui ont explosé dans l'avion juste après son opération.</p>
		<p>Quelques heures plus tard, vous vous reveillez de l'anesthésie. Le docteur vous apporte un miroir.</p>";
		
		in_log($nom,'Vous vous faites faire une injection de Collagène','Freak');

		if($karma>2500||$sex>1500)
			{
			echo "<p>Le résultat est hideux, le docteur ".$docteur." s'est visiblement chié dessus.</p>";
			in_log($nom,'Votre opération a raté','Horreur');
			update_stat($nom,"sex","-3000");
			
			}
			else
			{
			echo "<p>Vous avez une vraie bouche de salope. Le docteur ".$docteur." a plutôt assuré.</p>";
			in_log($nom,'Votre opération a réussi','Bouche de salope');
			update_stat($nom,"sex","+3000");
			}



			if($cb)
			{
				echo "<p>La CB de votre mère a été détruite car le compte a été vidé.</p>";
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
	echo '<br><br>- Est ce que je peux l`acheter à crédit ? demandez vous de façon piteuse. <br>Le docteur vous adresse un sourire navré.';
	$m1="Je le fume";
	$v1="paris/hopital/6fume_docteur";
}


$m2="Je me casse";
$v2=$retour;


$perso2=check_special('docteur');
$_SESSION['flashsene']='6docteur';

 
 
?>
    </p>
 
