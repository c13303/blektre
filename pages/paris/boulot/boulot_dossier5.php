<?php




 $action1='karma=karma+30';
$action3='';


include("include/panel.php"); 

 $tube=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="tube";'));

 ?>
<div id="texte">
  <p>Vous pleurez des larmes de col&egrave;re. Vous vous crispez sur votre crayon et vous serrez tr&egrave;s fort le dossier dans votre main gauche. Derri&egrave;re vous, Patricia s'amuse &agrave; faire des photocopies de ses nichons. Vous la trouvez vraiment trop conne. </p>
  <br>
  A la radio passe le dernier tube de <?php echo $tube['player']; ?> qui passe et repasse en boucle. Soudain vous apercevez une feuille rose, comme celles du dossier, qui traine dans la corbeille.

  <?php 
 
 
 $m1="Je m'en saisis et je la brandis tel Excalibur";
$v1="paris/boulot/boulot_dossier_complete";

$m2="Je fonce aux chiottes";
$v2="paris/boulot/boulot_wc";
$m3="J'appelle Patricia";
$v3="paris/boulot/boulot_patricia";







// chouicess
  
  
  
  
    ?>

 
<?php 
$_SESSION['flashsene']='bureau';
 ?>

 














