<?php

 include("include/panel.php"); 


 


?>

<div id="texte">

<?php









?>


  <?php 
$what=check_point($id,"mamanfric");
if ($what)

{
echo "- Encore ? Bon, ch�ri .. Je veux bien, mais c'est la derniere fois !!";
in_log($nom,"Vous demandez 100 balles � votre m�re","fils � maman");
in_point($id,"maman100");
update_stat($nom, 'karma','-500');
$malus1="karma";
$malus12="sex";
update_stat($nom, 'sex','-500');
$m2="Je la remercie et je raccroche";
$v2="paris/zonmai_room/z1_raccroche";
$m3="J'invite cette grosse vache � aller se faire ramoner";
$v3="paris/zonmai_room/z1_mamanfuck"; 


}
else
{

echo "<br/>
<br/>- Bon, tu n'as qu'� passer venir les prendre mon ch�ri.


.";
  
  
    in_log($nom,"Vous demandez 100 balles � votre m�re","fils � maman");
in_point($id,"maman100");
update_stat($nom, 'best','+100');
$bonus1="score";
    $m1="J'exprime ma gratitude et je raccroche";
$v1="paris/zonmai_room/z1_raccroche";
$m2="Je raccroche";
$v2="paris/zonmai_room/z1_raccroche";
$m3="J'invite cette grosse vache � aller se faire ramoner";
$v3="paris/zonmai_room/z1_mamanfuck"; 
}

    ?>

  
   
<?php 
$_SESSION['flashsene']='maman';
 $mere=check_family($nom);
$perso2=$mere['mere'];
 
 



?>

 





