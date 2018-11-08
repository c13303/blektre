
<?php

$action1='retour="paris/_street/streetouest"';
include("include/panel.php"); 



$defunt=clean($_GET['entree']);

?>

<div id="texte">

  <p>Vous poussez en suant la grosse pierre tombale de <?php echo $_SESSION['tombe']; ?> et d&eacute;voilez un cercueil. Votre pote se trouve effectivement dedans. </p>
  <p>
    <?php
	$hapen=$_SESSION['tombe'];
	unset($_SESSION['tombe']);
	$bite=requete('SELECT * FROM accounts WHERE char1="'.$hapen.'" OR char2="'.$hapen.'" OR char3="'.$hapen.'";');
	  while($fuck=mysqli_fetch_assoc($bite))
	  $account=$fuck['nom'];


	
	if($_SESSION['zombie_ok']==$hapen)
	{
		if($account)
		{
			echo "<p>Ce dernier a les yeux ouverts et semble un peu en panique.</p>
			<p>-Putain, mais qu'est ce que je fais là, bordel de bite ???</p>
			Vous le trouvez effroyablement vulgaire, mais toutefois, vous êtes plus content de le voir vivant.
			
			";
			set_stat($hapen,'life','100');
			in_log($hapen,'Vous ressucitez','grace à '.$nom);
			in_log($nom,'Vous deterrez '.$hapen,'Alleluia');
			set_stat($hapen,'place','"Black bar"');
			
			$m1="Je le fume";
			$v1="sp/fume"; 
			$_SESSION['flashsene']='13cimetiere';
			
		}
		else
		{
		echo "<p>Ce dernier a les yeux ouverts et semble avoir vraiment une sale gueule.</p>
			<p>-GRourGmglrmlm.... GRororMMlbmLBllMLEMLE RKLTKE, sont les seuls mots qu'il vous adresse en guise de reconnaissance.</p>
			Vous le trouvez effroyablement vulgaire, mais toutefois, vous êtes plus content de le voir vivant. Seulement, il se tire en courant.
			
			";
			in_log($hapen,'Vous devenez un zombi','AAAH!');
			in_log($nom,'Vous eveillez un zombi','Malheureux!');
			check_special('zombie');
			set_special($hapen,'zombie');
			$_SESSION['flashsene']='13cimetiere';
		}
	
	}
	else
	{
	echo "<p>Il parait bien moisi. On dirait bien qu'il a chié dans son froc. Vous avez envie de vomir.</p>";
	}
	
	

    
 
   
 
$m5="Je me tire";
$v5="paris/_street/streetouest"; 





    ?>
  </p>


 
