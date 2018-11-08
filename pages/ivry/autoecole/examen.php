<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php

 $action1='place ="Auto école"';

include("include/panel.php"); 





if($present)$hapen=$present;


?>

<div id="texte">

<p>La pimb&ecirc;che de monitrice vous avertit que cela co&ucirc;te 1000 euros pour passer l'examen. </p>
<p>- Attention, il est difficile, ajoute-t-elle, l'air totalement coinc&eacute;e de fesses. Cela dit, son petit c&ocirc;t&eacute; p&eacute;tasse en tailleur vous excite terriblement. </p>
<p>
    <?php
if($money>=1000)
{
	
$m1="Je suis prêt à passer l'epreuve";
$v1="ivry/autoecole/epreuve"; 

}
	else
	{
	echo "Vous n'avez même pas de quoi vous payer l'epreuve. Vous êtes pitoyable.</p>";
	}
	
	
	
	
	
	


$m5="Je décompe";
$v5=$_SESSION['rue']; 

$_SESSION['flashsene']='autoecole';


 ?>
</p>
  