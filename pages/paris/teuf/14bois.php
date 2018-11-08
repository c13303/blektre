
<?php

 $action1='place ="Bois du muguet"';
$action2="retour='paris/teuf/14bois'";
include("include/panel.php"); 
$endroit="au bois du muguet";


$traveler=check_special('traveler');

?>

<div id="texte">

  <p>Les arbres du bois du muguet sont toujours aussi laids. C'est sans doute &agrave; cause de la rave-party, qui dure depuis quatorze jours, qui s'y d&eacute;roule. Des hippies trainent, ici et l&agrave;. C'est un bon endroit pour faire du biz, car c'est la pénurie de défonce.</p>

  <p>
    <?php

	
	 $dealerprice=check_value('dealer');
	
	 $r=rand(0,$dealerprice); 
	 $r2=rand(1,3);
	 $r3=rand(1,4);
	 if($r3==4)
	 $r3=3;
	 else
	 $r3=1;

	 $prix=($dealerprice/$r2)+$r*$r3;
	 $prix=round($prix,0);
	echo "Le prix de la drogue se vend actuellement à ".$prix." euros le paquet.</p><p>";
	
	$_SESSION['prixteuf']=$prix;
	
	
 if ($present&&$present!=$traveler)
 {
 echo $present." se ballade également, habillé en kaki. Encore un enfoiré de hippie, pensez vous.<br>";
 $hapen=$present;
$m4=$present.' est plutôt louche. Je ferais mieux de le fumer';
$v4="sp/fume"; 
 
 }
 
$drogue=check_title('dealer');


$q=check_bag($id,"drogue");

$m1="Je fais la teuf";
$v1="paris/teuf/14teuf";

if($q>0)
{

$m2="Je me drogue";
$v2="sp/sp_drogue";
$m3='Je vends de la drogue';
$v3="paris/teuf/14vente"; 
}



 
   
 
$m5="Je me tire";
$v5="paris/teuf/14exit"; 

$_SESSION['flashsene']='14bois';
$perso2=$hapen;


    ?>
  </p>
 


 
