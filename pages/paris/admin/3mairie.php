<?php




 $action1='';
$action2='retour="paris/admin/3mairie"';
$action3='place="Centre administratif"';

$keuf=check_special('keuf');

include("include/panel.php"); 

 ?>
<div id="texte">
 <p>La mairie est en fait un commissariat dot&eacute; d'un cagibi pour assurer l'intendance administrative de la ville. L'inspecteur <?php echo $keuf; ?> vous accueille avec une arrogance inégalée dans tout les pires feuilletons policiers.</p>
 <p>- Qu'est ce qu'il veut le marsouin ? D&eacute;p&ecirc;che toi sinon j't'assure que y'a de la place au trou ! </p>

   <?php
   $taulard1='';$taulard2='';$taulard3='';
 $listetaulards=requete('SELECT * FROM checkpoint WHERE objet="prison" ORDER BY id DESC');
 $n=0;
 while($data=mysqli_fetch_assoc($listetaulards))
 {
 $n++;
 $var_tolar='taulard'.$n;
 // taulard1 = 
 $$var_tolar=get_nom($data['id_player']);
 }

 
	if($taulard1&&$taulard1!=$nom)
	{
		echo '<p>'.$taulard1.' hurle qu`il exige son avocat.</p>';
		$_SESSION['taulard1']=$taulard1;
		$m1='Je voudrais payer la caution de '.$taulard1;
		$v1='paris/prison/libere1';
	}
		
		if($taulard2&&$taulard2!=$nom)
	
	{
		echo '<p>'.$taulard2.' chiale doucement au fond de la cellule.</p>';
		$_SESSION['taulard2']=$taulard2;
				$m2='Je voudrais payer la caution de '.$taulard2;
		$v2='paris/prison/libere2';
		}
		
	if($taulard3&&$taulard3!=$nom)
		{
		
		echo '<p>'.$taulard3.' essaye de chier, mais semble incommodé par votre présence.</p>';
		$_SESSION['taulard3']=$taulard3;
				$m3='Je voudrais payer la caution de '.$taulard3;
		$v3='paris/prison/libere1';
  }


$terror=check_point($id,'terror');
if($terror){
$m4='Je voudrais dénoncer une organisation terroriste';
		$v4='paris/prison/denonce';
}



$m5='Je sors';
$v5="paris/admin/3administration";
	

  ?>
    
  
    

       
   <?php 
$perso2=$taulard1;
$perso3=$taulard2;
$perso4=$taulard3;
$hapen=$keuf;
$_SESSION['flashsene']='prison';

 ?>
    
 
    

    

    

    

    

    

    

   </p>
