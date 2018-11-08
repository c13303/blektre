
<?php


include("include/panel.php"); 
$endroit="au bois du muguet";
$q=check_bag($id,"drogue");
$drogue=check_title('dealer');


?>

<div id="texte">


  <p>
    <?php

	if($q<100)
	{
	echo "Vous n'avez pas assez de drogue pour faire un paquet convenable. Les hippie à qui vous le proposez vous regardent vos parts avec mépris.";
	}
 
 else
 
 {
 	$prix=$_SESSION['prixteuf'];
 	no_bag($id,'drogue','100');
	in_log($nom,'Vous vendez '.$drogue.' en teuf','bizness');
	
	update_stat($nom,'money','+'.$prix);
	echo "Vous lachez un paquet ".$drogue." pour ".$prix." euros à un putain de hippie qui va s'en foutre plein les naseaux avant d'aller se trémousser comme un lapin Duracell devant les enceintes.";
	update_stat($nom,'karma','-50');
 }
 
   
 
$m5="Je me tire";
$v5="paris/teuf/14bois"; 


$_SESSION['flashsene']='14teuf';
$perso2=$SESSION_['hapen'];


    ?>
  </p>
 


 
