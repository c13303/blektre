<?php 
 // endroit texte


// chemin de retour

//eventuelle pr�action
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');
$hapen=$rael;
$isdesintox=check_point($id,'desintox');
$issecte=check_point($id,'secte');
 ?>
 
<div id="texte">

  <?php

	
	
	if($isdesintox)
	{
		$time_debut=get_time_point($id,'desintox');
		$temps_passe=$time-$time_debut;
		if($temps_passe<200)
			{
				echo "-Il est trop t�t, fils. Continue � t'abstenir de prendre de la drogue et tu t'en sortiras. Je vais te confisquer ton argent, ainsi, tu ne seras pas tent� d'en acheter.";
						set_stat($nom,'money','0');
	in_log($nom,'Vous donnez tout votre argent au gourou '.$hapen,'Mouton de panurge');
	in_log($hapen, $nom. 'vous donne tout son argent','gourou');
	update_stat($hapen,'money','+'.$money);
			}
			else
			{
				echo "- Tu as tenu assez longtemps. Tu es desintoxiqu�. Je vais te confisquer ton argent, ainsi, tu ne seras pas tent� d'en racheter.";
						set_stat($nom,'money','0');
	in_log($nom,'Vous donnez tout votre argent au gourou '.$hapen,'Mouton de panurge');
	in_log($hapen, $nom. 'vous donne tout son argent','gourou');
	update_stat($hapen,'money','+'.$money);
				in_log($nom,'Vous �tes sevr�','plus jamais �a');
				no_point($id,'junky');
			}
			
			
			
			
	}
	else
	{
	
				if($issecte)
				{
				echo "<p>En tant que fid�le de la secte, le Rael accepte de vous desintoxiquer. Il fait un geste bizarre devant vous et ferme les yeux en maugr�ant quelquechose en arabe.</p><p>- Voila. Ca va etre long. Mais si tu ne touches plus � la drogue pendant longtemps, reviens me voir et tu seras desintoxiqu�. Donne moi ton argent, afin de ne pas �tre tent�.";
				in_point($id,'desintox');
				in_log($nom,"Vous commencez une cure de desintox");
						set_stat($nom,'money','0');
	in_log($nom,'Vous donnez tout votre argent au gourou '.$hapen,'Mouton de panurge');
	in_log($hapen, $nom. 'vous donne tout son argent','gourou');
	update_stat($hapen,'money','+'.$money);
				
				}
				else
				{
				echo "<p>- Il faut �tre un fid�le de l'�glise, fils.</p>";
					$m2="Je voudrais adh�rer � la secte";
				$v2="paris/eglise/12adhesion";
				}
		}

	
	

$m4="Je vais prier";
	$v4="paris/eglise/12priere";
	$m5="Je me tire";
	$v5="paris/_street/streetouest";


	$perso2=$coeur;
	$perso3=$rael;

	$_SESSION['flashsene']='12eglise_rael';


    ?>
  

  
</p>
 
<?php  ?>

 
























