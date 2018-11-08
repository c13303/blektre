<?php 
 // endroit texte
$action1='place ="Prison"';

// chemin de retour
 $action2='retour="paris/prison/in"';
$_SESSION['rue']="paris/prison/in";
//eventuelle préaction
// $action3='place =""';

require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];


  $keuf=check_special('keuf');
 $listetaulards=requete('SELECT * FROM checkpoint WHERE objet="prison" ORDER BY id DESC');
 $n=0;
 while($data=mysqli_fetch_assoc($listetaulards))
 {
 $n++;
 $var_tolar='taulard'.$n;
 // taulard1 = 
 $$var_tolar=get_nom($data['id_player']);
 
 }
 
 
 
 ?>
 
<div id="texte">
  <p>Vous commencez &agrave; tenter de creuser un trou mais le seul r&eacute;sultat que vous obtennez est une profonde envie de chier, car cela commence &agrave; faire un certain temps que vous &ecirc;tes dans la cellule. </p>
  <p>Il y a bien un trou pour chier, mais rien pour se dissimuler du regard des autres d&eacute;tenus, ainsi que du gardin.</p>
  <p>Vous qui &ecirc;tes plutot du genre intimiste lorsqu'il s'agit de l'acte cr&eacute;ateur, vous avez envie de pleurer.</p>
  <p>&nbsp;</p>
  <?php 
	
	

	

$m1="Je hurle au keuf de me liberer";
$v1="paris/prison/hurle";
$m2="Je tourne en rond";
$v2="paris/prison/in";
$m3="Je chiale comme une merde";
$v3="paris/prison/chiale";
	
$perso2=$taulard1;
$perso3=$taulard2;
$perso4=$taulard3;
$hapen=$keuf;
$_SESSION['flashsene']='prison';
$prison=check_point($id,'prison');
if(!$prison)
{ 
echo "<p>-  Bon, quelqu'un a payé ta putain de caution. Allez tire toi, dit le keuf</p>";
$m1="Je décampe";
$v1='paris/admin/3administration';
$m2='';$v2='';$m3='';$v3='';
}
    ?>
  

  
</p>
 


 
























