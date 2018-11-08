<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

$action1='best=best+500';
include("include/panel.php"); 





if($present)$hapen=$present;


?>

<div id="texte">

<?php if ($_SESSION['autogood']>3 && $sex>500)
		{
		echo "<p>Vous lui jetez un regard noir type << je vais te déchirer salope >> mais avant d'avoir pu faire le moindre geste, la voilà sur vous à vous embrasser de toute part en vous massant l'entrejambe.</p>
		
		<p>Après avoir secoué la voiture pendant 5 bonnes minutes, vous sortez, votre permis à la main, avec un peu de foutre sur le pantalon.</p>";
		in_log($nom,"Vous obtenez votre permis","+500 pts");
		in_point($id,'permis');
			$_SESSION['flashsene']='permis';
		}
else
{
echo "<p>Vous vous apprêtez à lui mettre une patate quand elle vous écrase l'allume cigare en plein milieu du visage. Vous sortez en hurlant.</p>";
    update_stat($nom,'life','-20');
	in_log($nom,"Vous vous faites crâmer la gueule à l'allume cigare","loser");
	$_SESSION['flashsene']='beated';
	}

	
	
	
	
	
	


$m1=" !!!! ";
$v1=$_SESSION['rue']; 





 ?>
</p>
  