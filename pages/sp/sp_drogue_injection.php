
<?php

 include("include/panel.php"); 


$drogue=check_title('dealer');

$q=clean($_GET['entree']);
$qt=check_bag($id,"drogue");
if($q<0) $q=0;
if($q>$qt)
{
$q=$qt;
}
?>

<div id="texte">



  <p>Vous vous injectez <?php echo $drogue; ?>. Tout devient blanc l'espace d'un instant et vous vous affalez sur la cuvette... La vie est belle. Vous essayez de penser � la gueule de Josiane, mais rien n'arrive � votre esprit sinon cette esp�ce de vision de Patrick Poivre d'Arvor dansant nu dans un chant de fleurs. </p>
    <?php
	
	if($drogue=="m�taspirine"||$drogue=="metaspirine")
	{
	if($q>50)
	{
	
	echo "Vous vous prenez le flash de la mort bien connu de la m�taspirine !!! Vous hurlez: << I AM CHRISTIAN THE GREAT POET >>, phrase dont vous seul connaissez la signification. Quelqu'un toque � la porte et vous demande de sortir.";
	in_log($nom,"Vous vous prenez le m�gaflash de la m�taspirine","W00T");
	update_stat($nom,'karma','+200');
	}
	}
	$q1=$q/2;
	$q2=$q*2;
	
update_stat($nom,'life','+'.$q1);
update_stat($nom,'frakass','+'.$q2);
in_log($nom,'Vous vous injectez '.$drogue,'Sale junky');
no_bag($id,"drogue",$q);


$frakass=check_stat($nom);
$frakass=$frakass['frakass'];

if($frakass>150)
{
echo "<p>Vous �tes accro!!</p>";
if(!$isjunky)
	{
	in_point($id,'junky');
	in_log($nom,'Vous devenez accro','junky');
	}
}


$m4="Aaaaaah ....";
$v4=$retour;





$_SESSION['flashsene']='drogue';

    ?>
  </p>
 
<?php  ?>

 
