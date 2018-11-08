<?php  include("include/panel.php");
 

 

 
 $keuf=check_special('keuf');

 ?>
 
 <div id="texte">
 <p><?php echo $keuf; ?> vous plaque promptement &agrave; l'aide d'une cl&eacute; de bras en hurlant: &quot;Le flic de Los Angeles !&quot;. </p>
 <p>Vous mangez un coin de bureau avant de vous &eacute;vanouir.
   <?php 


 
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
 





$entree='';
$entree2='';

    ?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  </p>
