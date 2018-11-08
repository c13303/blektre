<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 
 
 
 ?>
<div id="texte">
  <p>Vous arrivez devant la jolie deumeure de Josiane.
    <?php
$present=player_present($nom,$place);
$hapen=$present['nom'];
if($hapen)
{
echo $hapen. "se trouve là, et sonne à la porte. Il a l'air particulierement arrogant avec son costume ridicule. Vous l'avez
toujours soupçonné de se taper josiane.";

$m1="Je le fume";
$v1="paris/josiane/josiane_fume";
$m2="Je l'ignore et j'appelle Josiane";
$v2="paris/josiane/chezjosianeopen";
}
else
{
echo "Vous &ecirc;tes chez Josiane. Vous sonnez &agrave; la porte, mais elle semble tarder &agrave; r&eacute;pondre. Et si elle &eacute;tait avec un autre mec ?";
$m2="Je hurle";
$v2="paris/josiane/chezjosianeopen";

}
$m3="Je me tire";
$v3="paris/_street/streetnord";
$_SESSION['flashsene']='chezjosiane';

    ?>
  </p>
  <p>&nbsp;
  
  </p>
 
<?php  ?>

 
























