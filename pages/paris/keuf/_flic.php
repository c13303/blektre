<?php  include("include/panel.php");
 

 

 
 $keuf=check_special('keuf');

 $drogue=check_title('dealer');
$dileur=check_special('dealer');
$_SESSION['flashsene']='_flic';
 ?>
 
 <div id="texte">
 
 
 <?php 

   $qdrug=check_bag($id,'drogue');
 if ($dileur==$nom)
 {
 $qdrug=200;
 }

  

  
 echo $keuf.' vous met contre le mur et vous fouille en vous tatant bien les couilles.<br>';
 if ($qdrug>0&&$sex<2000)
 { 
 if($qdrug>0)
 echo "Il trouve ".$drogue." dans votre poche. Tel Rahan qui piège la biche, il vous passe les menottes. <br><br>-";
 
 if($sex<2000)
 echo "- C'est criminel d'avoir une sale gueule comme la tienne. ";
 
 echo " Hop, au trou.";
 
 
 in_point($id,'prison');
 requete('UPDATE special SET player="Blektre" WHERE player="'.$nom.'";');
 in_log($nom,'Vous vous faites serrer par les keufs!','prison');
 in_log($keuf, 'Vous coffrez '.$nom, 'Bon keuf');
 no_bag($id,'drogue',1000000);
 
 $listetaulards=requete('SELECT * FROM checkpoint WHERE objet="prison" ORDER BY id DESC');
 $n=0;
 while($data=mysqli_fetch_assoc($listetaulards))
 {
	 $n++;
	 if($n>3)
	 {
		 requete('DELETE FROM checkpoint WHERE objet="prison" AND id='.$data['id'].';');
		 no_point($data['id_player'],'prison');
		 $libere=get_nom($data['id_player']);
		 in_log($libere,'Vous êtes libéré de prison, cellule trop pleine');
	 }
 }
 
 
 
 $m1='Et meeeerde';
 $v1='paris/prison/in';
 }

else
{ 

if($sex>2000)
echo "Il ne trouve rien, et semble s'enerver.<br><br>- Allez, dégage.";
else
echo "Il vous fait un gros clin d'oeil. <p>- Tu sais que t'es mega sexy ? Tu devrais passer me voir au comico, un de ces quatre.. Allez, file ma coquine.";
in_point($id,'controled');
	$m2="Je me tire d'ici tel un chien battu";
	$v2=$retour;


}


	





 $hapen=$keuf;




$entree='';
$entree2='';

    ?>


 
























